@extends('students.layout')

@section('content')

<div class="row mb-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Absensi Mahasiswa</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Terdapat beberapa masalah pada input Anda.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>  
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <strong>NIM:</strong>
                <input type="text" name="nim" class="form-control" placeholder="NIM">
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" id="hadir" value="Hadir">
                    <label class="form-check-label" for="hadir">Hadir</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" id="tidak_hadir" value="Tidak Hadir">
                    <label class="form-check-label" for="tidak_hadir">Tidak Hadir</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" id="sakit" value="Sakit">
                    <label class="form-check-label" for="sakit">Sakit</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" id="ijin" value="Izin">
                    <label class="form-check-label" for="ijin">Izin</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="keterangan" id="terlambat" value="Terlambat">
                    <label class="form-check-label" for="terlambat">Terlambat</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Selanjutnya</button>
        </div>
    </div>

</form>

@endsection
