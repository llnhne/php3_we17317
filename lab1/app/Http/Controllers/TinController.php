<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index(){
        // echo 'đây là trang chủ';exit();
        return view('profile.index');
    }
    public function lienhe(){
        // echo 'đây là trang liên hệ';exit();
        return view('profile.lienhe');
    }
    public function lay1tin($id){
        $data = ['id' => $id];
        return view('profile.chitiet',$data);
    }
    public function thongtinsv($name){
        $name = 'Lan Anh';
        $id = 'PH19505';
        $phone = '0838397376';
        $city = 'Hà Nội';
        $birthday = '26/01/2002';
        $address = '512 Trần Khát Chân';
        return view('profile.thongtinsv', [
            'name' => $name,
            'id' => $id,
            'phone' => $phone,
            'city' => $city,
            'birthday' => $birthday,
            'address' => $address
        ]);
    }
}
