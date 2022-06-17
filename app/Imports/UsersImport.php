<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use App\Imports\firstsheetimport;
use App\Imports\secondsheetimport;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\Importable;
// use Maatwebsite\Excel\Concerns\ToCollection;


class UsersImport implements WithMultipleSheets,ToModel,ToArray
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    use Importable;
    public function sheets(): array
    {
        return [
            'firstsheetimport' => new firstsheetimport(),
            'secondsheetimport' => new secondsheetimport(),
        ];
    }



    // private $users;

    // public function __construct(){
    //     $this->User::select('name')->get();
    // }
    // public function sheet1(Collection $rows){


    //     foreach ($rows as $row)
    //     {
    //             $studentDetail =  User::create([
    //             'stu_unique_id'   => '#STU'.rand(111,99999),
    //             'stu_name'        => $row['Name'],
    //             'stu_email'       => $row["Email"],
    //             'stu_age'         => $row["Age"],
    //             'stu_address'     => $row["Address"],
    //             'password'        => Hash::make($row['password']),
        
    //         ]);
 
            
    //     }
    // }
    // // public function model(array $row)
    // // {
    // //     $sheetmerge=$this->users->where('name',$row['name'])->first();
    // //     return new User([
    // //         'name'    => $row[0],
    // //        'email'    => $row[1], 
    // //        'password' => Hash::make($row[2]),
    // //     //    'age'=>$sheet1->$user
    // //     //    'address'=>$sheet2->User
    // //     ]);

            

    // // }

}
