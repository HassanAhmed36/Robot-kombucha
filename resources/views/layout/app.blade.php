<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Robot Kombucha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .toast-success {
            background-color: rgb(10, 192, 116) !important;
        }
    </style>
    <style>
        * {
            font-family: "Saira Condensed", sans-serif;
        }

        #main-image {
            margin-bottom: -125px;
            width: 75%;
            transform: rotate(5deg);
        }

        @media (max-width: 767px) {
            #main-image {
                margin-bottom: 0;
                width: 60%;
                text-align: center;
                margin-top: 25px;
                transform: rotate(0deg);
            }
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
        }

        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader {
            background: url('{{ asset('images/logo.png') }}') center center no-repeat;
            background-size: 50%;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            border-top: 8px solid transparent;
        }



        .nav-tabs .nav-link.active {
            background-color: #324446;
            color: #ffffff !important;
        }
    </style>
</head>

<body class="p-0 m-0 overflow-x-hidden ">
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    @yield('main_section')
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @session('success')
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endsession
    @session('error')
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endsession
    <script>
        window.addEventListener('load', function() {
            document.querySelector('.loader-wrapper').style.display = 'none';
            document.querySelector('.content').style.display = 'block';
        });
    </script>
</body>

</html>
