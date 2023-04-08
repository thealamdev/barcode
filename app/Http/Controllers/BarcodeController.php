<?php

use App\Http\Controllers\Controller;
use App\Models\Barcode;
use Picqer\Barcode\BarcodeGeneratorPNG;

 class BarcodeController extends Controller
 {
     public function generateBarcode($id)
     {
         $employee = Barcode::find($id);
         $generator = new BarcodeGeneratorPNG();
 
         return response($generator->getBarcode($id, $generator::TYPE_CODE_128))
             ->header('Content-Type', 'image/png');
     }


     public function show($id)
     {
         $employee = Barcode::find($id);
 
         return view('employees.show', compact('employee'));
     }
 }
 
?>
