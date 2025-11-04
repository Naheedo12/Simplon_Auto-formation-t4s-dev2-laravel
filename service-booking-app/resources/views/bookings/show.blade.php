<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 min-h-screen">
    <div class="max-w-3xl mx-auto p-6">
        <a href="{{ route('bookings.index') }}" class="text-green-700 hover:underline">← Back to list</a>

        <div class="mt-4 bg-white p-6 rounded-lg shadow">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold text-green-800">Booking #{{ $booking->id }}</h2>
                <div>
                    <a href="{{ route('bookings.edit', $booking->id) }}"
                        class="text-green-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 font-bold hover:underline">Delete</button>
                    </form>

                </div>
            </div>

            <dl class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-green-50 p-4 rounded">
                    <dt class="text-xs text-green-700 uppercase font-medium">Service ID</dt>
                    <dd class="mt-1 text-gray-800 font-semibold">{{ $booking->service_id }}</dd>
                </div>

                <div class="bg-green-50 p-4 rounded">
                    <dt class="text-xs text-green-700 uppercase font-medium">Customer Name</dt>
                    <dd class="mt-1 text-gray-800 font-semibold">{{ $booking->customer_name }}</dd>
                </div>

                <div class="bg-green-50 p-4 rounded">
                    <dt class="text-xs text-green-700 uppercase font-medium">Date</dt>
                    <dd class="mt-1 text-gray-800 font-semibold">{{ $booking->date }}</dd>
                </div>

                <div class="bg-green-50 p-4 rounded">
                    <dt class="text-xs text-green-700 uppercase font-medium">Time</dt>
                    <dd class="mt-1 text-gray-800 font-semibold">{{ $booking->time }}</dd>
                </div>
            </dl>
        </div>
    </div>
</body>

</html>
