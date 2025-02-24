@extends('adminlte::page')

@section('title', 'Form Absensi')

@section('content_header')
    <h1>Form Absensi</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Pembuatan Absensi</h3>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- <form action="{{ route('admin.absensi.store') }}" method="POST"> --}}
            @csrf
            <div class="form-group">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pembawa_materi">Pembawa Materi</label>
                <input type="text" id="pembawa_materi" name="pembawa_materi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="perusahaan_penyelenggara">Perusahaan Penyelenggara</label>
                <input type="text" id="perusahaan_penyelenggara" name="perusahaan_penyelenggara" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="departemen_penyelenggara">Departemen Penyelenggara</label>
                <input type="text" id="departemen_penyelenggara" name="departemen_penyelenggara" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="absen_dibuka">Absen Dibuka</label>
                <input type="date" id="absen_dibuka" name="absen_dibuka" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="absen_ditutup">Absen Ditutup</label>
                <input type="date" id="absen_ditutup" name="absen_ditutup" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Buka Absensi</button>
        </form>
    </div>
</div>
@stop