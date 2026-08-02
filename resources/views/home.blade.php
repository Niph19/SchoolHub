<!DOCTYPE html>
<html lang="en">

<x-head :title="$title ?? 'SchooHub – Home'" />

<body>
    @include('components.navbar')

    <!-- Hero -->
    <div class="max-w-340 mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center pb-30 py-20">
            <div>
                <h1 class="block text-3xl font-bold text-foreground sm:text-4xl lg:text-6xl lg:leading-tight">Pusat
                    Informasi Sekolah <span class="text-primary">SchoolHub</span></h1>
                <p class="mt-3 text-lg text-foreground">Akses tak terbatas untuk informasi sekolah, program keahlian,
                    guru, fasilitas, dan kegiatan. Kelola data sekolah Anda dengan mudah menggunakan fitur CRUD yang
                    efisien.</p>
            </div>
            <!-- End Col -->

            <div class="relative ms-4">
                <img class="w-full rounded-md" src="{{ asset('images/Desian-Web.png') }}" alt="Hero Image">
                <div
                    class="absolute inset-0 -z-1 bg-linear-to-tr from-surface-1 via-transparent to-travia-transparent size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6">
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Hero -->

    <h1 class="block text-4xl text-center justify-center font-bold text-foreground">Program Keahlian</h1>
    {{-- Jurusan --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-10 pb-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="grid grid-cols-3">
                @foreach($dataProgram as $program)
                
                <a href="{{ route('programs.show', $program->id) }}">
                    <div class="p-4">
                        <div
                            class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-md title-font font-medium text-gray-400 mb-1">Program
                                Keahlian
                            </h2>
                            <h2 class="tracking-widest text-sm title-font font-bold text-blue-500 mb-1">{{ $program->code }}
                            </h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $program->name }}</h1>
                            <p class="leading-relaxed">{{ $program->description }}</p>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="flex justify-center mb-20">
        <a href="{{ route('programs.index') }}" >
        <button class="btn btn-soft btn-primary">Lihat Selengkapnya</button>
        </a>
    </div>

        <h1 class="block text-4xl text-center justify-center font-bold text-foreground">Artikel Terbaru</h1>
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
        <div class="flex justify-center mb-20">
        <a href="{{ route('posts.index') }}" >
        <button class="btn btn-soft btn-primary">Lihat Selengkapnya</button>
        </a>
    </div>

    <h1 class="block text-4xl text-center justify-center font-bold text-foreground">Kegiatan Terbaru</h1>
    {{-- Blog --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-10 pb-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="grid grid-cols-3 gap-3">
                    @foreach($dataActivity as $data)
                    <div class="p-4">
                        <div class="h-full border-2 border-gray-700 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="{{ asset('images/activities/' . $data->image) }}" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-300 mb-1">{{ $data->location }}
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-200 mb-1.5">{{ $data->title }}</h1>
                                <p class="leading-relaxed text-gray-400 mb-3">{{ $data->description }}</p>
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $data->activity_date }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
        <div class="flex justify-center mb-20">
        <a href="{{ route('activities.index') }}" >
        <button class="btn btn-soft btn-primary">Lihat Selengkapnya</button>
        </a>
    </div>
    {{-- Blog --}}
    


    @include('components.footer')
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>