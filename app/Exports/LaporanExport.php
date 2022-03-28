<?php

namespace App\Exports;

use App\Models\TransaksiHeader;
use Maatwebsite\Excel\Concerns\FromCollection;

class LaporanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TransaksiHeader::all();
    }
}
