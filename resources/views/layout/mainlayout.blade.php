<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Portfolio</title>
</head>
<body>

    @if(Request::is('login'))
        @yield('content')
    @else
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
    @endif

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @stack('script')

    <script>
        function toast(message, type){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timeProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter () = Swal.stopTimer()
                    toast.onmouseleave () = Swal.resumeTimer()
                }
            });
            Toast.fire({
                icon: type,
                title: message
            });
        }
    </script>

    <script>
        @if (Session::has('success'))
            toast("{{ Session::get('success') }}", 'success');
        @elseif(Session::has('error'))
            toast("{{ Session::get('error') }}", 'error');
        @elseif (Session::has('info'))
            toast("{{ Session::get('info') }}", 'info');
        @elseif (Session::has('warning'))
            toast("{{ Session::get('warning') }}", 'warning');
        @endif
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}

</body>
</html>
