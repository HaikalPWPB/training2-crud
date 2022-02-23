@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Edit News</h1>
      </div>
    </div>
@stop

@section('content')
<form action="/admin/news/{{ $news->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title..." value="{{ $news->title }}">
      </div>
      <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Content</label>
        <textarea name="content" id="" cols="30" rows="10">{{ $news->content }}</textarea>
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