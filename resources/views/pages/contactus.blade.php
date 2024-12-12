<x-app-layout>
    <div class="background__imgae__contact">
        @include('components.navbar')
        <h1 class="contact__title">BIZ BILAN BOG'LANISH </h1>
    </div>
    <section class="room__price contactus">
        <div class="room__price__card">
            <h1>BIZ SIZ UCHUN SHU YERDAMIZ</h1>
            <p>Hashamatli mehmonxonalarda biz mijozlarimizni jiddiy qabul qilamiz. Sizda biron bir so'rov, shikoyat yoki
                talablar bormi,
                Iltimos, uni qo'llab-quvvatlash stolimizga yuboring va biz sizga imkon qadar tezroq javob beramiz.</p>
        </div>
        <form method="POST" action="" class="contact__form">
            <div class="form__left">
                <span>TOSHKENT CHORVOQ</span>
                <span>Manzilni ko`rish</span>
                <span>Telefon: +998 99 7731743</span>
                <span> Email: luxury_hotels@gmail.com</span>
            </div>
            <div class="form__rigth">
                <label for="name">Ism</label>
                <input type="text" id="name" name="name">
                <label for="email">E-pochta manzili</label>
                <input type="email" id="email" name="email">
                <label for="message">Xabar</label>
                <textarea name="message" id="message" cols="30" rows="10">
                </textarea>
                <button class="form__button">Yuborish</button>
            </div>
        </form>
    </section>
</x-app-layout>
