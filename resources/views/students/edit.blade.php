@extends('layout/main')
@section('title', 'Form tambah data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-4">Form ubah data Mahasiswa</h1>

            <form method="post" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="Masukkan nama" value="{{$student->nama}}">
                    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp"
                        placeholder="Masukkan Nrp" value="{{$student->nrp}}">
                    @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email"
                        value="{{$student->email}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan"
                        value="{{$student->jurusan}}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah data</button>
            </form>

        </div>
    </div>
</div>
@endsection('container')