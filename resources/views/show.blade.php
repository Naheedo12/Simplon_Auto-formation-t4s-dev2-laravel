<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .post-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 50px;
        }
        .back-link {
            text-decoration: none;
            color: #6c757d;
            font-weight: 500;
        }
        .back-link:hover {
            color: #000;
        }
        .post-field {
            margin-bottom: 20px;
        }
        .post-field label {
            font-weight: 600;
            display: block;
            margin-bottom: 5px;
        }
        .post-field span {
            display: block;
            padding: 10px;
            background: #f1f1f1;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-8 mx-auto post-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>View Post</h2>
                <a href="{{ route('posts.index') }}" class="back-link">&larr; Back to Posts</a>
            </div>

            <div class="post-field">
                <label>Title:</label>
                <span>{{ $post->title }}</span>
            </div>

            <div class="post-field">
                <label>Author:</label>
                <span>{{ $post->author }}</span>
            </div>

            <div class="post-field">
                <label>Content:</label>
                <span>{{ $post->content }}</span>
            </div>

            <div class="post-field">
                <label>Status:</label>
                <span>{{ ($post->status) }}</span>
            </div>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit Post</a>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</html>
