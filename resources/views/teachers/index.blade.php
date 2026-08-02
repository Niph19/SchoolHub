<!DOCTYPE html>
<html lang="en">
<x-head :title="$title ?? 'SchoolHub – Teacher'" />

<body>
    @include('components.navbar')
    @yield('content')

    <div class="grid grid-cols-3 px-65 gap-5 my-10">
        @foreach($dataTeacher as $data)
            <div
                class="bg-neutral-primary-soft max-w-xs border border-default rounded-base shadow-xs overflow-hidden hover:shadow-md transition-shadow duration-300">
                <img class="w-full aspect-[3/4] object-cover object-top" src="{{ asset('images/teachers/' . $data->photo) }}"
                    alt="Taufik Rafie" />
                <div class="p-6 text-center">
                    <h2 class="mb-1 text-2xl font-semibold tracking-tight text-heading">{{ $data->name }}</h2>
                    <p class="mb-3 text-body text-lg">{{ $data->position }}</p>

                    <span class="inline-block mb-3 px-3 py-1 text-sm font-medium rounded-full bg-primary-soft text-primary">
                        {{ $data->subject }}
                    </span>

                    <p class="text-sm text-body leading-relaxed">
                        {{ $data->bio }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>