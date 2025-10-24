<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>

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
        .form-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 50px;
        }
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            font-weight: 600;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            transition: background 0.2s ease;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .back-link {
            text-decoration: none;
            color: #6c757d;
            font-weight: 500;
        }
        .back-link:hover {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-8 mx-auto form-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Add a New Post</h2>
                <a href="{{ route('posts.index') }}" class="back-link">&larr; Back to Posts</a>
            </div>

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter post title" required>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" id="author" class="form-control" placeholder="Enter author name" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" rows="5" class="form-control" placeholder="Write your post content..." required></textarea>
                </div>

                <div class="mb-4">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="">Select status</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Save Post</button>
            </form>
        </div>
    </div>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
        crossorigin="anonymous">
    </script>
</body>
</html>
