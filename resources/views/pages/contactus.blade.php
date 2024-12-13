<x-app-layout>
    <div class="background__imgae__contact">
        @include('components.navbar')
        <h1 class="contact__title">BIZ BILAN BOG'LANISH </h1>
    </div>

    <!-- Xabarlar uchun alertlar -->
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Muvaffaqiyat!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Yopish</title>
                    <path
                        d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 01-1.414-1.414l2.935-2.935-2.935-2.934a1 1 0 011.414-1.414L10 8.586l2.934-2.935a1 1 0 011.414 1.414L11.414 10l2.934 2.934a1 1 0 010 1.415z" />
                </svg>
            </span>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Xato!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Yopish</title>
                    <path
                        d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 01-1.414-1.414l2.935-2.935-2.935-2.934a1 1 0 011.414-1.414L10 8.586l2.934-2.935a1 1 0 011.414 1.414L11.414 10l2.934 2.934a1 1 0 010 1.415z" />
                </svg>
            </span>
        </div>
    @endif

    <section class="room__price contactus">
        <div class="room__price__card">
            <h1>BIZ SIZ UCHUN SHU YERDAMIZ</h1>
            <p>Hashamatli mehmonxonalarda biz mijozlarimizni jiddiy qabul qilamiz. Sizda biron bir so'rov, shikoyat yoki
                talablar bormi,
                Iltimos, uni qo'llab-quvvatlash stolimizga yuboring va biz sizga imkon qadar tezroq javob beramiz.</p>
        </div>
        <form method="POST" action="{{ route('message') }}" class="contact__form">
            @csrf
            <div class="form__left">
                <span>TOSHKENT CHORVOQ</span>
                <span>Manzilni ko`rish</span>
                <span>Telefon: +998 99 7731743</span>
                <span> Email: luxury_hotels@gmail.com</span>
            </div>
            <div class="form__rigth">
                <label for="message">Xabar</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <button type="submit" class="form__button">Yuborish</button>
            </div>
        </form>
    </section>
</x-app-layout>
