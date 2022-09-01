<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeamM;

use App\Models\Quote;



class AdminController extends Controller
{
    public function addteam()
    {
        return view('admin.add_team');
    }

    public function upload(Request $request)
    {

        $team=new TeamM;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('teamMimage',$imagename);
        $team->image=$imagename;

        $team->name=$request->name;

        $team->phone=$request->phone;
        $team->specialty=$request->specialty;

        $team->save();
        return redirect()->back()->with('message','Team member added successfully');
    }

    public function showrequest()
    {
        $data=Quote::all();
        return view('admin.showrequest',compact('data'));
    }

    public function approved($id)
    {
        $data=Quote::find($id);
        $data->status='Transaction In progress';
        $data->save();
        return redirect()->back();
    }

     public function complete($id)
    {
        $data=Quote::find($id);
        $data->status='Transaction is complete';
        $data->save();
        return redirect()->back();
    }

    public function decline($id)
    {
        $data=Quote::find($id);
        $data->status='Transaction could not be completed';
        $data->save();
        return redirect()->back();
    }

      public function showteammembers()
    {
        $team=TeamM::all();
        return view('admin.showteammembers',compact('team'));
    }

    public function deleteteammembers($id)
    {
        $team=TeamM::find($id);
        $team->delete();
        return redirect()->back();
    }

     public function updateteammember($id)
    {
        $team=TeamM::find($id);

        return view('admin.updateteammember',compact('team'));
    }

}
