@extends('dashboard.layouts.main')

@section('container')

<main class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2>{{ $sejarah->title }}</h2>
        <p>{{ $sejarah->created_at->diffForHumans() }} • {{ $sejarah->user->name }}</p>
        <a href="/dashboard/sejarah" class="btn btn-success"><i class="bi bi-arrow-left"></i></i> Kembali ke Sejarah</a>
        <a href="/dashboard/sejarah/{{ $sejarah->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
        <form action="/dashboard/sejarah/{{ $sejarah->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
        </form>
        <div style="max-height: 300px; max-width: 300px;">
          <img src="{{ asset('storage/' . $sejarah->image) }}" alt="" class="img-fluid me-3 mt-3">
        </div>
      </div>
    </div>
  </main>

@endsection