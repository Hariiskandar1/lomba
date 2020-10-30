@extends('admin.layoutadmin.master')

@section('title')
Admin Cagar Budaya
@stop

@section('content')
<div class="ml-2">
    <h3></i> Dashboard</h3>
    <hr>

    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="card-body-row" style="background: #ef5777;">
                <div class="card-body-icon">
<<<<<<< HEAD
                    <i class="fas fa-table"></i>
=======
                    <i class="fas fa-user"></i>
>>>>>>> c5347be0390e123dddf31ce7f9a17484f27acd73
                </div>
                <h5 class="card-title">User</h5>
                <div class="display-4">
                    {{$user}}
                </div>
<<<<<<< HEAD
                <a href="#">
=======
                <a href="{{route('user.index')}}">
>>>>>>> c5347be0390e123dddf31ce7f9a17484f27acd73
                    <h6 class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></h6>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card-body-row" style="background: #575fcf;">
                <div class="card-body-icon">
                    <i class="fas fa-table"></i>
                </div>
                <h5 class="card-title">Lokasi</h5>
                <div class="display-4">
                    {{$lokasi}}
                </div>
<<<<<<< HEAD
                <a href="#">
=======
                <a href="{{route('lokasi.index')}}">
>>>>>>> c5347be0390e123dddf31ce7f9a17484f27acd73
                    <h6 class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></h6>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card-body-row" style="background: #ffdd59;">
                <div class="card-body-icon">
<<<<<<< HEAD
                    <i class="fas fa-table"></i>
                </div>
                <h5 class="card-title">Artikel</h5>
                <div class="display-4">
                    {{$ulasan}}
                </div>
                <a href="#">
=======
                    <i class="fas fa-adjust"></i>
                </div>
                <h5 class="card-title">Ulasan</h5>
                <div class="display-4">
                    {{$ulasan}}
                </div>
                <a href="">
>>>>>>> c5347be0390e123dddf31ce7f9a17484f27acd73
                    <h6 class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></h6>
                </a>
            </div>
        </div>
    </div>


</div>
@stop