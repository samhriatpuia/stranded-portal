<?php

namespace App\Exports;

use App\Stranded;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TripuraExport implements FromCollection,WithHeadings
{
    public function headings(): array {
        return [
            'id','','','name', 'fname', 'phone','epic','mizoramaddress','mizoramdistrict','outsideaddress','outsidestate',
            'occupation','gender','problem',
        ];
      }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Stranded::all()->where('outsidestate','Tripura');
    }
}
