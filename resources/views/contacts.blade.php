@extends('default')

@section('pageTitle')Как нас найти@endsection

@section('pageContant')
    <div class="px-4 py-5 my-5 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="green" class="bi bi-pin-map" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
        </svg>
        <h1 class="display-5 fw-bold">Нас очень просто найти!</h1>
        <div class="col-lg-6 mx-auto">
            <address class="address fs-2">
                Пермский край. с.Усть-качка база отдыха "Лето".
            </address>
            <p class="fs-5">Чтобы посмотреть схему проезда от города Пермь - кликните на карту ниже</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="darkorange" class="bi bi-arrow-down-circle-fill mb-2" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
            </svg>
            <a href="https://yandex.ru/maps/50/perm/?ll=55.964949%2C57.933221&mode=routes&rtext=58.010455%2C56.229443~58.003984%2C55.673701&rtt=auto&ruri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzEwNTIxMBIY0KDQvtGB0YHQuNGPLCDQn9C10YDQvNGMIgoN8-pgQhW0CmhC~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzA5MzU2MRJi0KDQvtGB0YHQuNGPLCDQn9C10YDQvNGB0LrQuNC5INC80YPQvdC40YbQuNC_0LDQu9GM0L3Ri9C5INC-0LrRgNGD0LMsINGB0LXQu9C-INCj0YHRgtGMLdCa0LDRh9C60LAiCg3esV5CFRQEaEI%2C&utm_campaign=desktop&utm_medium=search&utm_source=maps&z=11.61"><img src="/img/map.png" alt="map" class="w-100 h-100"></a>
        </div>
    </div>
@endsection
