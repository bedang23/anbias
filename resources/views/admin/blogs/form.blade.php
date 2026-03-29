@csrf
<div class="admin-form-grid">
  <div class="admin-field">
    <label for="title">Title</label>
    <input id="title" class="admin-input" type="text" name="title" value="{{ old('title', $blog->title) }}" required>
  </div>
  <div class="admin-field">
    <label for="slug">Slug</label>
    <input id="slug" class="admin-input" type="text" name="slug" value="{{ old('slug', $blog->slug) }}" required>
  </div>

  <div class="admin-field">
    <label for="author_id">Author</label>
    <select id="author_id" class="admin-input" name="author_id" required>
      <option value="">Select author</option>
      @foreach($authors as $author)
        <option value="{{ $author->id }}" @selected((int) old('author_id', $blog->author_id) === $author->id)>{{ $author->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="admin-field">
    <label for="category_id">Category</label>
    <select id="category_id" class="admin-input" name="category_id" required>
      <option value="">Select category</option>
      @foreach($categories as $category)
        <option value="{{ $category->id }}" @selected((int) old('category_id', $blog->category_id) === $category->id)>{{ $category->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="admin-field admin-field-wide">
    <label for="excerpt">Excerpt</label>
    <textarea id="excerpt" class="admin-input admin-textarea" name="excerpt" rows="3" required>{{ old('excerpt', $blog->excerpt) }}</textarea>
  </div>

  <div class="admin-field admin-field-wide">
    <label for="content">Main Content</label>
    <textarea id="contentEditor" class="admin-input admin-textarea" name="content" rows="14" required>{{ old('content', $blog->content) }}</textarea>
  </div>

  <div class="admin-field">
    <label for="featured_image">Featured Image</label>
    <input id="featured_image" class="admin-input" type="file" name="featured_image" accept="image/*" {{ $blog->exists ? '' : 'required' }}>
    @if($blog->featured_image_path)
      <div class="admin-image-preview-wrap">
        <img src="{{ asset($blog->featured_image_path) }}" alt="{{ $blog->title }}" class="admin-image-preview">
      </div>
    @endif
  </div>

  <div class="admin-field">
    <label for="published_at">Published At</label>
    <input id="published_at" class="admin-input" type="datetime-local" name="published_at" value="{{ old('published_at', optional($blog->published_at)->format('Y-m-d\\TH:i')) }}">
    <label class="admin-checkbox">
      <input type="checkbox" name="is_published" value="1" @checked(old('is_published', $blog->is_published ?? true))>
      Publish this post
    </label>
  </div>

  <div class="admin-field">
    <label for="meta_title">Meta Title</label>
    <input id="meta_title" class="admin-input" type="text" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}" required>
  </div>
  <div class="admin-field">
    <label for="meta_description">Meta Description</label>
    <textarea id="meta_description" class="admin-input admin-textarea" name="meta_description" rows="3" required>{{ old('meta_description', $blog->meta_description) }}</textarea>
  </div>
  <div class="admin-field">
    <label for="og_title">OG Title</label>
    <input id="og_title" class="admin-input" type="text" name="og_title" value="{{ old('og_title', $blog->og_title) }}">
  </div>
  <div class="admin-field">
    <label for="og_description">OG Description</label>
    <textarea id="og_description" class="admin-input admin-textarea" name="og_description" rows="3">{{ old('og_description', $blog->og_description) }}</textarea>
  </div>
  <div class="admin-field admin-field-wide">
    <label for="canonical_url">Canonical URL</label>
    <input id="canonical_url" class="admin-input" type="url" name="canonical_url" value="{{ old('canonical_url', $blog->canonical_url) }}" placeholder="https://anbias.com/blogs/your-slug">
  </div>
</div>

<div class="admin-form-actions">
  <button type="submit" class="admin-btn-inline">Save Blog</button>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor.create(document.querySelector('#contentEditor')).catch((error) => {
    console.error(error);
  });
</script>
