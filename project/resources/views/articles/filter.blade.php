<div class="row mb-4">
    <form id="filterForm" method="GET" action="{{ route('articles.index') }}" class="w-100">
        <div class="row">
            <!-- Categories Filter -->
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{__("Categories")}}</h5>
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
                <input type="text" class="form-control mb-3" id="searchFilter" name="search" value="{{ request()->search }}" placeholder="{{__("Search articles...")}}">

            <!-- Sort Filter -->
                <select class="form-select mb-3" id="sortFilter" name="sort">
                    <option value="date" {{ request()->sort == 'date' ? 'selected' : '' }}>{{__("Sort by date")}}</option>
                    <option value="recommended" {{ request()->sort == 'recommended' ? 'selected' : '' }}>{{__("Sort by Recommended")}}</option>
                </select>
                <button type="submit" class="btn btn-secondary w-100" id="filterBtn">{{__("Filter")}}</button>
            </div>
            <div class="col-md-6">
                <p class="lead">{{__("Welcome to the articles section, where you will find everything about the world of finance and financial services. The goal is to provide current and useful information that can help you make decisions about your finances. Whether you are interested in investments, savings, insurance, or retirement planning, the articles are designed to inform and inspire you.")}}</p>
            </div>
        </div>
    </form>
</div>
