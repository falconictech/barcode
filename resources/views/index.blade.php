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
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
            @endif
            <div class="row no-gutters py-50">
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
                            <form action="{{ route('bar-code.post') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Mask: <span class="text-danger">*</span></label>
                                            <label for="">For Example: STB-T-{number} leave number blank it's a range from min-max</label>
                                            <input type="text" name="mask" class="form-control form-control-lg"
                                                value="{{ old('mask') }}">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="">Min: <span class="text-danger">*</span></label>
                                            <input type="number" name="min" class="form-control form-control-lg"
                                                value="{{ old('min') }}">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="">Max: <span class="text-danger">*</span></label>
                                            <input type="number" name="max" class="form-control form-control-lg"
                                                value="{{ old('max') }}">
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
