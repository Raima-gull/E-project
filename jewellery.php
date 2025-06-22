<?php
include_once "header.php";
?>
    <div class="app">
        <aside class="side_panel side_panel--expanded">
            <div class="sidebar__section">
                <h2 class="sidebar__title">Shop By Category</h2>
                <ul class="sidebar__list" id="categoryList"></ul>
            </div>
            <div class="sidebar__section">
                <h2 class="sidebar__title">Product Tier</h2>
                <ul class="sidebar__list">
                    <li class="sidebar__item sidebar__item--active" data-filter="all">
                        <div class="sidebar__icon"><i class="fas fa-star"></i></div>
                        <span class="sidebar__text">All Jewelry</span>
                        <span class="sidebar__count" id="allProductsCount">24</span>
                    </li>
                    <li class="sidebar__item" data-filter="premium">
                        <div class="sidebar__icon"><i class="fas fa-crown"></i></div>
                        <span class="sidebar__text">Premium</span>
                        <span class="sidebar__count">7</span>
                    </li>
                    <li class="sidebar__item" data-filter="standard">
                        <div class="sidebar__icon"><i class="fas fa-gem"></i></div>
                        <span class="sidebar__text">Standard</span>
                        <span class="sidebar__count">12</span>
                    </li>
                    <li class="sidebar__item" data-filter="budget">
                        <div class="sidebar__icon"><i class="fas fa-coins"></i></div>
                        <span class="sidebar__text">Budget</span>
                        <span class="sidebar__count">5</span>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="content">
            <div class="banner" id="categoryBanner">
                <img src="https://via.placeholder.com/1200x300/1e1e1e/ffffff?text=All+Jewelry+Collection"
                    alt="All Jewelry Collection" class="banner__image">
            </div>

            <div class="toolbar">
                <div class="toolbar__count" id="resultsCount">24 jewelry pieces found</div>
                <div class="toolbar__filters">
                    <div class="toolbar__filter">
                        <i class="fas fa-sort-amount-down"></i>
                        <select id="sortPrice">
                            <option value="default">Sort by Price</option>
                            <option value="low-high">Price: Low to High</option>
                            <option value="high-low">Price: High to Low</option>
                        </select>
                    </div>
                    <div class="toolbar__filter">
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

            <div class="products" id="productGrid"></div>
        </main>
    </div>

