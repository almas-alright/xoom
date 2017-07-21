@extends('admin.post.create')

@section('title', 'Edit Post')
@section('edtID', '/'.$post->id)
@section('edtTitle', $post->title)
@section('edtContent', $post->content)
@section('editMethod')

{{ method_field('PUT') }}

@endsection