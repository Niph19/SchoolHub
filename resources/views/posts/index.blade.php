@extends('layouts.app')
@section('contents')
    <h1 class="block text-5xl text-center justify-center font-bold text-foreground mt-5 mb-15">Blog</h1>
    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-10 pb-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="grid grid-cols-3 gap-3">
                    @foreach($dataPost as $data)
                    <a href="{{ route('posts.show', $data->id) }}">
                    <div class="p-4">
                        <div class="h-full border-2 border-gray-700 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="{{ asset('images/artikel/' . $data->image) }}" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-300 mb-1">{{ $data->author }}
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-200 mb-1.5">{{ $data->title }}</h1>
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-300 mb-1">{{ $data->excerpt }}</h2>
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $data->activity_date }}</h2>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script src="./node_modules/preline/dist/preline.js"></script>
@endsection