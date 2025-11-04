<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Service</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
 
<body class="bg-green-50 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-3xl bg-white shadow-lg rounded-xl p-8 border border-green-200">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-6">Create a New Service</h2>

    <form action= {{ route('services.update', $service->id ) }} method="POST" enctype="multipart/form-data" class="space-y-5">
      <!-- Title -->
      <div>
        <label for="title" class="block text-green-700 font-medium mb-1">Title</label>
        <input type="text" id="title" name="title" value={{ $service->title }} placeholder="Enter service title"
               class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
      </div>

      <!-- Description -->
      <div>
        <label for="description" class="block text-green-700 font-medium mb-1">Description</label>
        <textarea id="description" name="description" rows="4">{{ $service->description }}</textarea>
      </div>

      <!-- Duration -->
      <div>
        <label for="duration" class="block text-green-700 font-medium mb-1">Duration (minutes)</label>
        <input type="number" id="duration" name="duration" value={{ $service->duration }} placeholder="e.g. 60"
               class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
      </div>

      <!-- Price -->
      <div>
        <label for="price" class="block text-green-700 font-medium mb-1">Price ($)</label>
        <input type="number" step="0.01" id="price" name="price" value={{ $service->price }} placeholder="e.g. 49.99"
               class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
      </div>

      <!-- Image -->
      <div>
        <label for="image" class="block text-green-700 font-medium mb-1">Image</label>
        <input type="file" id="image" name="image" value={{ $service->image }}
               class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400 bg-white">
      </div>

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit"
                class="bg-green-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-green-700 transition">
          save changes
        </button>
      </div>
    </form>
  </div>
</body>
</html>