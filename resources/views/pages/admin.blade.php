<x-app-layout>
    @include('layouts.navigation')
    <div class="max-w-6xl mx-auto mt-10 w-full">
        <h1 class="text-3xl font-bold text-center mb-6">Bron qilingan xonalar ro'yxati</h1>
        <table class="min-w-full bg-white border border-gray-200 w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">Foydalanuvchi</th>
                    <th class="px-4 py-2 border">Xona</th>
                    <th class="px-4 py-2 border">Boshlanish sanasi</th>
                    <th class="px-4 py-2 border">Tugash sanasi</th>
                    <th class="px-4 py-2 border">Holati</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bookings as $booking)
                    <tr>
                        <td class="px-4 py-2 border">{{ App\Models\User::find($booking->user_id)?->name }}</td>
                        <td class="px-4 py-2 border">{{ $booking->room_id }}</td>
                        <td class="px-4 py-2 border">{{ $booking->start_date }}</td>
                        <td class="px-4 py-2 border">{{ $booking->end_date }}</td>
                        <td class="px-4 py-2 border">
                            <span
                                class="px-2 py-1 text-xs font-semibold {{ $booking->status == 'confirmed' ? 'text-green-700 bg-green-200' : 'text-yellow-700 bg-yellow-200' }} rounded">
                                {{ $booking->status == 'confirmed' ? 'Tasdiqlangan' : 'Kutilmoqda' }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-2 text-center border">Hozircha bronlar mavjud emas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
