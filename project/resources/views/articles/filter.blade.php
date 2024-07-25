<!-- Filter Bar -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <select class="form-select" id="categoryFilter">
            <option value="">All Categories</option>
            <option value="investment">Investment</option>
            <option value="savings">Savings</option>
            <option value="retirement">Retirement</option>
        </select>
    </div>
    <div class="col-md-3 mb-3">
        <input type="text" class="form-control" id="searchFilter" placeholder="Search articles...">
    </div>
    <div class="col-md-3 mb-3">
        <select class="form-select" id="sortFilter">
            <option value="date">Sort by Date</option>
            <option value="length">Sort by Length</option>
        </select>
    </div>
    <div class="col-md-3 d-flex align-items-center">
        <button class="btn btn-secondary w-100" id="filterBtn">Filter</button>
    </div>
</div>
