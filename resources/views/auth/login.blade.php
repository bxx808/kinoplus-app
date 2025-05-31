@extends('layout')

@section('content')
    <div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <main class="form-signin w-100 m-auto" style="max-width: 400px;">
            <form action="{{route('auth.login')}}" method="post" class="p-4 p-md-5 border rounded-3 bg-white shadow-sm">
                @csrf

                @error('email')
                <div class="alert alert-danger mb-4">
                    {{$message}}
                </div>
                @enderror

                @error('password')
                <div class="alert alert-danger mb-4">
                    {{$message}}
                </div>
                @enderror
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="h3 mb-0 fw-normal">Вход</h2>
                    <a href="/" class="text-decoration-none">
                        <h5 class="m-0">
                            <span style="color: #0a0a0a">Кинопоиск</span>
                            <span class="badge bg-warning warn__badge">Lite</span>
                        </h5>
                    </a>
                </div>


                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" placeholder="name@areaweb.su"
                           value="{{old('email')}}">
                    <label for="floatingInput">E-mail</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                           placeholder="Пароль">
                    <label for="floatingPassword">Пароль</label>
                </div>


                <button class="w-100 btn btn-lg btn-primary py-2 mt-3" type="submit">Войти</button>


                <p class="mt-4 mb-0 text-center text-body-secondary">&copy; Кинопоиск Lite 2023</p>
            </form>
        </main>
    </div>
@endsection
