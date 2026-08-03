@extends('layouts.app')
@section('contents')
    <section class="text-gray-600 body-font">
        <div class="container max-w-3xl px-5 pt-16 pb-10 mx-auto">

            <!-- Gambar utama -->
            <div class="rounded-lg overflow-hidden border-2 border-gray-700 border-opacity-60 mb-8">
                <img
                    class="w-full h-80 md:h-[28rem] object-cover object-center"
                    src="{{ asset('images/artikel/' . $dataPost->image) }}"
                    alt="{{ $dataPost->title }}"
                >
            </div>

            <!-- Meta info -->
            <div class="flex items-center gap-3 text-xs tracking-widest title-font font-medium text-gray-400 mb-3">
                <span>{{ $dataPost->author }}</span>
                <span>&bull;</span>
                <span>{{ $dataPost->activity_date }}</span>
            </div>

            <!-- Judul -->
            <h1 class="title-font text-gray-300 text-3xl md:text-4xl font-bold text-foreground mb-4 leading-tight">
                {{ $dataPost->title }}
            </h1>

            <!-- Ringkasan -->
            <p class="text-lg text-gray-400 italic border-l-4 border-gray-700 pl-4 mb-8">
                {{ $dataPost->excerpt }}
            </p>

            <!-- Isi lengkap -->
            <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed">
                {!! nl2br(e($dataPost->content)) !!}
            </div>

        </div>
    </section>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script src="./node_modules/preline/dist/preline.js"></script>
@endsection