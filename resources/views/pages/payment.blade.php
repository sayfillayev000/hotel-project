<x-guest-layout>
    @if (session('success'))
        <div class="max-w-md mx-auto mt-6 p-4 text-green-700 bg-green-100 border border-green-400 rounded">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="max-w-md mx-auto mt-6 p-4 text-red-700 bg-red-100 border border-red-400 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('payment.process') }}" method="POST" class="mt-6 space-y-4">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room_id }}">
        {{-- <h1 class="text-2xl font-bold text-center">Sizdan yechiladi</h1> --}}
        <div class="max-w-md mx-auto mt-10">
            <h1 class="text-2xl font-bold text-center">To'lov ma'lumotlarini kiriting</h1>
            <div>
                <label for="card_number" class="block text-sm font-medium">Karta raqami</label>
                <input type="number" id="card_number" name="card_number" value="{{ old('card_number') }}"
                    min="1000000000000000" max="9999999999999999"
                    class="w-full px-4 py-2 border rounded focus:ring-blue-500 focus:border-blue-500 {{ $errors->has('card_number') ? 'border-red-500' : '' }}"
                    placeholder="0000 0000 0000 0000" required>
                @error('card_number')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="expiry_date" class="block text-sm font-medium">Amal qilish muddati</label>
                <input type="text" id="expiry_date" name="expiry_date" value="{{ old('expiry_date') }}"
                    class="w-full px-4 py-2 border rounded focus:ring-blue-500 focus:border-blue-500 {{ $errors->has('expiry_date') ? 'border-red-500' : '' }}"
                    placeholder="MM/YY" required pattern="^(0[1-9]|1[0-2])\/\d{2}$"
                    title="Sanani MM/YY formatida kiriting (masalan: 01/25)">

                @error('expiry_date')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="cvv" class="block text-sm font-medium">CVV</label>
                <input type="number" id="cvv" name="cvv" value="{{ old('cvv') }}" min="100"
                    max="999"
                    class="w-full px-4 py-2 border rounded focus:ring-blue-500 focus:border-blue-500 {{ $errors->has('cvv') ? 'border-red-500' : '' }}"
                    placeholder="123" required>
                @error('cvv')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-center gap-7">
                <button type="submit" class="px-6 py-2 text-white bg-green-500 rounded hover:bg-green-600">
                    To'lash
                </button>
                <a href="/" class="px-6 py-2 text-white bg-green-500 rounded hover:bg-green-600">Bosh sahifaga
                    qaytish</a>

            </div>
        </div>
    </form>
</x-guest-layout>
