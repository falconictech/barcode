<?php

namespace App\Http\Controllers;

use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarCodeController extends Controller
{
    public function store()
    {

        for($i=16026; $i<=16030; $i++){
            $name = 'STC-T-'.$i;
            $image_name = $name.'.png';
            $file = base64_decode(DNS1D::getBarcodePNG($name, 'C39',1,60,array(1,1,1), true));
            
            Storage::disk('public')->put('barcode/'.$image_name, $file);

        }
        

        return back();
    }
}
