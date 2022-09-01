 <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Get A Quote</h6>
                    <h1 class="mb-4">Request A Free Quote</h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-3 px-4 px-sm-5">
                        <form class="py-7" action="{{url('quote')}}" method="POST">

                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <select name="service" class="custom-select border-0 px-4" id="serviceSelect" style="height: 47px;" onchange="handleServiceSelect()">
                                    <option selected>Select A Service</option>
                                    <option value="Sourcing & Procurement">Sourcing & Procurement</option>

                                    <option value="Air freight">Air freight</option>
                                    <option value="Ocean Freight">Ocean Freight</option>

                                </select>

                                <input type="" name="procurement_link" id="linkForm" style="display: none; width: 100%;" placeholder="Enter a link or url of supplier/vendor e.g http//www.1688.com" required>
                            </div>


                            <div class="form-group">
                                <select name="from" class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Shipping From</option>
                                    <option value="NIGERIA">NIGERIA </option>
                                    <option value="CHINA"> CHINA</option>
                                    <option value="TURKEY">TURKEY </option>
                                    <option value="USA">USA </option>
                                    <option value="ENGLAND">ENGLAND </option>
                                    <option value="INDIA">INDIA </option>
                                    <option value="UAE">UNITED ARAB EMIRATE </option>


                                </select>
                            </div>

                            <div class="form-group">
                                <select name="to" class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Shipping To</option>
                                    <option value="NIGERIA">NIGERIA </option>
                                    <option value="ENGLAND">ENGLAND </option>
                                    <option value="USA">U.S.A </option>
                                    <option value="TURKEY">TURKEY</option>
                                    <option value="INDIA">INDIA </option>
                                    <option value="TURKEY">UNITED ARAB EMIRATE </option>
                                    <option value="TURKEY">CHINA </option>

                                </select>
                            </div>

                            <div class="form-group">
                                <input name="phone" type="text" class="form-control border-0 p-4" placeholder="Your phone" required="required" />
                            </div>

                             <div class="form-group">
                                <input name="date" type="date" class="form-control border-0 p-4"  required="required" />
                            </div>
                            <div class="form-outline">

                              <textarea name="message" class="form-control" id="textAreaExample1" rows="4" placeholder="Enter Product description. E.g product type,product type,prouct weight,quantity etc"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const handleServiceSelect = () => {
            let selectBox = document.querySelector("#serviceSelect")
            let inputBox = document.querySelector("#linkForm")

            if (selectBox.value === "Sourcing & Procurement"){
                
                inputBox.style.display = "block"
            }else{
                inputBox.style.display = "none"
            }

        }
        
    </script>