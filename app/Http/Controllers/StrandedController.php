<?php

namespace App\Http\Controllers;

use App\District;
use App\State;
use App\Stranded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class StrandedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        // $arr_ip = geoip()->getLocation('59.91.87.140');
        // dd($arr_ip);
        $districts = District::orderBy('name','asc')->get();
        $states = State::orderBy('name','asc')->get();
        
        // return view ('stranded.form',compact('districts','states'));

         return view ('stranded.temporary',compact('districts','states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);

        $this->validate($request,[

            
            'name' => 'required|alpha_spaces|max:140',
            'fname' => 'required|max:140',
         // 'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|regex:/[0-9]{10}/',
            'mizoramaddress' => 'required|max:140',
            'mizoramdistrict' => 'required',
            'outsideaddress' => 'required|max:140',
            'outsidestate' => 'required',
            'occupation' => 'required',
            'gender' => 'required',
            'problem' => 'max:140',
            'work_details' => 'required|max:140',
            

            
            ]);

            if (Stranded::where('name', '=', $request->name)->exists() && Stranded::where('fname', '=', $request->fname)->exists() && Stranded::where('phone', '=', $request->phone)->exists()) {
                
                // dd("this is endered");
                return redirect()->back()->with('userexist', 'Warning!! You are already registered in our database, For more information please contact the number below'); 
             }

             if($request->email != null)
             {
                 return redirect()->back();
             }


             if($request->fname == null)
             {
                 $request->fname = "NA";
             }

             if($request->epic == null)
             {
                 $request->epic = "NA";
             }
             
             if($request->problem == null)
             {
                 $request->problem = "NA";
             }

             if($request->gender == null)
             {
                 $request->gender = "NA";
             }
             
             


            $stranded= new Stranded();
            
            $stranded->name = $request->name;
            $stranded->fname = $request->fname;
            $stranded->phone = $request->phone;
            $stranded->epic = $request->epic;
            $stranded->mizoramaddress = $request->mizoramaddress;
            $stranded->mizoramdistrict = $request->mizoramdistrict;
            $stranded->outsideaddress = $request->outsideaddress;
            $stranded->outsidestate = $request->outsidestate;
            $stranded->occupation = $request->occupation;
            $stranded->gender = $request->gender;
            $stranded->problem = $request->problem;
            $stranded->geo_state = $arr_ip->state_name;
            $stranded->ip_address = $arr_ip->ip;
            $stranded->work_details = $request->work_details;

            $stranded->save();

            return redirect("/success");
    }

    public function success()
    {
        return view('stranded.success');
    }

    public function view()

    {
        $districts = District::orderBy('name','asc')->get();
        $states = State::orderBy('name','asc')->get();

        $strandeds = Stranded::orderBy('id')->paginate();

        return view('stranded.strandedList',compact('strandeds','districts','states'));
        
    }

     public function viewState(Request $request)
     {
        //  $strandeds = Stranded::orderBy('id')->paginate();

         // $forms = DB::table('forms')->where('status','0')->get();

         $districts = District::orderBy('name','asc')->get();
         $states = State::orderBy('name','asc')->get();

        //  $strandeds = Stranded:: where('outsidestate','==','$request->outsidestate')->get();

         $strandeds = DB::table('strandeds')->where('outsidestate', 'like', "%".$request->outsidestate."%")->paginate();

        //  dd($request->outsidestate);

        //  dd("what");
        // dd($strandeds);

         return view('stranded.strandedListstate',compact('strandeds','districts','states'));
       
     }

     public function viewDistrict(Request $request)
     {

        $districts = District::orderBy('name','asc')->get();
        $states = State::orderBy('name','asc')->get();

        $strandeds = DB::table('strandeds')->where('mizoramdistrict', 'like', "%".$request->mizoramdistrict."%")->paginate();

        return view('stranded.strandedListdistrict',compact('strandeds','districts','states'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from strandeds where id = ?',[$id]);
echo "Record deleted successfully";
    }
}
