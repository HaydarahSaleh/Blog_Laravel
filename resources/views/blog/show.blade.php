@extends('layouts.app')


@section('content')
<div class="container  m-auto text-center pt-15 pb-5">
    <h1 class="font-bold text-6xl ">{{$post->title}}</h1>
    <div class="mt-2">
        By: <span class="text-gray-400 italic"> {{$post->user->name}}</span>
        <span class="text-gray-400 italic"> {{date('d-m-Y',strtotime($post->updated_at))}}</span>
    </div>
</div>
<div class="container  m-auto pt-15 pb-5">
    <div class="flex h-96">
        <img class="object-cover w-full"  src="/assets/images/{{$post->image_path}} "alt=""/>
    </div>
    <div class="text-lg text-gray-700 py-8 leading-6">
        {{$post->description}}
    </div>
    @if (Auth::user() && Auth::user()->id=== $post->user_id)
    <a href="/blog/{{$post->slug}}/edit" class="bg-green-700 border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Edit post</a>
<form action="/blog/{{$post->slug}}" method="POST" class="inline-block">
@csrf
@method('delete')
<button type="submit" class="bg-red-700 border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Delete post</button>
</form>

    @endif
</div>

@endsection