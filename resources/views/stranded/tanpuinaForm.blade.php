@extends('layouts/app')
@section('title','Home')

@section('content')
<div class="d-none d-lg-block ">
        <div style="height: 250px; background-color: rgba(13, 56, 130);" class="rounded">   
            <div class="container">
                <h4 class="text-white pt-5">He portal hi Mizoram pawna tangkhang mek hlawh la tawh lo leh harsatna tawk mek te tana, sawrkar tanpui theihna tura Bank A/C lakna tur a ni e (Mizoram chhunga awm mek te tan a ni lo! )</h4>
                <br>
                <div class=form-row>

                   <button style="background-color: rgba(214, 21, 87);" class="btn col-md-1 mr-1"><a href="#contactus" class=" text-white"> Contact Us </a></button>
                    <button style="background-color: rgba(214, 21, 87);" class="btn col-md-1 ml-1"> <a href="#apply" class=" text-white"> Apply </a></button>

                </div>   
            </div>

        </div>
</div>

<div style ="background-color: rgba(13, 56, 130);" class=" d-lg-none">

<p class="text-white px-3 py-3">He portal hi Mizoram pawna tangkhang mek hlawh la tawh lo leh harsatna tawk mek te tana, sawrkar tanpui theihna tura Bank A/C lakna tur a ni e (Mizoram chhunga awm mek te tan a ni lo! )</p>

</div>


<div class="container rounded border my-md-4 ">

@if (Session::has('userexist'))
    <div class="alert alert-info">
        <ul>
            <li>{{ Session::get('userexist') }}</li>
        </ul>
    </div>
@endif

@if (Session::has('acNotmatching'))
    <div class="alert alert-info">
        <ul>
            <li>{{ Session::get('acNotmatching') }}</li>
        </ul>
    </div>
@endif
        <form class="needs-validation mx-sm-4 mt-3 mt-sm-5 mb-5" method="POST" action="{{ route('tanpuinaS') }}">
        @csrf

            <div  class="form-row ">
                <div class="col-md-6 mb-4">
                    <label for="name">Hming*</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="I hming chhu lut rawh le " >
                   <p class=" text-danger">{{$errors->first('name')}}</p>
                </div>


                <div class="col-md-6 mb-4" id="apply">
                    <label for="fname">Nu/Pa Hming * </label>
                    <input type="text" name="fname" class="form-control" id="fname" placeholder="I nu emaw i pa hming chhu lut rawh le" >
                    <p class=" text-danger">{{$errors->first('fname')}}</p>
                </div>



            </div>



            <div class="form-row" >

                <div class="col-md-6 mb-4">
                    <label for="outsidestate">Mizoram pawn awmna State/UT/India ram pawn *</label>
                    <select name ="outsidestate" class="form-control" >
                                <option value="" disabled selected>I awm chhuahna State kha select rawh le</option>
                            @foreach($states as $state)
                                <option value="{{$state->name}}">{{$state->name}}</option>
                            @endforeach
                        </select>

                        <p class="text-danger">{{$errors->first('outsidestate')}}</p>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="mizoramdistrict">Mizorama awmna District *</label>
                    <select name ="mizoramdistrict" id="mizoramdistrict" class="form-control" >
                                <option value="" disabled selected>Mizorama i awmna District kha select rawh le</option>
                            @foreach($districts as $district)
                                <option value="{{$district->name}}">{{$district->name}}</option>
                            @endforeach
                        </select>

                        <p class=" text-danger">{{$errors->first('mizoramdistrict')}}</p>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="bank_name">Bank Name *</label>
                    <input type="text" name="bank_name" class="form-control" id="bank_name" placeholder="I Bank hming chhu lut rawh le" >
                    <p class="text-danger">{{$errors->first('bank_name')}}</p>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="bank_branch">Bank Branch *</label>
                    <input type="text" name="bank_branch" class="form-control" id="bank_branch" placeholder="I Bank branch kha chhu lut rawh le" >
                    <p class="text-danger">{{$errors->first('bank_branch')}}</p>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="bank_name">A/c holder's Name *</label>
                    <input type="text" name="ac_name" class="form-control" id="ac_name" placeholder="I A/c holder hming chhu lut rawh le" >
                    <p class="text-danger">{{$errors->first('ac_name')}}</p>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="ifsc">Bank IFSC Code</label>
                    <input type="text" name="ifsc" class="form-control" id="ifsc" placeholder="IFSC Code chhu lut rawh le" >
                    <p class="text-danger">{{$errors->first('ifsc')}}</p>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="bank_name">A/c Number *</label>
                    <input type="password" name="ac_number" class="form-control" id="ac_number" placeholder="I A/C number chhu lut rawh le" >
                    <p class="text-danger">{{$errors->first('ac_number')}}</p>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="ac_number1">A/c number chhu lut nawn leh rawh</label>
                    <input type="text" name="ac_number1" class="form-control" id="ac_number1" placeholder="I A/c number chhu lut nawn leh rawh le" >
                    <p class="text-danger">{{$errors->first('ac_number1')}}</p>
                </div>

            </div>


            <div class="form-row">
                <div class="col-md-6 mb-4">
                    <label for="occupation">Mizoram pawna awm chhan *</label>
                    <!-- <input type="text" name="occupation" class="form-control" id="occupation" placeholder="I hnathawh hming emaw zirlai emaw enter rawh le" >
                    <p class="text-danger">{{$errors->first('occupation')}}</p> -->
                    <select name ="occupation" class="form-control">

                                <option value="" disabled selected>Ngun takin chhiar la rawn select rawh le</option>
                            
                                <option value="Category 1" class="py-2">1. Spa,Beautician,Hotel/Resort/Restaurant/Bar staff, Awmpui, Cook,Waiter,SecurityGuard,
                                 SalesPerson,BabySitter, CallCentre,CruiseShip,CabinCrew hlawh la tawh lo & tlukpui thawk te </option>
                                <option value="Category 2" class="py-2">2. Medical refer case/ treatment la mek, Sawrkara bill thei lo</option>
                                <option value="Category 3" class="py-2">3. Medical refer case/ treatment la mek, Sawrkara bill thei</option>
                                <option value="Category 4" class="py-2">4. Student/Eng zirlai pawh</option>
                                <option value="Catagory 5" class="py-2">5. Central/State Sawrkar hnathawk/training, Sumdawng, Corporate Executive, Bank staff, Missionary/Evangelist,
                                 Tourist & a chung Category a tel lo zawng a huam </option>
                           
                        </select>

                        <p class="text-danger">{{$errors->first('occupation')}}</p>
                </div>

                <div class="col-md-6 mb-4">
                    <label for="phone">Phone Number(10-digits) *</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="I biakpawh theihna number chhu lut rawh le" >
                    <p class=" text-danger">{{$errors->first('phone')}}</p>
                </div>


            </div>

            <div class="form-row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="comment">I hnathawhna Details: (140 character or less)</label>
                        <textarea class="form-control" name="work_details" rows="5" id="work_details" placeholder="I hnathawhna Company/Dawr/Restaurant/Resort/Cruise/Spa/etc hming, I hnathawhna address, "></textarea>
                    </div>

                    <p class="text-danger">{{$errors->first('work_details')}}</p>

                </div>

                <div class="col-md-6">
                    <label class="ohnohoney" for="email"></label>
                    <input class="ohnohoney" autocomplete="off" type="email" id="email" name="email" placeholder="Your e-mail here">
                </div>
            
            </div>


            <P class="py-2 font-weight-light"> Heta in report avang hian he portal siam tuten Sawrkar thuchhuak bak chu heta in report te lakah mawh an phur lo a ni</P>

            <button class="btn btn-primary" type="submit">Submit form</button>

        </form>

