<?php
namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        $mahasiswa = new student();
        return view('rumahkuning.home', ["mahasiswa" => $mahasiswa->all()]);
    }
    public function getDetail($nim){
        $mahasiswa = new student();
        return view('rumahkuning.detail', ["mahasiswa" => $mahasiswa->getDetail($nim)]);
    }
}
