<?php

namespace App\Imports;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;


class secondsheetimport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows){
        // foreach($rows as $row){
        //     DB::table('users')->where('name',$row[0])->update(['age'=>$row[1]]);
        //     DB::table('users')->where('name',$row[0])->update(['address'=>$row[2]]);
        // }
        $second = $rows;
        return $second;
    }
}
