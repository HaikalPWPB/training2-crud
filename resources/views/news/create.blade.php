@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Create News</h1>
      </div>
    </div>
@stop

@section('content')
<form action="/admin/news" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title..." value="{{ old('title') }}">
      </div>
      <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
      </div>
      <div class="form-group">
        <label for="">Content</label>
        <textarea name="content" id="" cols="30" rows="10" class="@error('content') is-invalid @enderror">{{ old('content') }}</textarea>
        @error('content') <i class="text-danger">Harap Isi Konten</i> @enderror
      </div>
      <button type="submit" class="btn btn-primary btn-block">Save</button>
    </div>
  </div>
</form>
@stop

@section('css')
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
@endsection

@section('js')
<script>
  CKEDITOR.replace( 'content' );
</script>
@endsection