<?php

namespace App\Controllers;

class Homekaryawan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Coffee Dua Arah'
        ];

        return view('pageskaryawan/homekaryawan', $data);
    }

    // public function coba()
    // {
    //     echo $this->ama;
    // }

}
