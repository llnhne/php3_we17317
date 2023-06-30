<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index(){
        // echo 'đây là trang danh sách tin';exit();
        return view('tin');
    }
    public function detail($id){
        // echo "Đây là trang detail của $id";
        $data = ['id'=> $id];
        return view('tin', $data);
    }
}
