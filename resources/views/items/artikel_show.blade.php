@extends('layouts.master')

@section('section')
  <div class="card w-100">
    <div class="card-body">
      <h1 class="card-title text-center">{{$article->judul}}</h1>
      <h6 class="card-subtitle mb-2 text-muted text-center">Oleh: {{$article->user_id}}</h6>
      <footer class="blockquote-footer">Diunggah pada: {{$article->created_at}}</footer>
      <footer class="blockquote-footer">Terakhir diunggah: {{$article->updated_at}}</footer><br>
      <p class="card-text text-justify">{{$article->isi}}</p><br>
      <p class="card-text text-sm-left">Tag: {{$article->tag}}</p><br>
      <a href="/artikel" type="submit" class="btn btn-primary btn-sm">Kembali ke awal</a>
    </div>
  </div>
@endsection