</div>

<div id="contactus" style="height: auto; background-color: rgba(13, 56, 130);" >


        <div class="px-5 pt-4 text-white">

            <div class="text-center pb-3">

                <h4>Contact Us</h4>
            
            </div>

            <div class="form-row">
                <div class="col-md-4 pr-1 pb-3">
                    <p>Pu Laldawngliana MPS, Addl Secretary</p>
                    <p>Home & Chairman, Task Group on Migrant Workers & Stranded Travellers, Govt. of Mizoram</p>
                    <h>Phone: +91 9862397173</p>
                </div>
                
                <div class="col-md-4 pr-1 pl-1 pb-3">
                    <p>Pu Alexander V Chongthu MCS, Joint Secretary, </p>
                    <p>FCS & CA & Member, Task Group on Migrant Workers & Stranded Travellers, Govt of Mizoram</p>
                    <p>Phone: +91 9612166025</p>
                </div>
                <div class="col-md-4 pl-1 pb-3">
                    <p>Pi Margaret Lalrinawmi MCS, Deputy Secretary</p>
                    <p>GAD & Member Secretary, Task Group on Migrant Workers & Stranded Travellers, Govt of Mizoram</p>
                    <p>Phone: +91 8730927832</p>
                </div>
            </div>
            <div class="text-center">
                        email: covidstrandedmz@gmail.com
            </div>
         
        </div>

        <div class="px-5 pt-5 text-white ">

            <div class="text-center">
                <h5>Disclaimer</h5>
            </div>

            <div class="text-center  pt-3 px-5">
                <p>He portal hi Mizoram  mi leh sa dik tak, Mizoram pawna Covid-19 hrileng vanga tangkhang ten,
                    Mizoram Sawrkar hnena an in report theihna tura buatsaih a ni a, heng mite hi pui turin theihtawp chhuah mek zel a ni a,
                    amaherawhchu heta in report avang hian he portal siam tuten Sawrkar thuchhuak bak chu heta in report te lakah mawh an phur lo
                </p>
            </div>


            <div class="text-center pb-2">
                <p>Chairman</p>
                <p>Task Group on Migrant Workers & Stranded Travellers,</p>
                <p>Government of Mizoram</p>

            </div>
        
        </div>
</div>

<div>
        <p class="py-3 text-xs font-weight-light text-center">Crafted with care by <a href="#" class="text-red">Mizoram State e-Governance Society (MSeGS)</a>, hosted by department of ICT, Government of Mizoram</p>
</div>
@endsection