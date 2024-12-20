<x-app-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold mb-6">Xonani tahrirlash</h1>
        <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Xona nomi</label>
                <input type="text" name="name" id="name" value="{{ $room->name }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Tavsif</label>
                <textarea name="description" id="description" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $room->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Narxi (UZS)</label>
                <input type="number" name="price" id="price" value="{{ $room->price }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700">Rasm yuklash (agar yangilash kerak
                    bo'lsa)</label>
                <input type="file" name="photo" id="photo"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @if ($room->photo)
                    <p class="mt-2 text-sm text-gray-500">Joriy rasm: </p>
                    <img src="{{ asset('storage/' . $room->photo) }}" alt="{{ $room->name }}"
                        class="w-50  mt-2 object-cover">
                @endif
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                Yangilash
            </button>
            <a href="{{ route('rooms.index') }}" class="ml-4 text-gray-500 hover:text-gray-700">Bekor qilish</a>
        </form>
    </div>
</x-app-layout>
