@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('head_styles')
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/DataTables/datatables.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}"/>
@endsection

@section('head_scripts')

@endsection

@section('content')
    @include('application.partials.navigation')
    <section class="home">
        <div class="container">
            <div class="row inner-container">
                <div class="col-lg-8">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>File name</th>
                            <th>Download Url</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="far fa-file-alt"></i> Document PDF</td>
                                <td>filego.test/f/Usja3a</td>
                                <td>none</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-file-alt"></i> Blyet Pics</td>
                                <td>filego.test/f/Usja3a</td>
                                <td>none</td>
                            </tr>
                        </tbody>
                    </table>
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
                                    <button type="button" class="btn btn-primary btn-block"><i class="fas fa-upload"></i> Upload</button>
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
    <script type="text/javascript" src="{{ asset('vendor/DataTables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
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

                    alert("No more files please! " + file);
                });
            }
        };
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
