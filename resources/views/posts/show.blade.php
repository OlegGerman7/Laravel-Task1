@extends('layouts.app')

@section('title', 'Show post')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl mb-8 text-gray-700">
            Show post
        </h1>
        <div class="bg-white rounded-lg shadow-lg mb-6 p-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h1 class="text-4xl text-gray-700 mb-4">
                    {{$post->title}}
                </h1>
                <p class="text-gray-500 mb-4">{{$post->body}}</p>
                <div class="flex justify-end mt-4">
                    <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/posts/{{$post->id}}/edit">
                        Edit
                    </a>
                    <form method="POST" action="/posts/{{$post->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600 underline">
                            Delete
                        </button>
                    </form>
                </div>
                <a class="block mt-16 text-blue-500 hover:text-blue-600 underline" href="/posts" >Back to all posts</a>
            </div>
        </div>
        <a class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg" href="/posts/create">
            Create a new post
        </a>
   
@endsection('content')