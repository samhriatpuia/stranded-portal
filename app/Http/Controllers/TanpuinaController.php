<?php

namespace App\Http\Controllers;

use App\District;
use App\State;
use App\Stranded;
use App\Tanpuina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TanpuinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::orderBy('name','asc')->get();
        $states = State::orderBy('name','asc')->get();
        return view ('stranded.tanpuinaForm',compact('districts','states'));
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
         
            
            
            'mizoramdistrict' => 'required',
            'outsidestate' => 'required',

            'bank_name' => 'required',
            'bank_branch' => 'required',

            'ac_name' => 'required',
            'ifsc' => 'required',

            'ac_number' => 'required',
            'ac_number1' => 'required',

            'occupation' => 'required',
            'phone' => 'required|regex:/[0-9]{10}/',


            'work_details' => 'max:140',
            
            
            ]);


            // if (Stranded::where('name', '=', $request->name)->exists() && Stranded::where('fname', '=', $request->fname)->exists() && Stranded::where('phone', '=', $request->phone)->exists()) {
                
            //     // dd("this is endered");
            //     return redirect()->back()->with('userexist', 'Warning!! You are already registered in our database, For more information please contact the number below'); 
            //  }


            if (Tanpuina::where('name', '=', $request->name)->exists() && Tanpuina::where('phone', '=', $request->phone)->exists()) {
                
                // dd("this is endered");
                return redirect()->back()->with('userexist', 'Warning!! You are already submitted your a/c details  in our database, For more information please contact the number below'); 
             }

            if($request->ac_number != $request->ac_number1)
            {
                return redirect()->back()->with('acNotmatching','The a/c number chhut luh te khu a in ang lo tlat mai');
            }

             if($request->email != null)
             {
                 return redirect()->back();
             }


             if($request->fname == null)
             {
                 $request->fname = "NA";
             }



             $tanpuina = new Tanpuina();
             $tanpuina->name = $request->name;
             $tanpuina->fname = $request->fname;

             $tanpuina->outsidestate = $request->outsidestate;
             $tanpuina->mizoramdistrict = $request->mizoramdistrict;

             $tanpuina->bank_name = $request->bank_name;
             $tanpuina->bank_branch = $request->bank_branch;

             $tanpuina->ac_name = $request->ac_name;
             $tanpuina->ifsc = $request->ifsc;

             $tanpuina->ac_number = $request->ac_number;


             $tanpuina->occupation = $request->occupation;
             $tanpuina->phone = $request->phone;

             $tanpuina->work_details = $request->work_details;

             $tanpuina->geo_state = $arr_ip->state_name;
             $tanpuina->ip_address = $arr_ip->ip;

             $tanpuina->save();

             return redirect("/successTanpuina");
             


    }

    public function success()
    {
        return view('stranded.successTanpuina');
    }


    public function view()

    {
        $districts = District::orderBy('name','asc')->get();
        $states = State::orderBy('name','asc')->get();

        $tanpuinas = Tanpuina::orderBy('id')->paginate();

        return view('stranded.tanpuinaList',compact('tanpuinas','districts','states'));
        
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
        DB::delete('delete from tanpuinas where id = ?',[$id]);
        echo "Record deleted successfully";
            }
}
