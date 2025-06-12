<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éclat Cosmetics | Luxury Beauty</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="app-container">
        <aside class="sidebar">
            <div class="logo">
                <i class="fas fa-gem logo-icon"></i>
                Éclat
            </div>
            
            <div class="search-box">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search products..." id="searchInput">
            </div>
            
            <div class="category-section">
                <h2 class="section-title">Shop By Category</h2>
                <ul class="category-list" id="categoryList">
                    <!-- Dynamically populated from JSON -->
                </ul>
            </div>
            
            <div class="category-section">
                <h2 class="section-title">Filter By</h2>
                <ul class="category-list">
                    <li class="category-item active" data-filter="all">
                        <div class="category-icon"><i class="fas fa-star"></i></div>
                        <span class="category-name">All Products</span>
                        <span class="category-count">50</span>
                    </li>
                    <li class="category-item" data-filter="premium">
                        <div class="category-icon"><i class="fas fa-crown"></i></div>
                        <span class="category-name">Premium</span>
                        <span class="category-count">10</span>
                    </li>
                    <li class="category-item" data-filter="standard">
                        <div class="category-icon"><i class="fas fa-gem"></i></div>
                        <span class="category-name">Standard</span>
                        <span class="category-count">30</span>
                    </li>
                    <li class="category-item" data-filter="budget">
                        <div class="category-icon"><i class="fas fa-coins"></i></div>
                        <span class="category-name">Budget</span>
                        <span class="category-count">10</span>
                    </li>
                </ul>
            </div>
            
            <div class="filter-section">
                <h2 class="section-title">FILTER OPTIONS</h2>
                
                <div class="filter-group">
                    <div class="filter-title">
                        <i class="fas fa-tag"></i>
                        Price Range
                    </div>
                    <ul class="filter-options">
                        <li class="filter-option">
                            <input type="radio" id="all-prices" name="price-range" checked>
                            <label for="all-prices">All Prices</label>
                        </li>
                        <li class="filter-option">
                            <input type="radio" id="under-25" name="price-range">
                            <label for="under-25">Under $25</label>
                        </li>
                        <li class="filter-option">
                            <input type="radio" id="25-50" name="price-range">
                            <label for="25-50">$25-$50</label>
                        </li>
                        <li class="filter-option">
                            <input type="radio" id="over-50" name="price-range">
                            <label for="over-50">Over $50</label>
                        </li>
                    </ul>
                </div>
                
                <div class="filter-group">
                    <div class="filter-title">
                        <i class="fas fa-star"></i>
                        Rating
                    </div>
                    <ul class="filter-options">
                        <li class="filter-option">
                            <input type="radio" id="all-ratings" name="rating" checked>
                            <label for="all-ratings">All Ratings</label>
                        </li>
                        <li class="filter-option">
                            <input type="radio" id="4-stars" name="rating">
                            <label for="4-stars">4+ Stars</label>
                        </li>
                        <li class="filter-option">
                            <input type="radio" id="4.5-stars" name="rating">
                            <label for="4.5-stars">4.5+ Stars</label>
                        </li>
                    </ul>
                </div>
                
                <div class="filter-group">
                    <div class="filter-title">
                        <i class="fas fa-box"></i>
                        Availability
                    </div>
                    <ul class="filter-options">
                        <li class="filter-option">
                            <input type="radio" id="all-items" name="availability" checked>
                            <label for="all-items">All Items</label>
                        </li>
                        <li class="filter-option">
                            <input type="radio" id="bestsellers" name="availability">
                            <label for="bestsellers">Bestsellers</label>
                        </li>
                        <li class="filter-option">
                            <input type="radio" id="new-arrivals" name="availability">
                            <label for="new-arrivals">New Arrivals</label>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <main class="main-content">
            <div class="category-banner" id="categoryBanner">
                <div class="banner-content">
                    <h2>All Products</h2>
                    <p>Discover our complete collection of luxury beauty products</p>
                </div>
                <img src="https://via.placeholder.com/150" alt="Category Banner" class="banner-image">
            </div>
            <div class="toolbar">
                <div class="results-count" id="resultsCount">Loading products...</div>
                <div class="sort-filter">
                    <div class="sort-option">
                        <i class="fas fa-sort-amount-down"></i>
                        <select id="sortPrice">
                            <option value="default">Sort by Price</option>
                            <option value="low-high">Price: Low to High</option>
                            <option value="high-low">Price: High to Low</option>
                        </select>
                    </div>
                    <div class="sort-option">
                        <i class="fas fa-filter"></i>
                        <select id="sortQuality">
                            <option value="default">All Qualities</option>
                            <option value="premium">Premium</option>
                            <option value="standard">Standard</option>
                            <option value="budget">Budget</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="product-grid" id="productGrid">
                <div class="loading">
                    <div class="spinner"></div>
                </div>
            </div>
        </main>
    </div>
   <script src="./script.js"></script>
</body>
</html>