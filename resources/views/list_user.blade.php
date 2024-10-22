@extends('layouts.app')

@section('content')

<div class="container text-center">
    <h1 class="text-center">List Data</h1>
    <div class="add-btn-container">
        <a href="{{ route('user.create') }}" class="btn btn-add">Tambah Pengguna Baru</a>
    </div>
    <div class="row">
        @foreach($kelas as $user)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/' . $user->foto) }}" alt="Foto {{ $user['nama'] }}">
                <div class="card-body">
                    {{-- <h5 class="card-title">{{ $user['nama'] }}</h5> --}}
                    <p class="card-text">
                        Nama: {{ $user['nama'] }}<br>
                        NPM: {{ $user['npm'] }}<br>
                        Kelas: {{ $user['nama_kelas'] }}<br>
                        Jurusan: {{ $user->jurusan }}<br>
                        Semester: {{ $user->semester }}
                    </p>
                    {{-- <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-primary">Edit</a> --}}
                    <a href="{{ route('user.show', $user['id']) }}" class="btn btn-primary">View</a>
                    {{-- <button class="btn btn-danger btn-sm" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus user ini?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">Delete</button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:none;">
                        @csrf
                        @method('DELETE')
                    </form> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
