@extends('layouts.app')


@section('content')

<div class="container  m-auto text-center pt-15 pb-5">
    <h1 class="font-bold text-6xl ">Edit Post</h1>
</div>
<div class="container  m-auto pt-15 pb-5">
     <form action="/blog/{{$post->slug}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}"  class="w-full h-20 text-6xl border-b rounded-lg shadow-lg p-15 mb-5" >
        <textarea type="text" name="description"  placeholder="Description" class="w-full h-60 text-6l border-b rounded-lg shadow-lg p-15 mb-5" value="">{{$post->description}}</textarea>
    <div class="py-15">
        <label class="bg-blue-700 hover:bg-blue-200 text-gray-100 hover:text-gray-700 transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase">
            <span> Select an image to upload</span>
            <input type="file" name="image" class="hidden" id="">
        </label>
    </div>
    
    <button type="submit" class="bg-green-700 hover:bg-blue-700 text-gray-100 hover:text-gray-100  transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase  ">Add Post</button>
    
    </form>
</div>

@endsection