@extends('layouts.layout')

@section('content')
    @include('tweets.new-tweet')
    @include('tweets._timeline')
@endsection
