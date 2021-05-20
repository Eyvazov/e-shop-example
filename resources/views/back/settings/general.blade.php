@extends('back.layouts.master')
@section('title', 'Ümumi Parametrlər')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Panel</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Logo</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form method="POST" action="{{route('admin.logoandfavicon')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="logo" name="logo">
                                                                <label class="custom-file-label" for="logo">Logo seç</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Yüklə</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <button type="submit" class="btn btn-primary">Redaktə Et</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="card-body">
                                                    <img src="{{asset('images/general/' . $settings->logo)}}" width="200" class="img-thumbnail" alt="">
                                                </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Favikon</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form method="POST" action="{{route('admin.logoandfavicon')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="favicon" name="favicon">
                                                                <label class="custom-file-label" for="favicon">Favikon seç</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Yüklə</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Redaktə Et</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="card-body">
                                                        <img src="{{asset('images/general/' . $settings->favicon)}}" width="200" class="img-thumbnail" alt="">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
