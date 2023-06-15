<?php

namespace App\Http\Controllers;

use Milon\Barcode\DNS1D;
use Illuminate\Http\Request;
use App\Rules\MaxGreaterThanMin;
use Illuminate\Support\Facades\Storage;
use Barryvdh\Snappy\Facades\SnappyImage;

class BarCodeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'mask' => ['required', 'string'],
            'min' => ['required', 'integer', 'min:1'],
            'max' => ['required', 'integer', new MaxGreaterThanMin()],
        ]);

        $mask = $request->mask;
        $min = $request->min;
        $max = $request->max;


        // for($i = $min; $i<=$max; $i++){
        //     $barcode = $mask."".$i;
        //     $image_name = $barcode.'.png';
        //     $file = base64_decode(DNS1D::getBarcodePNG($barcode, 'C39',1,60,array(1,1,1), true));
        //     Storage::disk('public')->put('barcode/'.$image_name, $file);

        // }
        $companyName = 'Your Company';

        $html = view('barcode', compact('companyName', 'mask'))->render();
        $imagePath = storage_path('app/public/barcode/' . $mask . '.png');

        SnappyImage::loadHTML($html)->save($imagePath);

        
        return back();
    }
}
