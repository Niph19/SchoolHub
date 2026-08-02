<!DOCTYPE html>
<html lang="en">
<x-head :title="$title ?? 'SchooHub – Programs'" />
<body>
    @include('components.navbar')
    <h1 class="block text-5xl text-center justify-center font-bold text-foreground mt-5 mb-15">{{ $dataProgram->name }}</h1>
    <p class="block text-xl text-center justify-center font-base text-foreground mt-5 mb-15">{{ $dataProgram->description }}</p>
    @include('components.footer')
        <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>