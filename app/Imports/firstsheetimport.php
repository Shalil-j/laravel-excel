<?php

namespace App\Imports;
use App\Models\User;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class firstsheetimport implements ToArray
{
    /**
    * @param Collection $collection
    */
    use Importable;

    public function array(array $row)
    {
        return new User([
        'name'    => $row[0],
        'email'    => $row[1], 
        'password' => $row[2],
        ]);
    }
}
