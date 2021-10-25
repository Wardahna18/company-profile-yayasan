@extends('layouts.admin')
@section('container')
<form action="/admin/donasi/kategori/store" method="post" enctype="multipart/form-data">
    @csrf
    <h3>
        <center><b>Input Ruang Donasi</b></center>
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
                <div class="input-field col s6">
                    <select>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Kategori Donasi</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="file" class="validate" name="upload">
                </div>
                <div class="input-field col s12">
                    <input placeholder="Masuk Nama Ruang Donasi" id="first_name" type="text" class="validate"
                        name="nama">
                    <label for="first_name">Nama Ruang Donasi</label>
                </div>
               
                <div class="input-field col s6">
                    <input id="last_name" type="submit" class="validate btn">
                </div>


            </div>
        </div>
    </div>
</form>
@endsection
