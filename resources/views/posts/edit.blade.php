@extends('layouts.app')

@section('title', 'Edit post')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl mb-8 text-gray-700">
            Edit post
        </h1>
        <form method="POST" action="/posts/{{$post->id}}" class="bg-white rounded-lg shadow-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <lable for="title" class="block text-gray-600 mb-1">Title</lable>
                <input type="text" id="title" name="title" class="w-full border border-gray-200 px-3 py-2 rounded-lg" value="{{$post->title}}" required>
            </div>
            <div class="mb-4">
                <lable for="body" class="block text-gray-600 mb-1">Body</lable>
                <input type="text" id="body" name="body" class="w-full border border-gray-200 px-3 py-2 rounded-lg" value="{{$post->body}}" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">Update</button>
        </form>
    </div>
@endsection