<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class ApiController extends Controller
{
    public function getData()
    {
        return Pegawai::all();
    }

    public function getDataById($id)
    {
        return Pegawai::find($id);
    }

    public function getSearchNama($keyword)
    {
        return Pegawai::where('nama', 'like', "%{$keyword}%")->get();
    }

    public function getSearchJabatan($keyword)
    {
        return Pegawai::where('jabatan', 'like', "%{$keyword}%")->get();
    }
}