@extends('layouts.master')

@section('section')
  <div class="ml-3 mb-4">
    <h1 class="h3 text-gray-800">Daftar Artikel</h1>
    <a href="/artikel/create" type="submit" class="btn btn-primary">Buat artikel baru</a>
  </div>

  {{-- tabel --}}
  <div class="mt-4 mx-3">
     @foreach($articles as $key => $article)
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">{{ $article->judul }}</h5>
            <p class="card-text col-10 text-truncate">{{ $article->isi }}</p>
            <footer class="blockquote-footer">{{$article->user_id}}</footer><br>
            <a href="/artikel/{{$article->id}}" type="submit" class="btn btn-primary btn-sm">Baca selengkapnya</a>
            <a href="/artikel/{{$article->id}}/edit" type="submit" class="btn btn-secondary btn-sm">Edit</a>
            <form action="/artikel/{{$article->id}}" method="POST" style="display: inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
            </form>
          </div>
        </div>
      @endforeach
  </div>
@endsection

@push('scripts')
  <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
  </script>
@endpush