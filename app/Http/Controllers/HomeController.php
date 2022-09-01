<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\TeamM;

use App\Models\Quote;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) 
        {
            if (Auth::user()->usertype=='0')
             {
                 $team = TeamM::all();
                return view ('user.home',compact('team'));
            }
            else
            {
                return view ('admin.home');
            }
        }
        else

        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) 
        {
            return redirect ('home');
        }

        else
        {
        $team = TeamM::all();

        return view('user.home',compact('team'));
        }
    }

    public function quote(Request $request)
    {
        $data = new Quote;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->services=$request->service;
        $data->procurement_link=$request->procurement_link;

        $data->phone=$request->phone;
        $data->date=$request->date;
        $data->shippingfrom=$request->from;
        $data->shippingto=$request->to;
        $data->message=$request->message;
        $data->status='IN PROGRESS';

        if (Auth::id()) 
        {
        
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Quote request successful,we will contact you soon');
    }

    public function myrequest()
    {
        if (Auth::id()) 
        {
            $userid=Auth::user()->id;
            $request=Quote::where('user_id',$userid)->get();
                    return view('user.myrequest',compact('request'));

        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_request($id)
    {
        $data=Quote::find($id);
        $data->delete();

        return redirect()-> back();
    }
}
