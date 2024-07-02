<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student
{
    private $mahasiswa= [
        ["nama"=>"ikrar aprianto","nim"=>"20650028"],
        ["nama"=>"sarif","nim"=>"20650003"],
        ["nama"=>"adam ramadhan","nim"=>"20650001"],
        ["nama"=>"agus saputra kambea","nim"=>"20650128"],
    ];

    public function all(){
        return collect($this->mahasiswa);
    }

    public function getDetail($nim){
        $allmahasiswa = $this->all();
        // $detailMahasiswa = [];
        // foreach ($allmahasiswa as $item ){
        //     if($item["nim"] === $nim){
        //         $detailMahasiswa["nama"] = $item["nama"];
        //         $detailMahasiswa["nim"] = $item["nim"];
        //     }
        // }
        // return $detailMahasiswa;
        return $allmahasiswa->firstWhere('nim', $nim);
    }
}
