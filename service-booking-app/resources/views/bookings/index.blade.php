<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings - Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 min-h-screen">
    <div class="max-w-5xl mx-auto p-6">
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-green-800">Bookings</h1>
            <a href="{{ route('bookings.create') }}"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">+ New Booking</a>
        </header>

        <table class="w-full bg-white shadow rounded-lg">
            <thead class="bg-green-100">
                <tr>
                    <th class="px-4 py-3 text-left text-green-800">ID</th>
                    <th class="px-4 py-3 text-left text-green-800">Service ID</th>
                    <th class="px-4 py-3 text-left text-green-800">Customer Name</th>
                    <th class="px-4 py-3 text-left text-green-800">Date</th>
                    <th class="px-4 py-3 text-left text-green-800">Time</th>
                    <th class="px-4 py-3 text-right text-green-800">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($bookings as $booking)
                    <tr>
                        <td class="px-4 py-3">{{ $booking->id }}</td>
                        <td class="px-4 py-3">{{ $booking->service_id }}</td>
                        <td class="px-4 py-3">{{ $booking->customer_name }}</td>
                        <td class="px-4 py-3">{{ $booking->date }}</td>
                        <td class="px-4 py-3">{{ $booking->time }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('bookings.show', $booking->id) }}"
                                class="text-violet-600 font-bold hover:underline mr-2">Show</a>
                            <a href="{{ route('bookings.edit', $booking->id) }}"
                                class="text-blue-700 font-bold hover:underline mr-2">Edit</a>
                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-bold hover:underline">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
