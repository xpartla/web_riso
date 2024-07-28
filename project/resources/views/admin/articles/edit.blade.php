@include('components.header')
@include('components.nav')
<div class="container">
    <h2>Edit Article</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Return to Admin</a>
    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Article Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $article->name }}" required>
        </div>

        <div class="form-group">
            <label>Categories</label>
            @foreach($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="category_id[]" value="{{ $category->id }}"
                        {{ $article->categories->contains($category->id) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $category->name }}</label>
                </div>
            @endforeach
        </div>

        <h3>Sections</h3>
        <div id="sections">
            @foreach($article->sections as $section)
                <div class="section mb-3">
                    <input type="hidden" name="sections[{{ $section->id }}][id]" value="{{ $section->id }}">
                    <div class="form-group">
                        <label for="section_title_{{ $section->id }}">Section Title</label>
                        <input type="text" class="form-control" id="section_title_{{ $section->id }}" name="sections[{{ $section->id }}][title]" value="{{ $section->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="section_content_{{ $section->id }}">Content</label>
                        <textarea class="form-control" id="section_content_{{ $section->id }}" name="sections[{{ $section->id }}][content]" required>{{ $section->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="section_image_{{ $section->id }}">Image URL</label>
                        <input type="url" class="form-control" id="section_image_{{ $section->id }}" name="sections[{{ $section->id }}][image]" value="{{ $section->image }}">
                    </div>
                    <div class="form-group">
                        <label for="section_order_{{ $section->id }}">Order</label>
                        <input type="number" class="form-control" id="section_order_{{ $section->id }}" name="sections[{{ $section->id }}][order]" value="{{ $section->order }}" required>
                    </div>
                    <button type="button" class="btn btn-danger" onclick="deleteSection({{ $section->id }})">Delete Section</button>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Update Article</button>
    </form>

    <h3>Add New Section</h3>
    <form action="{{ route('admin.addSection', $article->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="new_section_title">Section Title</label>
            <input type="text" class="form-control" id="new_section_title" name="title" required>
        </div>
        <div class="form-group">
            <label for="new_section_content">Content</label>
            <textarea class="form-control" id="new_section_content" name="content" required></textarea>
        </div>
        <div class="form-group">
            <label for="new_section_image">Image URL</label>
            <input type="url" class="form-control" id="new_section_image" name="image">
        </div>
        <div class="form-group">
            <label for="new_section_order">Order</label>
            <input type="number" class="form-control" id="new_section_order" name="order" value="0" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Section</button>
    </form>
</div>

<script>
    function deleteSection(sectionId) {
        if (confirm('Are you sure you want to delete this section?')) {
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/admin/sections/' + sectionId;

            let token = document.createElement('input');
            token.type = 'hidden';
            token.name = '_token';
            token.value = '{{ csrf_token() }}';

            let method = document.createElement('input');
            method.type = 'hidden';
            method.name = '_method';
            method.value = 'DELETE';

            form.appendChild(token);
            form.appendChild(method);

            document.body.appendChild(form);
            form.submit();
        }
    }
</script>

@include('components.footer')
