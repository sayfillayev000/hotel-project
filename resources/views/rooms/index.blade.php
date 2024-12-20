<x-app-layout>
    <div class="background__imgae__room">
        @include('components.navbar')
        <section class="flex flex-col items-center justify-center text-center text-white h-full">
            <h1 class="text-5xl font-bold uppercase">Luxury</h1>
            <h3 class="text-3xl mt-2">Hotels</h3>
            <h2 class="text-4xl mt-4">Xush kelibsiz</h2>
            <p class="mt-6 text-lg px-4 max-w-2xl">
                Mehmonxonangizni bron qiling va hashamatdan zavqlaning eng maqbul narxlarda qayta belgilangan.
            </p>
            <button class="mt-8 bg-white text-gray-800 px-6 py-3 rounded-full shadow-lg hover:bg-gray-200">
                Boshlash
            </button>
        </section>
    </div>
    <div class="container mx-auto p-12">
        <section class="text-center">
            <div class="mb-12">
                <h1 class="text-4xl font-bold">Xonalar va Narxlar</h1>
                <p class="mt-4 text-gray-600">
                    Bizning har bir yorug', yorug'lik suvli xonalarimiz qulay yashash uchun kerak bo'lishi mumkin
                    bo'lgan barcha narsalar bilan ta'minlangan. Va ha, konfor bizning yagona maqsadimiz emas, biz
                    shuningdek, yaxshi dizayn, zamonaviy mebel bilan to'ldirilishini qadrlaymiz. Xonalarimizning
                    dengiz manzarali derazalari va teraslaridan ko'rinadigan tabiat palitrasining boy ohanglari bilan.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($rooms as $room)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $room->photo) }}" alt="{{ $room->name }}"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-2xl font-bold">{{ $room->name }}</h2>
                            <p class="text-gray-600 mt-2">{{ $room->description }}</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-xl font-semibold text-gray-800">{{ $room->price }} UZS</span>
                                <a href="{{ route('brom', $room->id) }}"
                                    class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                                    Band qilish
                                </a>
                            </div>
                            @role('admin')
                                <div class="flex justify-between items-center mt-4">
                                    <a href="{{ route('rooms.edit', $room->id) }}"
                                        class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600">
                                        Tahrirlash
                                    </a>
                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST"
                                        onsubmit="return confirm('Rostdan ham o\'chirishni xohlaysizmi?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600">
                                            O'chirish
                                        </button>
                                    </form>
                                </div>
                            @endrole
                        </div>
                    </div>
                @endforeach
            </div>
            @role('admin')
                <div class="mt-8">
                    <a href="{{ route('rooms.create') }}"
                        class="bg-blue-500 text-white px-6 py-3 rounded shadow hover:bg-blue-600">
                        Yangi xona qo'shish
                    </a>
                </div>
            @endrole
        </section>
        @include('components.details')
    </div>
</x-app-layout>
