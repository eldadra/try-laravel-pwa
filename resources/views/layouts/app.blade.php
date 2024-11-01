<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel PWA</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>

<body>
    <main>
        <nav>
            <h1>My Laravel PWA</h1>

            <ul>
                <li>
                    <a href="/">Users</a>
                </li>
                <li>
                    <a href="/posts">Posts</a>
                </li>
            </ul>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="{{ asset('script/script.js') }}"></script>

    @stack('script')
</body>

</html>
