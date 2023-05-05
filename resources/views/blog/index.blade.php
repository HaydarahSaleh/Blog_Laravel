@extends('layouts.app')


@section('content')

<div class="container  m-auto text-center pt-15 pb-5">
    <h1 class="font-bold text-6xl ">All Posts</h1>
</div>
@foreach ($posts as $post)
    

<div  class="container sm:grid grid-cols-2 gap-15 mx-auto px-5 py-15 border-b border-gray-200">
    <div class="flex">
        <img class="object-cover" src={{$post->image_path}} alt=""/>
    </div>
    <div>
        <h2 class="text-gray-700 text-4xl font-bold py-5 md:pt-0"> {{$post->title}}</h2>
        <span>
            By: <span class="text-gray-400 italic"> {{$post->user->name}}</span>
            <p class="text-l text-gray-700 py-5 leading-4 ">
             {{$post->description}}
            </p>
            <a href="/blog/{{$post->slug}}" class="bg-blue-700 border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More </a>

        </span>
    </div>
</div>
    
@endforeach
@endsection