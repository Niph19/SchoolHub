@extends('layouts.app')
@section('contents')
    <h1 class="block text-5xl text-center justify-center font-bold text-foreground mt-5 mb-15">Program Keahlian</h1>
    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-10 pb-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="grid grid-cols-3">
                @foreach($dataProgram as $data)
                    <a href="{{ route('programs.show', $data->id) }}">
                    <div class="p-4">
                        <div
                            class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-md title-font font-medium text-gray-400 mb-1">Program
                                Keahlian
                            </h2>
                            <h2 class="tracking-widest text-sm title-font font-bold text-blue-500 mb-1">{{ $data->code }}
                            </h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $data->name }}</h1>
                            <p class="leading-relaxed">{{ $data->description }}</p>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
    <script src="./node_modules/preline/dist/preline.js"></script>
@endsection