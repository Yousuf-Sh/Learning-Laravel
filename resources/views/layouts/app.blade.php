<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsiveness.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @yield('styles')
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        @yield('title')
                    </h1>
                    @if (session()->has('success'))
                       <div>{{session('success')}}</div>
                    @endif
                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>
</html>