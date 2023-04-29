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
    <h1 class="text-5xl pb-4 uppercase font-bold text-center">Welcome from head page</h1>
    <a href="/" class="font-bold py-5 px-5 uppercase rounded-lg bg-blue-100 text-gray-700"> start reading</a>
</div>

<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
    <div class="mx-2 md:mx-0">
        <img class="sm:rounded-lg" src="/assets/images/img1.jpg"/>
    </div>
    <div class="flex flex-col items-left m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-4xl uppercase">How to be an expert in 2023</h2>
        <p class="font-bold text-gray-500 text-xl pt-2"> you can find the content of all programming languages here</p>
        <p  class="text-gray-400 py-2 leading-5 text-sm">get a different image based on blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah </p>
        <a href="/" class="bg-blue-700 font-bold text-gray-100 py-4 px-5 text-l rounded-lg place-self-start uppercase">Read More</a>
    </div>
</div>

<div class="text-center p-15 bg-gray-700 text-gray-100">
    <h2 class="text-2xl font-bold">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold text-3xl text-gray-500 py-2">UX  Thinking</div>
        <div class="font-bold text-3xl text-gray-500 py-2">Programming Languages</div>
        <div class="font-bold text-3xl text-gray-500 py-2">Graphic Design </div>
        <div class="font-bold text-3xl text-gray-500 py-2">Front-end Development</div>
    </div>
</div>

<div class="container mx-auto py-15 text-center ">
    <h2 class="text-5xl font-bold py-10">Recent Posts</h2>
    <p class="txt-gray-400 leading-6 px-10">
        posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts 
    </p>

    <div class="sm:grid grid-cols-4 w-4/5 mx-auto">
        <div class="felx bg-yellow-400 text-gray-100 pt-10 mt-4">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                <ul>
                    <li></li>
                </ul>
                <h3 class="txt-gray-100 text-l leading-6 py-10">
                    posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts 
                </h3>
            </div>
        </div>

    </div>

</div>
@endsection
