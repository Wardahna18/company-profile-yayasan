@extends('layouts.admin')
@section('container')
<form action="/admin/donasi/kategori/store" method="post" enctype="multipart/form-data">
    @csrf
    <h3>
        <center><b>Input Kategori Donasi</b></center>
    </h3>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    
    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Masuk Nama Kategori Donasi" id="first_name" type="text" class="validate"
                        name="nama">
                    <label for="first_name">Nama Ketgori Donasi</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="file" class="validate" name="upload">
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="submit" class="validate btn">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
