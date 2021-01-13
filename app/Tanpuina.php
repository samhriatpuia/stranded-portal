<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanpuina extends Model
{
    // Fetch all Tanpuina
   public static function getAll(){
    $states=DB::table('tanpuinas');
    $records = DB::table('tanpuinas')->select(
        'name','name', 'fname', 'outsidestate','mizoramdistrict','bank_name','bacnk_branch','ac_name','ifsc',
        'ac_number','occupation','phone','work_details','geo_state','ip_address'
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

}
