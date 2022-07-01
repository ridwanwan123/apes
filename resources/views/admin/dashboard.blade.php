@extends('admin.layouts.base')

@section('title', 'Dashboard')

   
@section('content')

WELCOME, {{ auth()->user()->name }}

@endsection