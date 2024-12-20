<x-guest-layout>
    @if (session('success'))
        <div class="max-w-md mx-auto mt-6 p-4 text-green-700 bg-green-100 border border-green-400 rounded">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->has('error'))
        <div class="max-w-md mx-auto mt-6 p-4 text-red-700 bg-red-100 border border-red-400 rounded">
            {{ $errors->first('error') }}
        </div>
    @endif
    <form action="{{ route('storeRoom') }}" method="POST" class="mt-6 space-y-4">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room_id }}">
        <div class="max-w-md mx-auto mt-10">
            <h1 class="text-2xl font-bold text-center">Xonani band qilish</h1>
            <div>
                <label for="start_date" class="block text-sm font-medium">Boshlanish sanasi</label>
                <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}"
                    min="{{ now()->toDateString() }}"
                    class="w-full px-4 py-2 border rounded focus:ring-blue-500 focus:border-blue-500 {{ $errors->has('start_date') ? 'border-red-500' : '' }}"
                    required>
                @error('start_date')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="end_date" class="block text-sm font-medium">Tugash sanasi</label>
                <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}"
                    min="{{ now()->toDateString() }}"
                    class="w-full px-4 py-2 border rounded focus:ring-blue-500 focus:border-blue-500 {{ $errors->has('end_date') ? 'border-red-500' : '' }}"
                    required>
                @error('end_date')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex justify-center gap-7">
            <button type="submit" class="px-6 py-2 text-white bg-green-500 rounded hover:bg-green-600">
                Band qilish
            </button>
            <a href="/" class="px-6 py-2 text-white bg-green-500 rounded hover:bg-green-600">Bosh sahifaga
                qaytish</a>
        </div>
    </form>

</x-guest-layout>
