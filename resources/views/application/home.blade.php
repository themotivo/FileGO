@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('head_styles')
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}">
@endsection

@section('head_scripts')

@endsection

@section('content')
    @include('application.partials.navigation')
    <section class="home">
        <div class="container">
            <div class="row inner-container">
                <div class="col-lg-8">

                </div>
                <div class="col-lg-4">

                    <div class="card">

                        <div class="card-header">
                            <i class="fas fa-file"></i> Quick Upload
                        </div>

                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="name" placeholder="File name" value="{{ old('name') }}" spellcheck="false" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <form id="uploadFileForm" action="{{ url('test') }}" method="POST" CLASS="dropzone" enctype="multipart/form-data">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-upload"></i> Upload</button>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('body_scripts')
    <script src="{{ asset('vendor/dropzone/dropzone.js') }}"></script>
    <script>
        Dropzone.options.uploadFileForm = {
            maxFiles: 1,
            accept: function(file, done) {
                console.log("uploaded");
                done();
            },
            init: function() {
                this.on("maxfilesexceeded", function(file){
                    alert("No more files please!");
                });
            }
        };
    </script>
@endsection
