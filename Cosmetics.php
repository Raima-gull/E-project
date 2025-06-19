<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éclat Cosmetics | Luxury Beauty</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./Cos&Jew.css">

</head>

<body>
    <div class="main-container">
        <aside class="sidebar">
            <div class="search-box">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search products..." id="searchInput">
            </div>
            <div class="category-section">
                <h2 class="section-title">Shop By Category</h2>
                <ul class="category-list" id="categoryList"></ul>
            </div>
            <div class="category-section">
                <h2 class="section-title">Product Tier</h2>
                <ul class="category-list">
                    <li class="category-item active" data-filter="all">
                        <div class="category-icon"><i class="fas fa-star"></i></div>
                        <span class="category-name">All Products</span>
                        <span class="category-count" id="allProductsCount"></span>
                    </li>
                    <li class="category-item" data-filter="premium">
                        <div class="category-icon"><i class="fas fa-crown"></i></div>
                        <span class="category-name">Premium</span>
                    </li>
                    <li class="category-item" data-filter="standard">
                        <div class="category-icon"><i class="fas fa-gem"></i></div>
                        <span class="category-name">Standard</span>
                    </li>
                    <li class="category-item" data-filter="budget">
                        <div class="category-icon"><i class="fas fa-coins"></i></div>
                        <span class="category-name">Budget</span>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="main-content">
            <div class="category-banner" id="categoryBanner">

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
            <div class="product-grid" id="productGrid"></div>
        </main>
    </div>

    <script>
        const productsData = {
            categories: [{
                    id: "lips",
                    name: "Lips",
                    icon: "fa-kiss-wink-heart",
                    banner: "./Images/Lips.png"
                },
                {
                    id: "face",
                    name: "Face",
                    icon: "fa-spa",
                    description: "Flawless complexion products for radiant skin",
                    banner: "./Images/Face.png"
                },
                {
                    id: "eyes",
                    name: "Eyes",
                    icon: "fa-eye",
                    description: "Eye-catching products to define and enhance",
                    banner: "./Images/Eyes.png"
                },
                {
                    id: "palettes",
                    name: "Palettes",
                    icon: "fa-palette",
                    description: "Curated color collections for creative looks",
                    banner: "./Images/Palletes.png"
                },
                {
                    id: "brushes",
                    name: "Brushes",
                    icon: "fa-paint-brush",
                    description: "Professional tools for perfect application",
                    banner: "./Images/Brushes.png"
                }
            ],
            items: [{
                    id: 1,
                    name: "Velvet Matte Lipstick",
                    category: "lips",
                    type: "lipstick",
                    description: "Ultra-pigmented matte lipstick with a velvet finish that lasts up to 12 hours.",
                    price: 32.00,
                    originalPrice: 38.00,
                    quality: "premium",
                    badge: "bestseller"
                },
                {
                    id: 2,
                    name: "Hydrating Lip Gloss",
                    category: "lips",
                    type: "lipgloss",
                    description: "Non-sticky, high-shine gloss infused with hyaluronic acid for plump lips.",
                    price: 25.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 3,
                    name: "Lip Liner Duo",
                    category: "lips",
                    type: "lipliner",
                    description: "Creamy, long-wearing lip liner for precise definition and fill.",
                    price: 20.00,
                    originalPrice: 25.00,
                    quality: "standard",
                    badge: "sale"
                },
                {
                    id: 4,
                    name: "Nourishing Lip Balm",
                    category: "lips",
                    type: "lipcare",
                    description: "A luxurious balm that repairs and nourishes lips, leaving them soft and supple.",
                    price: 18.00,
                    quality: "budget"
                },
                {
                    id: 5,
                    name: "Liquid Lip Stain",
                    category: "lips",
                    type: "liquidlipstick",
                    description: "Lightweight, buildable lip stain that provides a long-lasting tint.",
                    price: 28.00,
                    quality: "premium",
                    badge: "limited"
                },
                {
                    id: 6,
                    name: "Plumping Lip Serum",
                    category: "lips",
                    type: "lipserum",
                    description: "Visibly plumps and smooths lips with a tingling sensation.",
                    price: 35.00,
                    quality: "premium"
                },
                {
                    id: 7,
                    name: "Metallic Liquid Lipstick",
                    category: "lips",
                    type: "liquidlipstick",
                    description: "High-impact metallic finish liquid lipstick for a bold look.",
                    price: 30.00,
                    quality: "standard"
                },
                {
                    id: 8,
                    name: "Sheer Lipstick",
                    category: "lips",
                    type: "lipstick",
                    description: "A sheer, buildable lipstick for a subtle wash of color and hydration.",
                    price: 29.00,
                    quality: "standard"
                },
                {
                    id: 9,
                    name: "Lip Care Kit",
                    category: "lips",
                    type: "lipkit",
                    description: "Complete lip care routine with scrub, mask, and balm.",
                    price: 50.00,
                    originalPrice: 60.00,
                    quality: "premium",
                    badge: "bestseller"
                },
                {
                    id: 10,
                    name: "Flawless Finish Foundation",
                    category: "face",
                    type: "foundation",
                    description: "Medium-to-full coverage foundation with a natural, long-lasting finish.",
                    price: 45.00,
                    quality: "premium",
                    badge: "bestseller"
                },
                {
                    id: 11,
                    name: "Radiant Concealer",
                    category: "face",
                    type: "concealer",
                    description: "Crease-proof concealer that brightens and corrects imperfections.",
                    price: 28.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 12,
                    name: "Silky Powder Blush",
                    category: "face",
                    type: "blush",
                    description: "Finely milled powder blush for a natural flush of color.",
                    price: 22.00,
                    quality: "standard"
                },
                {
                    id: 13,
                    name: "Highlighting Drops",
                    category: "face",
                    type: "highlighter",
                    description: "Liquid highlighter for an intense, luminous glow.",
                    price: 30.00,
                    quality: "premium"
                },
                {
                    id: 14,
                    name: "Setting Spray",
                    category: "face",
                    type: "settingspray",
                    description: "Locks makeup in place for up to 16 hours, with a refreshing feel.",
                    price: 26.00,
                    quality: "standard",
                    badge: "bestseller"
                },
                {
                    id: 15,
                    name: "Contour Palette",
                    category: "face",
                    type: "contour",
                    description: "Cream and powder contour shades for sculpted features.",
                    price: 38.00,
                    quality: "premium"
                },
                {
                    id: 16,
                    name: "Primer Pore Minimizer",
                    category: "face",
                    type: "primer",
                    description: "Blurs pores and imperfections, creating a smooth canvas for makeup.",
                    price: 30.00,
                    quality: "standard"
                },
                {
                    id: 17,
                    name: "Liquid Illuminator",
                    category: "face",
                    type: "illuminator",
                    description: "Sheer, dewy liquid for an all-over glow or targeted highlight.",
                    price: 29.00,
                    quality: "standard"
                },
                {
                    id: 18,
                    name: "Bronzing Powder",
                    category: "face",
                    type: "bronzer",
                    description: "Warm, natural-looking bronzer for a sun-kissed glow.",
                    price: 27.00,
                    quality: "standard"
                },
                {
                    id: 19,
                    name: "Volumizing Mascara",
                    category: "eyes",
                    type: "mascara",
                    description: "Achieve dramatic volume and length with this smudge-proof mascara.",
                    price: 24.00,
                    quality: "standard",
                    badge: "bestseller"
                },
                {
                    id: 20,
                    name: "Liquid Eyeliner Pen",
                    category: "eyes",
                    type: "eyeliner",
                    description: "Precision liquid eyeliner for sharp, intense lines.",
                    price: 19.00,
                    quality: "standard"
                },
                {
                    id: 21,
                    name: "Brow Defining Pencil",
                    category: "eyes",
                    type: "brow",
                    description: "Dual-ended pencil for perfectly shaped and filled brows.",
                    price: 18.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 22,
                    name: "Glitter Eyeshadow",
                    category: "eyes",
                    type: "eyeshadow",
                    description: "Sparkling loose glitter eyeshadow for dazzling eye looks.",
                    price: 15.00,
                    quality: "budget",
                    badge: "sale"
                },
                {
                    id: 23,
                    name: "Cream Eyeshadow Stick",
                    category: "eyes",
                    type: "eyeshadow",
                    description: "Long-wearing cream eyeshadow stick for easy, blendable application.",
                    price: 20.00,
                    quality: "standard"
                },
                {
                    id: 24,
                    name: "Waterproof Gel Liner",
                    category: "eyes",
                    type: "eyeliner",
                    description: "Smudge-proof and waterproof gel eyeliner that glides on smoothly.",
                    price: 21.00,
                    quality: "premium"
                },
                {
                    id: 25,
                    name: "Lash Primer",
                    category: "eyes",
                    type: "lashprimer",
                    description: "Prepares lashes for mascara, enhancing length and volume.",
                    price: 16.00,
                    quality: "standard"
                },
                {
                    id: 26,
                    name: "Eyeshadow Base",
                    category: "eyes",
                    type: "eyeshadowbase",
                    description: "Creates a smooth, even base for eyeshadow, increasing wear time.",
                    price: 17.00,
                    quality: "standard"
                },
                {
                    id: 27,
                    name: "Brow Gel Clear",
                    category: "eyes",
                    type: "browgel",
                    description: "Sets brows in place for a polished, natural look.",
                    price: 15.00,
                    quality: "budget"
                },
                {
                    id: 28,
                    name: "Nude Eyeshadow Palette",
                    category: "palettes",
                    type: "eyeshadowpalette",
                    description: "A versatile palette with 12 highly pigmented nude and neutral shades.",
                    price: 55.00,
                    originalPrice: 65.00,
                    quality: "premium",
                    badge: "bestseller"
                },
                {
                    id: 29,
                    name: "Brights Eyeshadow Palette",
                    category: "palettes",
                    type: "eyeshadowpalette",
                    description: "Bold and vibrant eyeshadows for creative, colorful looks.",
                    price: 50.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 30,
                    name: "Face Sculpting Palette",
                    category: "palettes",
                    type: "facepalette",
                    description: "All-in-one palette with bronzer, blush, and highlighter shades.",
                    price: 60.00,
                    quality: "premium"
                },
                {
                    id: 31,
                    name: "Mini Eyeshadow Palette",
                    category: "palettes",
                    type: "eyeshadowpalette",
                    description: "Compact palette with 6 essential shades, perfect for travel.",
                    price: 30.00,
                    quality: "budget",
                    badge: "sale"
                },
                {
                    id: 32,
                    name: "Glow Highlighting Palette",
                    category: "palettes",
                    type: "highlighterpalette",
                    description: "Four stunning highlighter shades for a customizable glow.",
                    price: 42.00,
                    quality: "standard"
                },
                {
                    id: 33,
                    name: "Smoky Eye Palette",
                    category: "palettes",
                    type: "eyeshadowpalette",
                    description: "A collection of dark, intense shades for the perfect smoky eye.",
                    price: 48.00,
                    quality: "premium"
                },
                {
                    id: 34,
                    name: "Lip Palette",
                    category: "palettes",
                    type: "lippalette",
                    description: "A versatile lip palette with a range of lipsticks and glosses.",
                    price: 35.00,
                    quality: "standard"
                },
                {
                    id: 35,
                    name: "Essential Brow Palette",
                    category: "palettes",
                    type: "browpalette",
                    description: "Everything you need for perfect brows in one compact kit.",
                    price: 30.00,
                    quality: "standard"
                },
                {
                    id: 36,
                    name: "Customizable Palette",
                    category: "palettes",
                    type: "custompalette",
                    description: "Empty palette to fill with your favorite single eyeshadows and face powders.",
                    price: 20.00,
                    quality: "budget"
                },
                {
                    id: 37,
                    name: "Foundation Brush",
                    category: "brushes",
                    type: "facebrush",
                    description: "Flat-top brush for seamless foundation application.",
                    price: 25.00,
                    quality: "premium",
                    badge: "bestseller"
                },
                {
                    id: 38,
                    name: "Powder Brush",
                    category: "brushes",
                    type: "facebrush",
                    description: "Soft, fluffy brush for applying setting powder and bronzer.",
                    price: 22.00,
                    quality: "standard"
                },
                {
                    id: 39,
                    name: "Eyeshadow Blending Brush",
                    category: "brushes",
                    type: "eyebrush",
                    description: "Tapered brush for effortless eyeshadow blending.",
                    price: 18.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 40,
                    name: "Angled Brow Brush",
                    category: "brushes",
                    type: "eyebrush",
                    description: "Precise angled brush for defining and filling brows.",
                    price: 15.00,
                    quality: "budget"
                },
                {
                    id: 41,
                    name: "Contour Brush",
                    category: "brushes",
                    type: "facebrush",
                    description: "Sculpting brush designed for precise contour application.",
                    price: 20.00,
                    quality: "standard"
                },
                {
                    id: 42,
                    name: "Lip Brush",
                    category: "brushes",
                    type: "lipbrush",
                    description: "Firm, tapered brush for precise lipstick and gloss application.",
                    price: 12.00,
                    quality: "budget"
                },
                {
                    id: 43,
                    name: "Concealer Brush",
                    category: "brushes",
                    type: "facebrush",
                    description: "Small, dense brush for blending concealer seamlessly.",
                    price: 17.00,
                    quality: "standard"
                },
                {
                    id: 44,
                    name: "Fan Brush",
                    category: "brushes",
                    type: "facebrush",
                    description: "Delicate fan brush for a soft application of highlighter.",
                    price: 19.00,
                    quality: "standard"
                },
                {
                    id: 45,
                    name: "Brush Cleaning Mat",
                    category: "brushes",
                    type: "accessories",
                    description: "Silicone mat with textures for deep cleaning makeup brushes.",
                    price: 10.00,
                    quality: "budget",
                    badge: "bestseller"
                }
            ]
        };
        const D = {
            categoryList: document.getElementById('categoryList'),
            productGrid: document.getElementById('productGrid'),
            resultsCount: document.getElementById('resultsCount'),
            sortPrice: document.getElementById('sortPrice'),
            sortQuality: document.getElementById('sortQuality'),
            searchInput: document.getElementById('searchInput'),
            categoryBanner: document.getElementById('categoryBanner'),
            allProductsCountElement: document.getElementById('allProductsCount')
        };
        let currentFilters = {
            category: 'all',
            sort: 'default',
            quality: 'default',
            search: ''
        };

        function updateCategoryCounts() {
            productsData.categories.forEach(category => {
                category.count = productsData.items.filter(item => item.category === category.id).length;
            });
            D.allProductsCountElement.textContent = productsData.items.length;
        }


        function renderCategories() {
            D.categoryList.innerHTML = productsData.categories.map(category => `
                <li class="category-item" data-category="${category.id}">
                    <div class="category-icon"><i class="fas ${category.icon}"></i></div>
                    <span class="category-name">${category.name}</span>
                    <span class="category-count">${category.count}</span>
                </li>
            `).join('');
        }


        function renderProducts() {
            let filteredProducts = [...productsData.items];
            const {
                category,
                quality,
                search,
                sort
            } = currentFilters;


            if (category !== 'all') {
                filteredProducts = filteredProducts.filter(product => product.category === category);
            } else {
                let selectedAllProducts = [];
                const categoryOrder = ["lips", "face", "eyes", "palettes", "brushes"];
                categoryOrder.forEach(catId => {
                    const productsInCategory = productsData.items.find(product => product.category === catId);
                    if (productsInCategory) selectedAllProducts.push(productsInCategory);
                });

                let remainingNeeded = 9 - selectedAllProducts.length;
                if (remainingNeeded > 0) {
                    const currentProductIds = new Set(selectedAllProducts.map(p => p.id));
                    const otherProducts = productsData.items.filter(p => !currentProductIds.has(p.id));
                    selectedAllProducts.push(...otherProducts.slice(0, remainingNeeded));
                }
                filteredProducts = selectedAllProducts;
            }
            if (quality !== 'default') {
                filteredProducts = filteredProducts.filter(product => product.quality === quality);
            }


            if (search) {
                const searchTerm = search.toLowerCase();
                filteredProducts = filteredProducts.filter(product =>
                    product.name.toLowerCase().includes(searchTerm) ||
                    product.description.toLowerCase().includes(searchTerm)
                );
            }

            if (sort === 'low-high') {
                filteredProducts.sort((a, b) => a.price - b.price);
            } else if (sort === 'high-low') {
                filteredProducts.sort((a, b) => b.price - a.price);
            }
            filteredProducts = filteredProducts.slice(0, 9);

            D.resultsCount.textContent = `${filteredProducts.length} products found`;
            D.productGrid.innerHTML = filteredProducts.length === 0 ?
                `<div class="no-results">No products match your filters. Try adjusting your search criteria.</div>` :
                filteredProducts.map((product, index) => {
                    const delay = index * 0.1;
                    const badgeHtml = product.badge ? `<span class="product-badge">${product.badge}</span>` : '';
                    const originalPriceHtml = product.originalPrice ? `<span class="original">$${product.originalPrice.toFixed(2)}</span>` : '';

                    return `
                        <div class="product-card" style="animation-delay: ${delay}s">
                            ${badgeHtml}
                            <div class="product-media">
                                <img src="https://via.placeholder.com/300/1e1e1e/ffffff?text=${product.name.split(' ').join('+')}" alt="${product.name}" class="product-image">
                            </div>
                            <div class="product-details">
                                <span class="product-category">${product.category}</span>
                                <h3 class="product-title">${product.name}</h3>
                                <p class="product-description">${product.description}</p>
                                <div class="product-footer">
                                    <div class="product-price">
                                        ${originalPriceHtml}
                                        $${product.price.toFixed(2)}
                                    </div>
                                    <button class="add-to-cart">
                                        <i class="fas fa-shopping-bag"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                }).join('');

            updateCategoryBanner();
        }
        function updateCategoryBanner() {
            if (currentFilters.category === 'all') {
                D.categoryBanner.innerHTML = `
            <img src="./Images/allProducts.png" alt="All Products" class="banner-image">
        `;
            } else {
                const category = productsData.categories.find(cat => cat.id === currentFilters.category);
                if (category) {
                    D.categoryBanner.innerHTML = `
                <img src="${category.banner}" alt="${category.name}" class="banner-image">
            `;
                }
            }
        }
        function setupEventListeners() {
            D.categoryList.addEventListener('click', (event) => {
                const clickedItem = event.target.closest('.category-item[data-category]');
                if (clickedItem) {
                    document.querySelectorAll('.category-item[data-category]').forEach(i => i.classList.remove('active'));
                    clickedItem.classList.add('active');
                    currentFilters.category = clickedItem.dataset.category;
                    renderProducts();
                }
            });
            document.querySelectorAll('.category-item[data-filter]').forEach(item => {
                item.addEventListener('click', function() {
                    document.querySelectorAll('.category-item[data-filter]').forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    currentFilters.quality = this.dataset.filter === 'all' ? 'default' : this.dataset.filter;
                    renderProducts();
                });
            });
            D.sortPrice.addEventListener('change', () => {
                currentFilters.sort = D.sortPrice.value;
                renderProducts();
            });
            D.sortQuality.addEventListener('change', () => {
                currentFilters.quality = D.sortQuality.value === 'default' ? 'default' : D.sortQuality.value;
                renderProducts();
            });
            D.searchInput.addEventListener('input', () => {
                currentFilters.search = D.searchInput.value.trim();
                renderProducts();
            });
        }

        function init() {
            updateCategoryCounts();
            renderCategories();
            renderProducts();
            setupEventListeners();
        }

        document.addEventListener('DOMContentLoaded', init);
    </script>
</body>

</html>