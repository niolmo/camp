@extends('default')

@section('pageTitle')Главная@endsection

@section('pageContant')
    <div class="alert alert-info" role="alert">
        Спасибо за регистрацию! Проверьте свою почтучтобы подвердить
        учетную запись!
    </div>
    <div>
        Почта не пришла?
        <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-link ps-0 text-center">Отправить еще рвз</button>
        </form>
    </div>
@endsection
