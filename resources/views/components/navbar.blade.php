<header class="">
    <div class="container mx-auto flex justify-between items-center px-6">
        <div class="font-bold text-xl flex items-center text-white">
            LUXURY
            <span class="ml-4">
                HOTELS
            </span>
        </div>
        <nav class="flex items-center  text-white gap-8" style="gap: 20px">
            <a href={{ route('main') }} class=" ">Asosiy</a>
            <a href={{ route('opportunities') }} class=" ">Imkoniyatlar</a>
            <a href={{ route('room') }} class="">Xonalar</a>
            <a href={{ route('contactus') }} class=" ">Biz bilan bog'lanish</a>
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class=" px-4 py-2 rounded-md  hover:text-white">Tizimdan
                        chiqish</button>
                </form>
            @endauth
            @role('admin')
                <a href={{ route('admin') }} class=" px-4 py-2 rounded-md  hover:text-white">admin</a>
            @endrole
        </nav>
    </div>
</header>
