<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showhome(){
        return view('frontview.home');
    }

    function showabout(){
        return view('frontview.about');
    }

    function showcontact(){
        return view('frontview.contact');
    }

    function showlogin(){
        return view('login');
    }

    function showregistrasi(){
        return view('registrasi');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showpelanggan(){
        return view('backview.pelanggan');
    }

    function showproduct(){
        return view('backview.product');
    }

    function showuser(){
        return view('backview.user');
    }

}