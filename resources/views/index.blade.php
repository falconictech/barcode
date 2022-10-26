@extends('layouts.app')
@section('content')
    <!-- Hero -->
    <div class="bg-image-bottom">
        <div class="bg-primary-dark-op">
            <div class="content content-top text-center overflow-hidden">
                <div class="py-10">
                    <h1 class="font-w700 text-white mb-10 js-appear-enabled animated fadeInUp" data-toggle="appear"
                        data-class="animated fadeInUp">Index</h1>
                    <h2 class="h4 font-w400 text-white-op js-appear-enabled animated fadeInUp" data-toggle="appear"
                        data-class="animated fadeInUp">Welcome to Qr Code Generator!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="content content-full">
            <div class="row no-gutters justify-content-center text-center nice-copy py-50">
                <div class="col-12">
                    <div class="block block-themed">
                        <div class="block-header">
                            <h3 class="block-title">Primary</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div>{!! DNS1D::getBarcodeHTML('4445645656', 'C39') !!}</div></br>
                            <div>{!! DNS1D::getBarcodeHTML('4445645656', 'POSTNET') !!}</div></br>
                            <div>{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA') !!}</div></br>
                            <div>{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div></br>
                            <form action="{{ route('bar-code.post') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="abc" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
