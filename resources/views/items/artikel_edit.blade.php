@extends('layouts.master')

@section('section')
  <div class="mx-3 mt-3">
    <div class="card card-primary w-100">
    
      {{-- header --}}
      <div class="card-header">
        <h3 class="card-title">Edit Artikel</h5>
      </div>

      {{-- isi form --}}
      <form action="/artikel/{{$article->id}}"" method="POST" class="ml-4 mr-4">
      @csrf
      @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" name="judul" value="{{$article->judul}}" id="judul">
          </div>
          <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea type="text" class="form-control" name="isi" id="isi" rows="10">{{$article->isi}}</textarea>
          </div>
          <div class="form-group">
            <label for="tag">Tag:</label>
            <input type="text" class="form-control" name="tag" value="{{$article->tag}}" placeholder="Tambahkan tag" id="tag">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
@endsection