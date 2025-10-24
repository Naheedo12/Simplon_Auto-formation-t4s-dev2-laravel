<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Required for PUT request -->

    <label>Title</label>
    <input type="text" name="title" value="{{ $post->title }}" required>

    <label>Author</label>
    <input type="text" name="author" value="{{ $post->author }}" required>

    <label>Content</label>
    <textarea name="content" required>{{ $post->content }}</textarea>

    <label>Status</label>
    <select name="status" required>
        <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
        <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
    </select>

    <button type="submit">Update Post</button>
</form>
