<x-app-layout>
    <div class="background__imgae">
        @include('components.navbar')

        <section class="relative bg-cover bg-center"
            style="background-image: url('{{ asset('img/background.png') }}'); height: 100vh;">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="container mx-auto flex flex-col items-center justify-center h-full text-center relative z-10">
                <h1 class="text-white text-5xl font-bold mb-4">WELCOME TO<br>LUXURY HOTELS</h1>
                <p class="text-white text-lg mb-8">Mehmonxonangizni bron qiling va hashamatdan zavqlaning<br>eng maqbul
                    narxlarda qayta belgilangan.</p>
                {{-- <a href="#"
                    class="bg-yellow-500 text-white text-lg px-6 py-3 rounded-md shadow-lg hover:bg-yellow-600">BOSHLASH</a> --}}
            </div>
            <div class="absolute bottom-4 w-full text-center">
                <a href="#" class="text-white text-3xl">&#8595;</a>
            </div>
        </section>
    </div>

    <div class="card__container">
        <section class="container__rooms">
            <h1 class="room__title">Bizning barcha xona turlarimiz qo'shimcha nonushtani o'z ichiga oladi</h1>
            <div class="room__card">
                <div class="room__card__left">
                    <h1 class="room__subtitle">Hashamatli xonani belgilang</h1>
                    <p class="room__prograf">Bizning xonalarimiz tashish uchun mo'ljallangan
                        sizni dam olish uchun yaratilgan muhitga aylantiramiz.
                        Kundalik uy bilan bog'liq ishlardan voz keching
                        hayot va o'zingiz uchun shaxsiy jannat toping.</p>
                    {{-- <button class="choose__btn">BELGILASH</button> --}}
                </div>
                <img src="{{ asset('img/room1.jpg') }}" alt="">
            </div>

            <div class="room__card">
                <div class="room__card__left">
                    <h1 class="room__subtitle">Xavotirlaringizni ichingizda qoldiring</h1>
                    <p class="room__prograf">Biz dengizdagi hayotni yaxshi ko'ramiz. Yaqin bo'lish
                        cheksiz qumloqlarga kirish imkoniyati bilan okeanga
                        plyaj xotirjam ruhiy holatni ta'minlaydi. Bu
                        go'yo vaqt hali ham ko'rmoqda.</p>
                    {{-- <button class="choose__btn">BELGILASH</button> --}}
                </div>
                <img src="{{ asset('img/bassen.jpg') }}" alt="">
            </div>
        </section>
        @include('components.details')
    </div>
</x-app-layout>
