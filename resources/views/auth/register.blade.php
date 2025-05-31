@extends('layout')

@section('content')
    <main>
        <div class="container">
            <h3 class="mt-3">Регистрация</h3>
            <hr>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="{{route('auth.register')}}" method="post"
                  class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
                @csrf
                @error('name')
                <div class="alert alert-danger mb-4">
                    {{$message}}
                </div>
                @enderror

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
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control "
                                id="name"
                                name="name"
                                placeholder="Иван Иванов"
                                value="{{old('name')}}"
                            >
                            <label for="name">Имя</label>
                            <div id="name" class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input
                                type="email"
                                class="form-control "
                                name="email"
                                id="email"
                                placeholder="name@areaweb.su"
                                value="{{old('email')}}"
                            >
                            <label for="email">E-mail</label>
                            <div id="email" class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="*********"
                            >
                            <label for="password">Пароль</label>
                            <div id="password" class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation" placeholder="*********">
                            <label for="password_confirmation">Подтверждение</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <button class="btn btn-primary" type="submit">Создать аккаунт</button>
                </div>
            </form>
        </div>
    </main>
@endsection
