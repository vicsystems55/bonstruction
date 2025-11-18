@extends('layouts.app')

@section('content')
    <main class="container mx-auto py-12">
        <h1 class="text-3xl font-bold mb-4">{{ $title }}</h1>
        <p class="text-gray-700">{{ $description }}</p>

        <section class="mt-8">
            <p>Blog content will go here. Add posts or include a posts loop.</p>
        </section>
    </main>
@endsection
