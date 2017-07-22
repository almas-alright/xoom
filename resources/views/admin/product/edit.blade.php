@extends('admin.training.new')

@section('title', 'Edit Training')
@section('edtID', '/'.$training->id)
@section('edtName', $training->name)
@section('edtDescription', $training->description)
@section('edtPrice', $training->price)
@section('edtSa', $training->start_at)
@section('edtEa', $training->end_at)

@section('editMethod')

{{ method_field('PUT') }}

@endsection