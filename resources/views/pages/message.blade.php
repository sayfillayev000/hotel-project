<x-app-layout>
    @include('layouts.navigation')
    <div class="max-w-6xl mx-auto mt-10 w-full">
        <h1 class="text-3xl font-bold text-center mb-6">Yuborilgan xabarlar ro'yxati</h1>
        <table class="min-w-full bg-white border border-gray-200 w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">Foydalanuvchi</th>
                    <th class="px-4 py-2 border">Xabar</th>
                    <th class="px-4 py-2 border">Yuborilgan vaqti</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $message)
                    <tr>
                        <td class="px-4 py-2 border">{{ $message->user?->name }}</td>
                        <td class="px-4 py-2 border">{{ $message->message }}</td>
                        <td class="px-4 py-2 border">{{ $message->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-2 text-center border">Hozircha xabarlar mavjud emas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
