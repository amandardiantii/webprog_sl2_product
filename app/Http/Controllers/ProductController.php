<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $arrProduct = [
            [
                "name" => "COSRX Vitamin E Vitalizing Sunscreen",
                "slug" => "cosrx-vitamin-e-vitalizing-sunscreen",
                "status" => "R",
                "price" => 270000
            ],
            [
                "name" => "AVIONE Secret of Jeju Sunscreen",
                "slug" => "avione-secret-of-jeju-sunscreen",
                "status" => "SR",
                "price" => 75000
            ],
            [
                "name" => "AZARINE Sunscreen",
                "slug" => "azarine-sunscreen",
                "status" => "SSR",
                "price" => 60000
            ]
        ];


        return view('product', compact('arrProduct'));
        // return view('mantap')->with('arrMahasiswa', $arrMahasiswa);
    }
}