<script src="./script.js"></script>
    <script>
        // Cart Class (same as before)
        class Cart {
            constructor() {
                this.cart = JSON.parse(localStorage.getItem('cart')) || [];
                this.updateCartCount();
            }

            addItem(product) {
                const existingItem = this.cart.find(item => item.id === product.id);

                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    this.cart.push({
                        ...product,
                        quantity: 1
                    });
                }

                this.saveCart();
                this.updateCartCount();
                return existingItem ? existingItem.quantity : 1;
            }

            removeItem(id) {
                this.cart = this.cart.filter(item => item.id !== id);
                this.saveCart();
                this.updateCartCount();
            }

            updateQuantity(id, quantity) {
                const item = this.cart.find(item => item.id === id);
                if (item) {
                    item.quantity = quantity;
                    this.saveCart();
                }
            }

            getCart() {
                return this.cart;
            }

            getTotalItems() {
                return this.cart.reduce((total, item) => total + item.quantity, 0);
            }

            getTotalPrice() {
                return this.cart.reduce((total, item) => total + (item.price * item.quantity), 0);
            }

            clearCart() {
                this.cart = [];
                this.saveCart();
                this.updateCartCount();
            }

            saveCart() {
                localStorage.setItem('cart', JSON.stringify(this.cart));
            }

            updateCartCount() {
                const countElements = document.querySelectorAll('.cart-count');
                const count = this.getTotalItems();

                countElements.forEach(element => {
                    element.textContent = count;
                    element.style.display = count > 0 ? 'block' : 'none';
                });
            }

            isInCart(id) {
                return this.cart.some(item => item.id === id);
            }
        }

        // Initialize cart
        const cart = new Cart();

        // Product Data
        const products = {
            categories: [{
                    id: "necklaces",
                    name: "Necklaces",
                    icon: "fa-gem",
                    count: 6,
                    banner: "./Images/Necklace.png"
                },
                {
                    id: "rings",
                    name: "Rings",
                    icon: "fa-ring",
                    count: 6,
                    banner: "./Images/Rings.png"
                },
                {
                    id: "bracelets",
                    name: "Bracelets",
                    icon: "fa-link",
                    count: 6,
                    banner: "./Images/Bracelets.png"
                },
                {
                    id: "earrings",
                    name: "Earrings",
                    icon: "fa-heart",
                    count: 6,
                    banner: "./Images/Earrings.png"
                }
            ],
            items: [
                // Necklaces
                {
                    id: 1,
                    name: "Diamond Solitaire Necklace",
                    category: "necklaces",
                    price: 1200.00,
                    quality: "premium",
                    badge: "bestseller"
                },
                {
                    id: 2,
                    name: "Pearl Drop Necklace",
                    category: "necklaces",
                    price: 350.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 3,
                    name: "Gold Heart Pendant",
                    category: "necklaces",
                    price: 275.00,
                    quality: "standard"
                },
                {
                    id: 4,
                    name: "Silver Tree of Life",
                    category: "necklaces",
                    price: 85.00,
                    quality: "budget",
                    badge: "sale"
                },
                {
                    id: 5,
                    name: "Sapphire Halo Necklace",
                    category: "necklaces",
                    price: 2200.00,
                    quality: "premium"
                },
                {
                    id: 6,
                    name: "Initial Letter Necklace",
                    category: "necklaces",
                    price: 180.00,
                    quality: "standard"
                },

                // Rings
                {
                    id: 7,
                    name: "Platinum Engagement Ring",
                    category: "rings",
                    price: 5000.00,
                    quality: "premium",
                    badge: "bestseller"
                },
                {
                    id: 8,
                    name: "Stackable Gold Bands",
                    category: "rings",
                    price: 450.00,
                    quality: "standard"
                },
                {
                    id: 9,
                    name: "Birthstone Cocktail Ring",
                    category: "rings",
                    price: 220.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 10,
                    name: "Silver Signet Ring",
                    category: "rings",
                    price: 95.00,
                    quality: "budget"
                },
                {
                    id: 11,
                    name: "Eternity Diamond Band",
                    category: "rings",
                    price: 3800.00,
                    quality: "premium"
                },
                {
                    id: 12,
                    name: "Art Deco Style Ring",
                    category: "rings",
                    price: 650.00,
                    quality: "standard"
                },

                // Bracelets
                {
                    id: 13,
                    name: "Diamond Tennis Bracelet",
                    category: "bracelets",
                    price: 3200.00,
                    quality: "premium"
                },
                {
                    id: 14,
                    name: "Charm Bracelet",
                    category: "bracelets",
                    price: 150.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 15,
                    name: "Pearl Strand Bracelet",
                    category: "bracelets",
                    price: 180.00,
                    quality: "standard"
                },
                {
                    id: 16,
                    name: "Bangle Set",
                    category: "bracelets",
                    price: 75.00,
                    quality: "budget",
                    badge: "sale"
                },
                {
                    id: 17,
                    name: "Diamond Hinged Bangle",
                    category: "bracelets",
                    price: 2800.00,
                    quality: "premium"
                },
                {
                    id: 18,
                    name: "Leather Wrap Bracelet",
                    category: "bracelets",
                    price: 120.00,
                    quality: "standard"
                },

                // Earrings
                {
                    id: 19,
                    name: "Diamond Stud Earrings",
                    category: "earrings",
                    price: 1500.00,
                    quality: "premium",
                    badge: "bestseller"
                },
                {
                    id: 20,
                    name: "Pearl Drop Earrings",
                    category: "earrings",
                    price: 320.00,
                    quality: "standard"
                },
                {
                    id: 21,
                    name: "Gold Hoop Earrings",
                    category: "earrings",
                    price: 180.00,
                    quality: "standard",
                    badge: "new"
                },
                {
                    id: 22,
                    name: "Silver Stud Earrings",
                    category: "earrings",
                    price: 65.00,
                    quality: "budget"
                },
                {
                    id: 23,
                    name: "Chandelier Earrings",
                    category: "earrings",
                    price: 420.00,
                    quality: "standard"
                },
                {
                    id: 24,
                    name: "Huggie Hoop Earrings",
                    category: "earrings",
                    price: 290.00,
                    quality: "standard"
                }
            ]
        };

        // DOM Elements
        const categoryList = document.getElementById('categoryList'),
            productGrid = document.getElementById('productGrid'),
            resultsCount = document.getElementById('resultsCount'),
            sortPrice = document.getElementById('sortPrice'),
            sortQuality = document.getElementById('sortQuality'),
            categoryBanner = document.getElementById('categoryBanner'),
            allProductsCountElement = document.getElementById('allProductsCount');

        let currentCategory = 'all',
            currentSort = 'default',
            currentQuality = 'default';

        // Initialize the page
        function init() {
            renderCategories();
            renderProducts();
            setupEventListeners();
        }

        // Render category list
        function renderCategories() {
            categoryList.innerHTML = products.categories.map(category => `
                <li class="sidebar__item" data-category="${category.id}">
                    <div class="sidebar__icon"><i class="fas ${category.icon}"></i></div>
                    <span class="sidebar__text">${category.name}</span>
                    <span class="sidebar__count">${category.count}</span>
                </li>
            `).join('');
        }

        // Render products
        function renderProducts() {
            let filteredProducts = [...products.items];

            // Filter by category
            if (currentCategory !== 'all') {
                filteredProducts = filteredProducts.filter(product => product.category === currentCategory);
            } else {
                // For "All" view, show a curated selection
                let selectedAllProducts = [];
                const categoryOrder = ["necklaces", "rings", "bracelets", "earrings"];

                categoryOrder.forEach(catId => {
                    const productsInCategory = products.items.filter(product => product.category === catId);
                    if (productsInCategory.length > 0) {
                        selectedAllProducts.push(productsInCategory[0]);
                    }
                });

                let remainingNeeded = 8 - selectedAllProducts.length;
                if (remainingNeeded > 0) {
                    const currentProductIds = new Set(selectedAllProducts.map(p => p.id));
                    const otherProducts = products.items.filter(p => !currentProductIds.has(p.id));
                    selectedAllProducts.push(...otherProducts.slice(0, remainingNeeded));
                }

                filteredProducts = selectedAllProducts;
            }

            // Filter by quality
            if (currentQuality !== 'default') {
                filteredProducts = filteredProducts.filter(product => product.quality === currentQuality);
            }

            // Sort products
            if (currentSort === 'low-high') {
                filteredProducts.sort((a, b) => a.price - b.price);
            } else if (currentSort === 'high-low') {
                filteredProducts.sort((a, b) => b.price - a.price);
            }

            // Update results count
            resultsCount.textContent = `${filteredProducts.length} jewelry pieces found`;

            // Render products
            productGrid.innerHTML = filteredProducts.length === 0 ?
                `<div class="products__empty">No jewelry matches your filters. Try adjusting your search criteria.</div>` :
                filteredProducts.map((product, index) => {
                    const delay = index * 0.1;
                    let badgeHtml = '';

                    if (product.badge) {
                        badgeHtml = `<span class="product__badge product__badge--${product.badge}">${product.badge}</span>`;
                    }

                    const isInCart = cart.isInCart(product.id);
                    const buttonClass = isInCart ? 'product__button added' : 'product__button';
                    const buttonText = isInCart ? 'Added to Cart' : 'Add to Cart';

                    return `
                        <div class="product" style="animation-delay: ${delay}s">
                            ${badgeHtml}
                            <div class="product__media">
                                <img src="https://via.placeholder.com/300/1e1e1e/ffffff?text=${product.name.split(' ').join('+')}" 
                                     alt="${product.name}" class="product__image">
                            </div>
                            <div class="product__details">
                                <span class="product__category">${product.category}</span>
                                <h3 class="product__title">${product.name}</h3>
                                <p class="product__description">${product.description || 'Beautiful jewelry piece for any occasion'}</p>
                                <div class="product__footer">
                                    <div class="product__price">
                                        $${product.price.toFixed(2)}
                                    </div>
                                    <button class="${buttonClass}" onclick="addToCart(${product.id})">
                                        <i class="fas ${isInCart ? 'fa-check' : 'fa-shopping-bag'}"></i> ${buttonText}
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                }).join('');

            updateCategoryBanner();
        }

        // Update category banner
        function updateCategoryBanner() {
            if (currentCategory === 'all') {
                categoryBanner.innerHTML = `
                    <img src="https://via.placeholder.com/1200x300/1e1e1e/ffffff?text=All+Jewelry+Collection" 
                         alt="All Jewelry" class="banner__image">
                `;
            } else {
                const category = products.categories.find(cat => cat.id === currentCategory);
                if (category) {
                    categoryBanner.innerHTML = `
                        <img src="${category.banner}" alt="${category.name}" class="banner__image">
                    `;
                }
            }
        }

        // Set up event listeners
        function setupEventListeners() {
            // Category filter
            document.querySelectorAll('.sidebar__item[data-category]').forEach(item => {
                item.addEventListener('click', function() {
                    document.querySelectorAll('.sidebar__item[data-category]').forEach(i =>
                        i.classList.remove('sidebar__item--active'));
                    this.classList.add('sidebar__item--active');
                    currentCategory = this.dataset.category;
                    renderProducts();
                });
            });

            // Quality filter
            document.querySelectorAll('.sidebar__item[data-filter]').forEach(item => {
                item.addEventListener('click', function() {
                    document.querySelectorAll('.sidebar__item[data-filter]').forEach(i =>
                        i.classList.remove('sidebar__item--active'));
                    this.classList.add('sidebar__item--active');
                    currentQuality = this.dataset.filter === 'all' ? 'default' : this.dataset.filter;
                    renderProducts();
                });
            });

            // Sort by price
            sortPrice.addEventListener('change', () => {
                currentSort = sortPrice.value;
                renderProducts();
            });

            // Filter by quality
            sortQuality.addEventListener('change', () => {
                currentQuality = sortQuality.value === 'default' ? 'default' : sortQuality.value;
                renderProducts();
            });
        }

        // Add to cart function (global)
        function addToCart(productId) {
            const product = products.items.find(p => p.id === productId);
            if (product) {
                const quantity = cart.addItem(product);

                // Update the button appearance
                const buttons = document.querySelectorAll(`button[onclick="addToCart(${productId})"]`);
                buttons.forEach(button => {
                    button.classList.add('added');
                    button.innerHTML = `<i class="fas fa-check"></i> Added to Cart`;
                });

                // Show a quick notification
                showCartNotification(product.name);
            }
        }

        // Show add to cart notification
        function showCartNotification(productName) {
            const notification = document.createElement('div');
            notification.className = 'cart-notification';
            notification.innerHTML = `
                <i class="fas fa-check-circle"></i>
                <span>${productName} added to cart</span>
            `;

            document.body.appendChild(notification);

            setTimeout(() => {
                notification.classList.add('show');
            }, 10);

            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', init);
    </script>

   
</body>

</html>