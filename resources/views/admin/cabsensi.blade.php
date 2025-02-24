@extends('adminlte::page')

@section('title', 'Catatan Absensi')

@section('content_header')
    <h1>Catatan Absensi</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Absensi</h3>
    </div>
    <div class="card-body">
        <table id="absensiTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Kegiatan</th>
                    <th>Pembawa Materi</th>
                    <th>Perusahaan</th>
                    <th>Departemen</th>
                    <th>Absen Dibuka</th>
                    <th>Absen Ditutup</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($absensi as $absen) --}}
                <tr>
                    <td> absen->nama_kegiatan </td>
                    <td> absen->pembawa_materi </td>
                    <td> absen->perusahaan_penyelenggara </td>
                    <td> absen->departemen_penyelenggara </td>
                    <td> absen->absen_dibuka </td>
                    <td> absen->absen_ditutup </td>
                    <td>
                        <a href="" class="btn btn-info btn-sm">Lihat</a>
                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>

            {{-- <tbody>
                @foreach ($absensi as $absen)
                <tr>
                    <td>{{ $absen->nama_kegiatan }}</td>
                    <td>{{ $absen->pembawa_materi }}</td>
                    <td>{{ $absen->perusahaan_penyelenggara }}</td>
                    <td>{{ $absen->departemen_penyelenggara }}</td>
                    <td>{{ $absen->absen_dibuka }}</td>
                    <td>{{ $absen->absen_ditutup }}</td>
                    <td>
                        <a href="{{ route('admin.absensi.show', $absen->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    </td>
                </tr>
                @endforeach
            </tbody> --}}
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('#absensiTable').DataTable();
    });
</script>
@endsection