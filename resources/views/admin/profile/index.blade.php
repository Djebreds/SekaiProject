@extends('admin.layouts.main')
@section('title', 'Admin Profile | Basicschool')
@section('content')
     <h1>This is profile my name is {{ Auth::user()->full_name }}</h1>
@endsection
