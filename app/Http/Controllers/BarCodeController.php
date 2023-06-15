<?php

namespace App\Http\Controllers;

use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarCodeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'mask' => ['required', 'string'],
            'min' => ['required', 'integer'],
            'max' => ['required', 'integer'],
        ]);

        $mask = $request->mask;
        $min = $request->min;
        $max = $request->max;

        for($i = $min; $i<=$max; $i++){
            $barcode = $mask."".$i;
            $image_name = $barcode.'.png';
            $file = base64_decode(DNS1D::getBarcodePNG($barcode, 'C39',1,60,array(1,1,1), true));
            Storage::disk('public')->put('barcode/'.$image_name, $file);

        }
        

        return back();
    }
}
