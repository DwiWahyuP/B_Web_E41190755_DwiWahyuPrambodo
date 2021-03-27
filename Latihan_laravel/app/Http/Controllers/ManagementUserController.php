<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class ManagementUserController extends Controller  
{
    public function index (){
        // return "Halo ini adalah method index, dalam Controller ManagementUser";
        $nama ="Arvita Agus Kurniasari";

        $pelajaran =["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view ('home', compact('nama','pelajaran'));

    }

    // public function create (){
    //     return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    // }

    // public function socket (Request $Request){
    //     return "Method ini nantinya akan digunakan untuk manciptakn data user baru";
    // }

    // public function show ($id){
    //     return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id =" . $id;
    // }

    // public function edit ($id){
    //     return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id =" . $id;
    // }

    // public function update (Request $Request, $id){
    //     return "Method ini nantinya akan digunakan untuk mengubah data user dengan id =" . $id;
    // }

    // public function destroy ($id){
    //     return "Method ini nantinya akan digunakan untuk menghapus data user dengan id =" . $id;
    // }
}

