<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index(){
    return "Selamat Datang";
}
public function about(){
    return "Nama : Arya Admaja <br>NIM :2041720104";
}
public function articles($id){
    return "Halaman Artikel Dengan ID $id";
}

}
    