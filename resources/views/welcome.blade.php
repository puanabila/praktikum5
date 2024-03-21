@extends('layouts.app')

@section('title','Halaman 1')

@section('content')
    <h1 class="text-3xl font-bold underline text-pink-500">
        Halaman Pertama!
    </h1>

    <br>

    <a href="{{url('/halaman2') }}" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
        Halaman 2
    </a>

    @endsection