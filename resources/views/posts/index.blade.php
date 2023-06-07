@extends('layouts.app')

@section('title', 'All posts')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl mb-8 text-gray-700">
            All posts
        </h1>
        @foreach($posts as $post)
            <div class="bg-white rounded-lg shadow-lg mb-6 p-6">
                <h2 class="text-2xl mb-2 text-gray-700">
                    {{$post->title}}
                </h2>
                <p class="text-gray-500">
                    {{$post->body}}
                </p>
                <div class="flex justify-end mt-4">
                    <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/posts/{{$post->id}}">
                        Show
                    </a>
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
            </div>
        @endforeach
        <a class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg" href="/posts/create">
            Create a new post
        </a>
   
@endsection('content')