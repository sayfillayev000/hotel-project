<x-app-layout>
    <div class="background__imgae__room">
        @include('components.navbar')
        <section class="room__hero">
            <h2>
                WELCOME TO
            </h2>
            <h1>LUXURY</h1>
            <h3>HOTELS</h3>
            <p>Mehmonxonangizni bron qiling va hashamatdan zavqlaning
                eng maqbul narxlarda qayta belgilangan.</p>
            <button class="start">
                <svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M27.207 0.333252H22.5014V3.83325H20.1486V0.333252H15.4431V3.83325H13.0903V0.333252H8.38474V3.83325H6.03197V0.333252H1.32641C1.01442 0.333252 0.715196 0.456168 0.494581 0.674961C0.273965 0.893753 0.150024 1.1905 0.150024 1.49992L0.150024 22.4999C0.150024 22.8093 0.273965 23.1061 0.494581 23.3249C0.715196 23.5437 1.01442 23.6666 1.32641 23.6666H27.207C27.519 23.6666 27.8182 23.5437 28.0388 23.3249C28.2594 23.1061 28.3834 22.8093 28.3834 22.4999V1.49992C28.3834 1.1905 28.2594 0.893753 28.0388 0.674961C27.8182 0.456168 27.519 0.333252 27.207 0.333252ZM21.8178 15.2826L20.1486 14.0999V18.9999C20.1486 19.3093 20.0247 19.6061 19.8041 19.8249C19.5835 20.0437 19.2842 20.1666 18.9722 20.1666H16.0313V15.4999C16.0313 15.1905 15.9073 14.8938 15.6867 14.675C15.4661 14.4562 15.1669 14.3333 14.8549 14.3333H13.6785C13.3665 14.3333 13.0673 14.4562 12.8467 14.675C12.626 14.8938 12.5021 15.1905 12.5021 15.4999V20.1666H9.56113C9.24914 20.1666 8.94992 20.0437 8.7293 19.8249C8.50869 19.6061 8.38474 19.3093 8.38474 18.9999V14.0999L6.71574 15.2826L5.34819 13.3839L13.5829 7.55054C13.7833 7.41124 14.022 7.33651 14.2667 7.33651C14.5114 7.33651 14.7501 7.41124 14.9505 7.55054L23.1852 13.3839L21.8178 15.2826Z"
                        fill="white" />
                </svg>
                <span>BOSHLASH</span>
            </button>
            <button class="icon__bottom">
                <svg width="63" height="61" viewBox="0 0 63 61" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M31.6673 60.9999C24.5736 60.9938 17.7 58.5565 12.2105 54.1007C6.72103 49.6449 2.95297 43.4446 1.54445 36.5496C0.135919 29.6546 1.17348 22.4887 4.48144 16.2653C7.7894 10.042 13.1645 5.14369 19.6964 2.3999C27.1863 -0.616122 35.5724 -0.587082 43.0409 2.48074C50.5094 5.54856 56.4601 11.4086 59.6062 18.7935C62.7523 26.1785 62.8408 34.4948 59.8527 41.9439C56.8645 49.3931 51.0398 55.3764 43.6383 58.5999C39.8514 60.1905 35.7798 61.0068 31.6673 60.9999ZM19.3425 20.7549L14.2837 25.6549L31.264 42.0999L48.2453 25.6499L43.1865 20.7499L31.264 32.2999L19.3425 20.7549Z"
                        fill="white" />
                </svg>
            </button>
        </section>
    </div>
    <div class="card__container">
        <section class="room__price">
            <div class="room__price__card">
                <h1>SHAROITLAR</h1>
                <p>Sizning shinam mehmonxonamizda bo'lishingiz haqiqatan ham unutilmas bo'lishini istaymiz. Shuning
                    uchun biz sizning barcha ehtiyojlaringizga alohida e'tibor beramiz
                    Biz juda noyob tajribani ta'minlay olamiz. Hashamatli mehmonxonalar dam olish uchun ajoyib manzaraga
                    ega mukammal muhitni taklif etadi
                    va bizning zamonaviy hashamatli kurort inshootlarimiz sizga hamma narsadan zavqlanishingizga yordam
                    beradi. </p>
            </div>
            <img src="{{ asset('img/spart_zali.png') }}" alt="">
            <img src="{{ asset('img/hovuz_bar.png') }}" alt="">
            <img src="{{ asset('img/spa.png') }}" alt="">
            <img src="{{ asset('img/suzish_havzasi.png') }}" alt="">
            <img src="{{ asset('img/resporan.png') }}" alt="">
            <img src="{{ asset('img/kiyim_kechak_yuvish.png') }}" alt="">
        </section>
        @include('components.details')
    </div>
</x-app-layout>
