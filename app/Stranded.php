<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Stranded extends Model
{
    protected $fillable = [
        'name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem','geo_state','ip_address','work_details'
    ];


     // Fetch all users
   public static function getAll(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem','geo_state','ip_address','work_details'
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }


  // Fetch all andra
  public static function getAssam(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->where('outsidestate','Assam')->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }
  // Fetch all andra
  public static function getAndhraPradesh(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->where('outsidestate','Andra Pradesh')->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  // Fetch all arunachal
  public static function getArunachalPradesh(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->where('outsidestate','Arunachal Pradesh')->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }


  // Fetch all bihar
  public static function getBihar(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->where('outsidestate','Bihar')->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  // Fetch all Chhattisgarh
  public static function getChhattisgarh(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->where('outsidestate','Chhattisgarh')->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }
  
  // Fetch all Goa
  public static function getGoa(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }
  

  // Fetch all Gujarat
  public static function getGujarat(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  // Fetch all Haryana
  public static function getHaryana(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  // Fetch all Himachal
  public static function getHimachal(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  // Fetch all JK
  public static function getJK(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }
  // Fetch all JK
  public static function getJharkhand(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  // Fetch all karnataka
  public static function getKarnataka(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  // Fetch all Kerala
  public static function getKerala(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }
  
  public static function getMadyaPradesh(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getMaharashtra(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getManipur(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getMeghalaya(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getNagaland(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getOrissa(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getPunjab(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getRajasthan(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getSikkim(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getTamilNadu(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getTelagana(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }


  public static function getTripura(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getUttaranchal(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getUttarPradesh(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }


  public static function getWestBengal(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getAndamanAndNicobarIslands(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }


  public static function getChandigarh(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }


  public static function getDadarAndNagarHaveli(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getDamanAndDiu(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getDelhi(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }
  public static function getLakshadeep(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }


  public static function getPondicherry(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getLadakh(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getIndiaRamPawn(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getAizawl(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getLunglei(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getMamit(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getKolasib(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getChamphai(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getSerchhip(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getSiaha(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getLawngtlai(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }
  public static function getSaitual(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }

  public static function getHnahthial(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }


  public static function getKhawzawl(){
    $states=DB::table('states');
    $records = DB::table('strandeds')->select(
        'id','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
        'occupation','gender','problem',
    )->orderBy('id', 'asc')->get()->toArray();

    return $records;
  }



  
}
