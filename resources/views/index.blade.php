@extends('layouts.app')

@section('content')
<style>
    .hero-bg-image {
        background: url('/assets/images/img6.png' ) no-repeat center center  /cover;
        background-attachment: fixed;
        height: 600px;
    }
</style>
<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="text-5xl pb-4 uppercase font-bold">Welcome from head page</h1>
    <a href="/" class="font-bold py-5 px-5 uppercase rounded-lg bg-blue-100 text-gray-700"> start reading</a>
</div>

<div class="container">
<div>
    <img src="/assets/images/img1.jpg"/>
</div>
<div>
    <h2>How to be an expert in 2023</h2>
    <p></p>
    <p></p>
</div>
</div>

@endsection
