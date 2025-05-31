<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>🎬 Кинопоиск</title>
</head>
<body>
<div class="container">
    @if(auth()->check())
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1"></div>
                <div class="col-4 text-center"><a class="blog-header-logo text-body-emphasis text-decoration-none"
                                                  href="#">@yield('title')</a></div>
                <div class="col-4 d-flex justify-content-end align-items-center"><a class="link-secondary" href="#"
                                                                                    aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                             stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <path d="M21 21l-5.2-5.2"></path>
                        </svg>
                    </a>
                    <form method="post" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Выйти</button>
                    </form>
                </div>
            </div>
        </header>
    @endif
    @yield('content')
</div>
</body>
</html>
