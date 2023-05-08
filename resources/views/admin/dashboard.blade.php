@extends('admin.layouts.template')
@section('page_title')
Dashboard - Eticaret
@endsection
@section('content')
Merhaba, {{Auth::user()->name}}
@endsection