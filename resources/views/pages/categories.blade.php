@extends('layout')

@section('title')
    <h3 class="mt-3">Категории</h3>
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="nav-scroller py-1 mb-3 border-bottom">
                <nav class="nav nav-underline justify-content-between"><a
                        class="nav-item nav-link link-body-emphasis active" href="#">World</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">U.S.</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Technology</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Design</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Culture</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Business</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Politics</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Opinion</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Science</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Health</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Style</a> <a
                        class="nav-item nav-link link-body-emphasis" href="#">Travel</a></nav>
            </div>
        </div>
        <div class="container">
            <h3 class="mt-3">Жанры</h3>
            <hr>
            <div class="alert alert-info">TODO: Этот раздел нужно завершить</div>
            <div class="movies">
                <a href="#" class="card text-decoration-none movies__item">
                    <img
                        src="https://glossymag.ru/thetsoaz/2021/10/000-10-glavnyh-filmov-opredelivshih-zhanr-francuzskaya-kinokomediya.jpg"
                        height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Фильмов <span class="badge bg-info warn__badge">10</span></p>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection
