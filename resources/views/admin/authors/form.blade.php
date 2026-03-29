@csrf
<div class="admin-form-grid">
  <div class="admin-field">
    <label for="name">Name</label>
    <input id="name" class="admin-input" type="text" name="name" value="{{ old('name', $author->name) }}" required>
  </div>
  <div class="admin-field">
    <label for="slug">Slug</label>
    <input id="slug" class="admin-input" type="text" name="slug" value="{{ old('slug', $author->slug) }}" required>
  </div>
  <div class="admin-field">
    <label for="designation">Designation</label>
    <input id="designation" class="admin-input" type="text" name="designation" value="{{ old('designation', $author->designation) }}">
  </div>
  <div class="admin-field">
    <label for="years_experience">Years of Experience</label>
    <input id="years_experience" class="admin-input" type="number" min="0" max="60" name="years_experience" value="{{ old('years_experience', $author->years_experience ?? 0) }}" required>
  </div>
  <div class="admin-field admin-field-wide">
    <label for="bio">Bio</label>
    <textarea id="bio" class="admin-input admin-textarea" name="bio" rows="6">{{ old('bio', $author->bio) }}</textarea>
  </div>
  <div class="admin-field">
    <label for="meta_title">Meta Title</label>
    <input id="meta_title" class="admin-input" type="text" name="meta_title" value="{{ old('meta_title', $author->meta_title) }}">
  </div>
  <div class="admin-field">
    <label for="meta_description">Meta Description</label>
    <textarea id="meta_description" class="admin-input admin-textarea" name="meta_description" rows="3">{{ old('meta_description', $author->meta_description) }}</textarea>
  </div>
</div>
<div class="admin-form-actions">
  <button type="submit" class="admin-btn-inline">Save Author</button>
</div>
