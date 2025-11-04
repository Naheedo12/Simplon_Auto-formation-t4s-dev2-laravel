<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 min-h-screen">
    <div class="max-w-5xl mx-auto p-6">
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-green-800">Services</h1>
            <a href={{ route('services.create') }}
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">+ New Service</a>
        </header>

        <table class="w-full bg-white shadow rounded-lg">
            <thead class="bg-green-100">
                <tr>
                    <th class="px-4 py-3 text-left text-green-800">ID</th>
                    <th class="px-4 py-3 text-left text-green-800">title</th>
                    <th class="px-4 py-3 text-left text-green-800">Duration</th>
                    <th class="px-4 py-3 text-left text-green-800">Price</th>
                    <th class="px-4 py-3 text-left text-green-800">Created At</th>
                    <th class="px-4 py-3 text-right text-green-800">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($services as $service)
                    <tr>
                        <td class="px-4 py-3">{{ $service->id }}</td>
                        <td class="px-4 py-3">{{ $service->title }}</td>
                        <td class="px-4 py-3">{{ $service->duration }} min</td>
                        <td class="px-4 py-3">{{ $service->price }}</td>
                        <td class="px-4 py-3">{{ $service->created_at }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href={{ route('services.show', $service->id) }}
                                class="text-violet-600 font-bold hover:underline mr-2">Show</a>
                            <a href={{ route('services.edit', $service->id) }}
                                class="text-blue-700 font-bold hover:underline mr-2">Edit</a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-bold hover:underline"
                                    onclick="return confirm('Are you sure you want to delete this service?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
