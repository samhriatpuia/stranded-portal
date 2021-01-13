<?php

namespace App\Exports;

use App\Stranded;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HnahthialExport implements FromCollection,WithHeadings
{
    public function headings(): array {
        return [
            'id','','','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
            'occupation','gender','problem','geo_state', 'ip_address', 'work_details'
        ];
      }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Stranded::all()->where('mizoramdistrict','Hnahthial');
    }
}
