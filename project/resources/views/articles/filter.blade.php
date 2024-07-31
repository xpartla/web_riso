<div class="row mb-4">
    <form id="filterForm" method="GET" action="{{ route('articles.index') }}" class="w-100">
        <div class="row">
            <!-- Categories Filter -->
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="categories[]" id="category{{ $category->id }}" value="{{ $category->id }}" {{ request()->has('categories') && in_array($category->id, request()->categories) ? 'checked' : '' }}>
                                <label class="form-check-label" for="category{{ $category->id }}">
                                    {{ $category->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Search Filter -->
            <div class="col-md-3 mb-3">
                <input type="text" class="form-control mb-3" id="searchFilter" name="search" value="{{ request()->search }}" placeholder="Search articles...">

            <!-- Sort Filter -->
                <select class="form-select mb-3" id="sortFilter" name="sort">
                    <option value="date" {{ request()->sort == 'date' ? 'selected' : '' }}>Sort by Date</option>
                    <option value="recommended" {{ request()->sort == 'recommended' ? 'selected' : '' }}>Sort by Recommended</option>
                </select>
                <button type="submit" class="btn btn-secondary w-100" id="filterBtn">Filter</button>
            </div>
            <div class="col-md-6">
                <p class="lead">Discover a range of insightful articles on various financial topics including investment strategies, savings plans, and retirement preparation. Our articles are designed to provide you with the knowledge you need to make informed financial decisions.</p>
            </div>
        </div>
    </form>
</div>
