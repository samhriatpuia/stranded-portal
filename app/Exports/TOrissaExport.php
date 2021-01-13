<?php

namespace App\Exports;

use App\Tanpuina;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TOrissaExport implements FromCollection,WithHeadings
{
    public function headings(): array {
        return [
            'name','name', 'fname', 'outsidestate','mizoramdistrict','bank_name','bacnk_branch','ac_name','ifsc',
            'ac_number','occupation','phone','work_details','geo_state','ip_address'
        ];
      }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tanpuina::all()->where('outsidestate','Orissa');
    }
}
