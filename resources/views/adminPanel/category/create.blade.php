@extends('adminPanel.layout')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-primary bg-gradient text-white py-3">
                        <h2 class="h4 mb-0 text-center"><i class="bi bi-plus-circle me-2"></i>Создание новой категории
                        </h2>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                            @error('name')
                            <strong class="text-danger">
                                {{$message}}
                            </strong>
                            @enderror
                            <div class="form-floating mb-4">
                                <input type="text" name="name" class="form-control form-control-lg" id="floatingInput"
                                       placeholder="name@example.com">
                                <label for="floatingInput" class="text-secondary">Название</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg py-3 fw-bold" type="submit">
                                    <i class="bi bi-send-fill me-2"></i>Создать
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-black bg-gradient text-white py-3">
                        <h2 class="h4 mb-0 text-center"><i class="bi bi-plus-circle me-2"></i>Список категорий</h2>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Дата создания</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            @foreach($categories as $category)
                                <tbody>
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
