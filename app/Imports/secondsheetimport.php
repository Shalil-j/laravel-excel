<?php

namespace App\Imports;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToArray;

class secondsheetimport implements ToArray
{
    /**
    * @param Collection $collection
    */
    public function array(array $row)
    {
        return new User([
        // 'name'    => $row[0],
        'age'    => $row[1], 
        'address' => $row[2],
        ]);
    }
}
