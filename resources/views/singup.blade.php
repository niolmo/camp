@extends('default')

@section('pageTitle')Регистрация@endsection

@section('pageContant')
    <h1 class="text-center text-success mb-5">Зарегистрируйтесь</h1>
    <div class="col-md-6 offset-md-3">
        <form action="{{ route('mac') }}" method="post" class="mx-auto w-50">
            @csrf

            <div class="mb-3">
                <lable for="name" class="form-label">Имя:</lable>
                <input type="text" name="name" id="name" placeholder="Ваше имя" class="form-control
                @error('name') is-invalid @enderror" value="{{ @old('name') }}">{{-- @old -сохранить данные при ошибке рег --}}
            </div>

            <div class="mb-3">
                <lable for="email" class="form-label">Email:</lable>
                <input type="email" name="email" id="email" placeholder="example@email.com" class="form-control
                 @error('email') is-invalid @enderror" value="{{ @old('email') }}">
            </div>

            <div class="mb-3">
                <lable for="password" class="form-label">Пароль</lable>
                <input type="password" name="password" id="password" placeholder="Придумайте пароль" class="form-control
                 @error('password') is-invalid @enderror">
            </div>

            <div class="mb-3">
                <lable for="password_confirmation" class="form-label">Пароль еще раз</lable>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Подтвердите пароль" class="form-control
                 @error('password_confirmation') is-invalid @enderror">
            </div>

            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button  type="submit"  class="btn btn-warning text-black btn-lg">Регистрация</button>
            </div>
            <p class="text-center">Уже зарегистрированы? <a href="{{ route('login') }}">Входите!</a></p>
        </form>
    </div>
@endsection
