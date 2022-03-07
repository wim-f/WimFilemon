@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <p>You're logged in! Here are the posts.</p>
    <table class="min-w-full table">
        <thead>
        <tr>
            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                Title
            </th>
            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                Content
            </th>
        </tr>
        </thead>
    <tbody class="bg-white">
    @foreach(App\Models\Post::all() as $post)
        <tr>

            <td class="px-6 py-4 border-b border-gray-200">
                <div class="text-sm text-gray-900">
                    {{ $post->title }}
                </div>
            </td>

            <td class="px-6 py-4 border-b border-gray-200">
                <div class="text-sm text-gray-900">
                    {{ $post->description }}
                </div>
            </td>

        </tr>
    @endforeach
    </tbody>
    </table>

@endsection
