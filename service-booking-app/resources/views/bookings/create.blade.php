<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen flex items-center justify-center">
<div class="w-full max-w-3xl bg-white shadow-lg rounded-xl p-8 border border-green-200">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-6">Create a New Booking</h2>

    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label for="service_id" class="block text-green-700 font-medium mb-1">Service ID</label>
            <input type="number" id="service_id" name="service_id" placeholder="Enter service ID"
                   class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div>
            <label for="customer_name" class="block text-green-700 font-medium mb-1">Customer Name</label>
            <input type="text" id="customer_name" name="customer_name" placeholder="Enter customer name"
                   class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div>
            <label for="date" class="block text-green-700 font-medium mb-1">Date</label>
            <input type="date" id="date" name="date"
                   class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div>
            <label for="time" class="block text-green-700 font-medium mb-1">Time</label>
            <input type="time" id="time" name="time"
                   class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div class="text-center">
            <button type="submit"
                    class="bg-green-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-green-700 transition">
                Save Booking
            </button>
        </div>
    </form>
</div>
</body>
</html>
