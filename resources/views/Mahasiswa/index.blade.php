@extends('Mahasiswa.layout')

@section('title')
    Data Mahasiswa
@endsection

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $i => $value)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $value->nim }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->alamat }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection