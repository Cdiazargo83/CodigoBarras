<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;

use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;


class BarcodeController extends Controller
{
    public function generateBarcode()
    {
        
       
        // Aquí puedes asignar el valor que desees codificar C39
        $data1 = "XIA/48362";

        $data2 = '47741/CRAG503U504683';
        $data3 = '0000001371';
        $data4 = 'EG07/00001949';
        return view('barcode', compact('data1','data2','data3','data4'));
        
    }
}







