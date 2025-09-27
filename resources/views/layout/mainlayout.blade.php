<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{ asset('build/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>

    @include('layout.partials.header')

    {{-- <div class=""> --}}
        <div class="row g-0">

            {{-- Sidebar --}}
            @include('layout.partials.sidebar')

            {{-- Main Content --}}
            <div class="col-md-9 col-lg-10 px-4 py-4" id="main-content">
                @yield('content')
            </div>

        </div>
    {{-- </div> --}}
    @stack('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('build/js/main.js') }}"></script>

</body>
</html>
