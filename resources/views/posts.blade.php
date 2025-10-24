<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <!-- Bootstrap 5 CDN -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    >

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .post-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.2s ease;
        }
        .post-card:hover {
            transform: translateY(-5px);
        }
        .post-title {
            color: #007bff;
            font-weight: 600;
        }
        .post-meta {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .post-content {
            margin-top: 10px;
        }
        .add-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.2s ease;
        }
        .add-btn:hover {
            background-color: #218838;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">📜 Blog Posts</h1>

            <a href="{{ route('posts.create') }}" class="add-btn">+ Add Post</a>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="post-card">
                        <h3 class="post-title">{{ $post->title }}</h3>
                        <p class="post-meta">
                            <strong>Author:</strong> {{ $post->author }} |
                            <strong>Status:</strong> {{ ucfirst($post->status) }}
                        </p>
                        <div class="post-content">
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
        crossorigin="anonymous">
    </script>
</body>
</html>
