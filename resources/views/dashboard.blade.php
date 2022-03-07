@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <p>You're logged in!</p>
    <h1>Hier staan wat mooie posts</h1>
    <table class="table">
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
