<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen">
  <div class="max-w-3xl mx-auto p-6">
    <a href="{{ route('services.index') }}" class="text-green-700 hover:underline">← Back to list</a>

    <div class="mt-4 bg-white p-6 rounded-lg shadow">
      <div class="flex justify-between items-center">
        <h2 class="text-xl font-semibold text-green-800">Service #{{ $service->id }}</h2>
        <div>
          <a href="{{ route('services.edit', $service->id) }}" class="text-green-600 hover:underline mr-2">Edit</a>
<form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-600 hover:underline"
            onclick="return confirm('Delete this service?')">
        Delete
    </button>
</form>
        </div>
      </div>

      <!-- Image section -->
      @if($service->image)
      <div class="mt-6 flex justify-center">
        <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" class="rounded-lg shadow-md w-64 h-64 object-cover border border-green-200">
      </div>
      @else
      <p class="mt-6 text-center text-gray-500 italic">No image available</p>
      @endif

      <!-- Details section -->
      <dl class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="bg-green-50 p-4 rounded">
          <dt class="text-xs text-green-700 uppercase font-medium">Title</dt>
          <dd class="mt-1 text-gray-800 font-semibold">{{ $service->title }}</dd>
        </div>

        <div class="bg-green-50 p-4 rounded">
          <dt class="text-xs text-green-700 uppercase font-medium">Description</dt>
          <dd class="mt-1 text-gray-800 font-semibold">{{ $service->description }}</dd>
        </div>

        <div class="bg-green-50 p-4 rounded">
          <dt class="text-xs text-green-700 uppercase font-medium">Duration (minutes)</dt>
          <dd class="mt-1 text-gray-800 font-semibold">{{ $service->duration }}</dd>
        </div>

        <div class="bg-green-50 p-4 rounded">
          <dt class="text-xs text-green-700 uppercase font-medium">Price ($)</dt>
          <dd class="mt-1 text-gray-800 font-semibold">{{ $service->price }}</dd>
        </div>
      </dl>

      <div class="mt-6 text-sm text-gray-500">
        <p>Created at: {{ $service->created_at }}</p>
        <p>Updated at: {{ $service->updated_at }}</p>
      </div>
    </div>
  </div>
</body>
</html>