<x-guest-layout>
    @if (session('success'))
        <div class="max-w-md mx-auto mt-6 p-4 text-green-700 bg-green-100 border border-green-400 rounded">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('payment.process') }}" method="POST" class="mt-6 space-y-4">
        @csrf
        <div class="max-w-md mx-auto mt-10">
            <h1 class="text-2xl font-bold text-center">Xonani bron qilish</h1>
            <div>
                <label for="start_date" class="block text-sm font-medium">Boshlanish sanasi</label>
                <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}"
                    class="w-full px-4 py-2 border rounded focus:ring-blue-500 focus:border-blue-500 {{ $errors->has('start_date') ? 'border-red-500' : '' }}"
                    required>
                @error('start_date')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="end_date" class="block text-sm font-medium">Tugash sanasi</label>
                <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}"
                    class="w-full px-4 py-2 border rounded focus:ring-blue-500 focus:border-blue-500 {{ $errors->has('end_date') ? 'border-red-500' : '' }}"
                    required>
                @error('end_date')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <input type="hidden" name="room_id" value="1">
        </div>
        <div class="max-w-md mx-auto mt-10">
            <h1 class="text-2xl font-bold text-center">To'lov ma'lumotlarini kiriting</h1>
            @csrf
            <div>
                <label for="card_number" class="block text-sm font-medium">Karta raqami</label>
                <input type="text" id="card_number" name="card_number" value="{{ old('card_number') }}"
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
                    placeholder="MM/YY" required>
                @error('expiry_date')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="cvv" class="block text-sm font-medium">CVV</label>
                <input type="text" id="cvv" name="cvv" value="{{ old('cvv') }}"
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
