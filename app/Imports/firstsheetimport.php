<?php

namespace App\Imports;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class firstsheetimport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    // use Importable;

    public function collection(Collection $rows)
    {
            return $rows;

        
    }

}















    // public function array(array $row)
    // {
    //     return new User([
    //     'name'    => $row[0],
    //     'email'    => $row[1], 
    //     'password' => $row[2],
    //     ]);
    // }
