  
        const products = {
            "categories": [
                {
                    "id": "lips",
                    "name": "Lips",
                   "icon": "fa-kiss-wink-heart", 
                    "count": 18,
                    "description": "Luxurious lip products for every occasion",
                    "banner": "https://via.placeholder.com/150/ff9bb3/ffffff?text=Lips"
                },
                {
                    "id": "face",
                    "name": "Face",
                    "icon": "fa-spa",
                    "count": 12,
                    "description": "Flawless complexion products for radiant skin",
                    "banner": "https://via.placeholder.com/150/7ec4cf/ffffff?text=Face"
                },
                {
                    "id": "eyes",
                    "name": "Eyes",
                    "icon": "fa-eye",
                    "count": 10,
                    "description": "Eye-catching products to define and enhance",
                    "banner": "https://via.placeholder.com/150/b399d4/ffffff?text=Eyes"
                },
                {
                    "id": "palettes",
                    "name": "Palettes",
                    "icon": "fa-palette",
                    "count": 10,
                    "description": "Curated color collections for creative looks",
                    "banner": "https://via.placeholder.com/150/d4af37/ffffff?text=Palettes"
                },
                {
                    "id": "brushes",
                    "name": "Brushes",
                    "icon": "fa-paint-brush",
                    "count": 10,
                    "description": "Professional tools for perfect application",
                    "banner": "https://via.placeholder.com/150/ffffff/333333?text=Brushes"
                }
            ],
            "items": [
                // Lips Category - 10 products
                {
                    "id": 1,
                    "name": "Velvet Matte Lipstick",
                    "category": "lips",
                    "type": "lipstick",
                    "description": "Ultra-pigmented matte lipstick with a velvet finish that lasts up to 12 hours.",
                    "price": 32.00,
                    "originalPrice": 38.00,
                    "quality": "premium",
                    "rating": 4.8,
                    "reviewCount": 124,
                    "badge": "bestseller",
                    "image": "lipstick-1.png"
                },
                {
                    "id": 2,
                    "name": "Plumping Lip Gloss",
                    "category": "lips",
                    "type": "gloss",
                    "description": "Hydrating gloss with a plumping effect and subtle shimmer for fuller lips.",
                    "price": 24.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 89,
                    "badge": "new",
                    "image": "gloss-1.png"
                },
                {
                    "id": 3,
                    "name": "Lip Liner Set",
                    "category": "lips",
                    "type": "liner",
                    "description": "Set of 3 long-wearing lip liners in nude, rose and berry shades.",
                    "price": 28.00,
                    "originalPrice": 35.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 67,
                    "badge": "sale",
                    "image": "liner-set.png"
                },
                {
                    "id": 4,
                    "name": "Hydrating Lip Balm",
                    "category": "lips",
                    "type": "balm",
                    "description": "Moisturizing balm with SPF 15 and a hint of color for everyday wear.",
                    "price": 18.00,
                    "quality": "budget",
                    "rating": 4.3,
                    "reviewCount": 42,
                    "image": "balm-1.png"
                },
                {
                    "id": 5,
                    "name": "Liquid Lipstick Duo",
                    "category": "lips",
                    "type": "lipstick",
                    "description": "Two full-size liquid lipsticks in our most popular shades with matte finish.",
                    "price": 45.00,
                    "quality": "premium",
                    "rating": 4.9,
                    "reviewCount": 156,
                    "badge": "bestseller",
                    "image": "liquid-lip-duo.png"
                },
                {
                    "id": 6,
                    "name": "Lip Stain",
                    "category": "lips",
                    "type": "stain",
                    "description": "Long-lasting lip stain that provides vibrant color without drying.",
                    "price": 26.00,
                    "quality": "standard",
                    "rating": 4.4,
                    "reviewCount": 78,
                    "image": "stain-1.png"
                },
                {
                    "id": 7,
                    "name": "Lip Scrub",
                    "category": "lips",
                    "type": "treatment",
                    "description": "Gentle exfoliating scrub with sugar crystals and nourishing oils.",
                    "price": 22.00,
                    "quality": "standard",
                    "rating": 4.7,
                    "reviewCount": 95,
                    "image": "scrub-1.png"
                },
                {
                    "id": 8,
                    "name": "Lip Mask",
                    "category": "lips",
                    "type": "treatment",
                    "description": "Overnight treatment mask to hydrate and repair dry lips.",
                    "price": 20.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 64,
                    "badge": "new",
                    "image": "mask-1.png"
                },
                {
                    "id": 9,
                    "name": "Lip Oil",
                    "category": "lips",
                    "type": "treatment",
                    "description": "Lightweight oil that conditions lips while providing a glossy finish.",
                    "price": 28.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 53,
                    "image": "oil-1.png"
                },
                {
                    "id": 10,
                    "name": "Lip Primer",
                    "category": "lips",
                    "type": "primer",
                    "description": "Prep and prime lips for longer-lasting color application.",
                    "price": 24.00,
                    "quality": "standard",
                    "rating": 4.3,
                    "reviewCount": 47,
                    "image": "primer-1.png"
                },
                
              
                {
                    "id": 11,
                    "name": "Luminous Foundation",
                    "category": "face",
                    "type": "foundation",
                    "description": "Weightless foundation with buildable coverage and a radiant finish.",
                    "price": 48.00,
                    "quality": "premium",
                    "rating": 4.7,
                    "reviewCount": 210,
                    "badge": "new",
                    "image": "foundation-1.png"
                },
                {
                    "id": 12,
                    "name": "Matte Foundation",
                    "category": "face",
                    "type": "foundation",
                    "description": "Oil-free foundation with a natural matte finish that lasts all day.",
                    "price": 42.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 187,
                    "image": "foundation-2.png"
                },
                {
                    "id": 13,
                    "name": "Concealer Palette",
                    "category": "face",
                    "type": "concealer",
                    "description": "Creamy concealer palette with 6 shades for contouring and highlighting.",
                    "price": 36.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 143,
                    "image": "concealer-palette.png"
                },
                {
                    "id": 14,
                    "name": "Blush Duo",
                    "category": "face",
                    "type": "blush",
                    "description": "Pair of complementary blush shades with a silky powder formula.",
                    "price": 28.00,
                    "quality": "standard",
                    "rating": 4.4,
                    "reviewCount": 97,
                    "image": "blush-1.png"
                },
                {
                    "id": 15,
                    "name": "Highlighter Stick",
                    "category": "face",
                    "type": "highlighter",
                    "description": "Creamy highlighter stick for a dewy, luminous glow.",
                    "price": 26.00,
                    "quality": "standard",
                    "rating": 4.8,
                    "reviewCount": 176,
                    "badge": "bestseller",
                    "image": "highlighter-1.png"
                },
                {
                    "id": 16,
                    "name": "Bronzing Powder",
                    "category": "face",
                    "type": "bronzer",
                    "description": "Sun-kissed bronzing powder with a matte finish for natural warmth.",
                    "price": 32.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 124,
                    "image": "bronzer-1.png"
                },
                {
                    "id": 17,
                    "name": "Setting Spray",
                    "category": "face",
                    "type": "setting",
                    "description": "Long-wearing setting spray to lock makeup in place for up to 16 hours.",
                    "price": 30.00,
                    "quality": "standard",
                    "rating": 4.7,
                    "reviewCount": 198,
                    "image": "spray-1.png"
                },
                {
                    "id": 18,
                    "name": "Primer",
                    "category": "face",
                    "type": "primer",
                    "description": "Smoothing primer that minimizes pores and extends makeup wear.",
                    "price": 34.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 112,
                    "image": "primer-2.png"
                },
                {
                    "id": 19,
                    "name": "Compact Powder",
                    "category": "face",
                    "type": "powder",
                    "description": "Lightweight pressed powder for touch-ups and shine control.",
                    "price": 24.00,
                    "quality": "budget",
                    "rating": 4.2,
                    "reviewCount": 86,
                    "image": "powder-1.png"
                },
                {
                    "id": 20,
                    "name": "BB Cream",
                    "category": "face",
                    "type": "tinted",
                    "description": "All-in-one moisturizer, primer and light coverage foundation.",
                    "price": 28.00,
                    "quality": "budget",
                    "rating": 4.3,
                    "reviewCount": 94,
                    "image": "bbcream-1.png"
                },
                
              
                {
                    "id": 21,
                    "name": "Lash Paradise Mascara",
                    "category": "eyes",
                    "type": "mascara",
                    "description": "Volumizing mascara that delivers dramatic lash impact without clumping.",
                    "price": 26.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 189,
                    "image": "mascara-1.png"
                },
                {
                    "id": 22,
                    "name": "Eyeliner Pen",
                    "category": "eyes",
                    "type": "eyeliner",
                    "description": "Precision liquid eyeliner pen with a fine tip for sharp lines.",
                    "price": 22.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 134,
                    "image": "eyeliner-1.png"
                },
                {
                    "id": 23,
                    "name": "Brow Pomade",
                    "category": "eyes",
                    "type": "brows",
                    "description": "Creamy pomade for defined, long-lasting lines that stay in place.",
                    "price": 24.00,
                    "quality": "standard",
                    "rating": 4.7,
                    "reviewCount": 156,
                    "image": "pomade-1.png"
                },
                {
                    "id": 24,
                    "name": "Eyeshadow Primer",
                    "category": "eyes",
                    "type": "primer",
                    "description": "Base that intensifies eyeshadow color and prevents creasing.",
                    "price": 20.00,
                    "quality": "standard",
                    "rating": 4.4,
                    "reviewCount": 87,
                    "image": "primer-3.png"
                },
                {
                    "id": 25,
                    "name": "False Lashes",
                    "category": "eyes",
                    "type": "lashes",
                    "description": "Natural-looking false lashes that add volume and length.",
                    "price": 18.00,
                    "quality": "budget",
                    "rating": 4.3,
                    "reviewCount": 76,
                    "image": "lashes-1.png"
                },
                {
                    "id": 26,
                    "name": "Lash Serum",
                    "category": "eyes",
                    "type": "treatment",
                    "description": "Conditioning serum to promote longer, thicker-looking lashes.",
                    "price": 58.00,
                    "quality": "premium",
                    "rating": 4.8,
                    "reviewCount": 203,
                    "badge": "bestseller",
                    "image": "serum-1.png"
                },
                {
                    "id": 27,
                    "name": "Eye Cream",
                    "category": "eyes",
                    "type": "treatment",
                    "description": "Rich cream that hydrates and reduces the appearance of fine lines.",
                   "price": 42.00,
                    "quality": "premium",
                    "rating": 4.6,
                    "reviewCount": 145,
                    "image": "cream-1.png"
                },
                {
                    "id": 28,
                    "name": "Glitter Eyeshadow",
                    "category": "eyes",
                    "type": "eyeshadow",
                    "description": "Highly pigmented glitter shadow for bold, sparkling eye looks.",
                    "price": 20.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 98,
                    "badge": "new",
                    "image": "glitter-1.png"
                },
                {
                    "id": 29,
                    "name": "Brow Pencil",
                    "category": "eyes",
                    "type": "brows",
                    "description": "Fine-tipped pencil for natural-looking brow definition.",
                    "price": 18.00,
                    "quality": "budget",
                    "rating": 4.2,
                    "reviewCount": 67,
                    "image": "pencil-1.png"
                },
                {
                    "id": 30,
                    "name": "Eye Makeup Remover",
                    "category": "eyes",
                    "type": "remover",
                    "description": "Gentle dual-phase formula that dissolves even waterproof makeup.",
                    "price": 22.00,
                    "quality": "standard",
                    "rating": 4.4,
                    "reviewCount": 112,
                    "image": "remover-1.png"
                },
                
               
                {
                    "id": 31,
                    "name": "Golden Hour Palette",
                    "category": "palettes",
                    "type": "eyeshadow",
                    "description": "Warm-toned eyeshadow palette with 12 shades from matte to metallic.",
                    "price": 58.00,
                    "quality": "premium",
                    "rating": 4.9,
                    "reviewCount": 245,
                    "badge": "bestseller",
                    "image": "palette-1.png"
                },
                {
                    "id": 32,
                    "name": "Nude Essentials Palette",
                    "category": "palettes",
                    "type": "eyeshadow",
                    "description": "Everyday neutral palette with 8 matte and shimmer shades.",
                    "price": 42.00,
                    "quality": "standard",
                    "rating": 4.7,
                    "reviewCount": 187,
                    "image": "palette-2.png"
                },
                {
                    "id": 33,
                    "name": "Blush & Highlight Palette",
                    "category": "palettes",
                    "type": "face",
                    "description": "6 coordinating blush and highlighter shades for a radiant glow.",
                    "price": 48.00,
                    "quality": "premium",
                    "rating": 4.8,
                    "reviewCount": 156,
                    "badge": "new",
                    "image": "palette-3.png"
                },
                {
                    "id": 34,
                    "name": "Bold & Bright Palette",
                    "category": "palettes",
                    "type": "eyeshadow",
                    "description": "Vibrant color palette with 15 highly pigmented shades.",
                    "price": 52.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 134,
                    "image": "palette-4.png"
                },
                {
                    "id": 35,
                    "name": "Contour Kit",
                    "category": "palettes",
                    "type": "face",
                    "description": "6-shade palette with contour, bronze and highlight powders.",
                    "price": 38.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 112,
                    "image": "palette-5.png"
                },
                {
                    "id": 36,
                    "name": "Mini Lipstick Set",
                    "category": "palettes",
                    "type": "lips",
                    "description": "Set of 5 mini lipsticks in our best-selling nude shades.",
                    "price": 45.00,
                    "quality": "standard",
                    "rating": 4.7,
                    "reviewCount": 178,
                    "badge": "limited",
                    "image": "palette-6.png"
                },
                {
                    "id": 37,
                    "name": "Smoky Eye Palette",
                    "category": "palettes",
                    "type": "eyeshadow",
                    "description": "8 deep, smoky shades for creating dramatic evening looks.",
                    "price": 44.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 143,
                    "image": "palette-7.png"
                },
                {
                    "id": 38,
                    "name": "Pastel Dreams Palette",
                    "category": "palettes",
                    "type": "eyeshadow",
                    "description": "Soft pastel shades with a mix of matte and shimmer finishes.",
                    "price": 46.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 98,
                    "badge": "new",
                    "image": "palette-8.png"
                },
                {
                    "id": 39,
                    "name": "Travel Essentials Kit",
                    "category": "palettes",
                    "type": "mixed",
                    "description": "Compact palette with eyeshadows, blush and lip colors for travel.",
                    "price": 54.00,
                    "originalPrice": 60.00,
                    "quality": "premium",
                    "rating": 4.8,
                    "reviewCount": 167,
                    "image": "palette-9.png"
                },
                {
                    "id": 40,
                    "name": "Matte Basics Palette",
                    "category": "palettes",
                    "type": "eyeshadow",
                    "description": "All-matte palette with 10 essential neutral shades.",
                    "price": 36.00,
                    "quality": "standard",
                    "rating": 4.4,
                    "reviewCount": 87,
                    "image": "palette-10.png"
                },
                
                {
                    "id": 41,
                    "name": "Foundation Brush",
                    "category": "brushes",
                    "type": "face",
                    "description": "Dense, flat-top brush for flawless foundation application.",
                    "price": 32.00,
                    "quality": "premium",
                    "rating": 4.7,
                    "reviewCount": 145,
                    "image": "brush-1.png"
                },
                {
                    "id": 42,
                    "name": "Blending Brush Set",
                    "category": "brushes",
                    "type": "eyes",
                    "description": "Set of 3 blending brushes for seamless eyeshadow application.",
                    "price": 38.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 132,
                    "badge": "bestseller",
                    "image": "brush-2.png"
                },
                {
                    "id": 43,
                    "name": "Kabuki Brush",
                    "category": "brushes",
                    "type": "face",
                    "description": "Ultra-soft kabuki brush for powder and liquid foundation.",
                    "price": 28.00,
                    "quality": "standard",
                    "rating": 4.5,
                    "reviewCount": 98,
                    "image": "brush-3.png"
                },
                {
                    "id": 44,
                    "name": "Angled Contour Brush",
                    "category": "brushes",
                    "type": "face",
                    "description": "Precision brush for sculpted and defined cheekbones.",
                    "price": 24.00,
                    "quality": "standard",
                    "rating": 4.4,
                    "reviewCount": 87,
                    "image": "brush-4.png"
                },
                {
                    "id": 45,
                    "name": "Concealer Brush",
                    "category": "brushes",
                    "type": "face",
                    "description": "Small, tapered brush for precise concealer application.",
                    "price": 18.00,
                    "quality": "budget",
                    "rating": 4.2,
                    "reviewCount": 76,
                    "image": "brush-5.png"
                },
                {
                    "id": 46,
                    "name": "Professional Brush Set",
                    "category": "brushes",
                    "type": "mixed",
                    "description": "Complete 12-piece brush set for face and eye application.",
                    "price": 120.00,
                    "originalPrice": 150.00,
                    "quality": "premium",
                    "rating": 4.9,
                    "reviewCount": 210,
                    "badge": "sale",
                    "image": "brush-6.png"
                },
                {
                    "id": 47,
                    "name": "Lip Brush",
                    "category": "brushes",
                    "type": "lips",
                    "description": "Fine-tipped brush for precise lipstick and lip liner application.",
                    "price": 16.00,
                    "quality": "budget",
                    "rating": 4.3,
                    "reviewCount": 65,
                    "image": "brush-7.png"
                },
                {
                    "id": 48,
                    "name": "Brow Brush & Spoolie",
                    "category": "brushes",
                    "type": "brows",
                    "description": "Dual-ended brush for brow powder application and grooming.",
                    "price": 20.00,
                    "quality": "standard",
                    "rating": 4.4,
                    "reviewCount": 92,
                    "image": "brush-8.png"
                },
                {
                    "id": 49,
                    "name": "Fan Brush",
                    "category": "brushes",
                    "type": "face",
                    "description": "Lightweight fan brush for subtle highlighting and dusting.",
                    "price": 22.00,
                    "quality": "standard",
                    "rating": 4.3,
                    "reviewCount": 78,
                    "image": "brush-9.png"
                },
                {
                    "id": 50,
                    "name": "Travel Brush Set",
                    "category": "brushes",
                    "type": "mixed",
                    "description": "Compact 5-piece travel set with protective case.",
                    "price": 45.00,
                    "quality": "standard",
                    "rating": 4.6,
                    "reviewCount": 124,
                    "badge": "new",
                    "image": "brush-10.png"
                }
            ]
        };
  
        const categoryList = document.getElementById('categoryList');
        const productGrid = document.getElementById('productGrid');
        const resultsCount = document.getElementById('resultsCount');
        const sortPrice = document.getElementById('sortPrice');
        const sortQuality = document.getElementById('sortQuality');
        const searchInput = document.getElementById('searchInput');
        const categoryBanner = document.getElementById('categoryBanner');
     
        let currentCategory = 'all';
        let currentSort = 'default';
        let currentQuality = 'default';
        let currentSearch = '';
     
        function init() {
            renderCategories();
            renderProducts();
            setupEventListeners();
        }

        function renderCategories() {
            let html = '';
            products.categories.forEach(category => {
                html += `
                    <li class="category-item" data-category="${category.id}">
                        <div class="category-icon"><i class="fas ${category.icon}"></i></div>
                        <span class="category-name">${category.name}</span>
                        <span class="category-count">${category.count}</span>
                    </li>
                `;
            });
            categoryList.innerHTML = html;
        }
        function renderProducts() {
            let filteredProducts = [...products.items];
           
            if (currentCategory !== 'all') {
                filteredProducts = filteredProducts.filter(product => product.category === currentCategory);
            }
            
          
            if (currentQuality !== 'default') {
                filteredProducts = filteredProducts.filter(product => product.quality === currentQuality);
            }
            
            if (currentSearch) {
                const searchTerm = currentSearch.toLowerCase();
                filteredProducts = filteredProducts.filter(product => 
                    product.name.toLowerCase().includes(searchTerm) || 
                    product.description.toLowerCase().includes(searchTerm)
                );
            }
            
            const priceRange = document.querySelector('input[name="price-range"]:checked').id;
            if (priceRange !== 'all-prices') {
                switch (priceRange) {
                    case 'under-25':
                        filteredProducts = filteredProducts.filter(product => product.price < 25);
                        break;
                    case '25-50':
                        filteredProducts = filteredProducts.filter(product => product.price >= 25 && product.price <= 50);
                        break;
                    case 'over-50':
                        filteredProducts = filteredProducts.filter(product => product.price > 50);
                        break;
                }
            }
            
            const ratingFilter = document.querySelector('input[name="rating"]:checked').id;
            if (ratingFilter !== 'all-ratings') {
                const minRating = ratingFilter === '4-stars' ? 4 : 4.5;
                filteredProducts = filteredProducts.filter(product => product.rating >= minRating);
            }
            
            const availabilityFilter = document.querySelector('input[name="availability"]:checked').id;
            if (availabilityFilter !== 'all-items') {
                switch (availabilityFilter) {
                    case 'bestsellers':
                        filteredProducts = filteredProducts.filter(product => product.badge === 'bestseller');
                        break;
                    case 'new-arrivals':
                        filteredProducts = filteredProducts.filter(product => product.badge === 'new');
                        break;
                }
            }
            
            if (currentSort === 'low-high') {
                filteredProducts.sort((a, b) => a.price - b.price);
            } else if (currentSort === 'high-low') {
                filteredProducts.sort((a, b) => b.price - a.price);
            }
        
            resultsCount.textContent = `${filteredProducts.length} products found`;
            
            let html = '';
            if (filteredProducts.length === 0) {
                html = `<div class="no-results">No products match your filters. Try adjusting your search criteria.</div>`;
            } else {
                filteredProducts.forEach((product, index) => {
                    const delay = index * 0.1;
                    
                    let badgeHtml = '';
                    if (product.badge) {
                        let badgeClass = '';
                        if (product.badge === 'bestseller') badgeClass = 'badge-premium';
                        else if (product.badge === 'new') badgeClass = 'badge-new';
                        else if (product.badge === 'sale') badgeClass = 'badge-sale';
                        else if (product.badge === 'limited') badgeClass = 'badge-limited';
                        
                        badgeHtml = `<span class="product-badge ${badgeClass}">${product.badge}</span>`;
                    }
                    
                    let originalPriceHtml = '';
                    if (product.originalPrice) {
                        originalPriceHtml = `<span class="original">$${product.originalPrice.toFixed(2)}</span>`;
                    }
                    let ratingStars = '';
                    const fullStars = Math.floor(product.rating);
                    const hasHalfStar = product.rating % 1 >= 0.5;
                    
                    for (let i = 0; i < 5; i++) {
                        if (i < fullStars) {
                            ratingStars += '<i class="fas fa-star"></i>';
                        } else if (i === fullStars && hasHalfStar) {
                            ratingStars += '<i class="fas fa-star-half-alt"></i>';
                        } else {
                            ratingStars += '<i class="far fa-star"></i>';
                        }
                    }
                    
                    html += `
                        <div class="product-card" style="animation-delay: ${delay}s">
                            ${badgeHtml}
                            <div class="product-media">
                                <img src="https://via.placeholder.com/300/1e1e1e/ffffff?text=${product.name.split(' ').join('+')}" alt="${product.name}" class="product-image">
                            </div>
                            <div class="product-details">
                                <span class="product-category">${product.category}</span>
                                <h3 class="product-title">${product.name}</h3>
                                <p class="product-description">${product.description}</p>
                                <div class="product-rating">
                                    ${ratingStars}
                                    <span class="review-count">(${product.reviewCount})</span>
                                </div>
                                <div class="product-footer">
                                    <div class="product-price">
                                        ${originalPriceHtml}
                                        $${product.price.toFixed(2)}
                                    </div>
                                    <button class="add-to-cart">
                                        <i class="fas fa-shopping-bag"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });
            }
            
            productGrid.innerHTML = html;
            
            updateCategoryBanner();
        }
        function updateCategoryBanner() {
            if (currentCategory === 'all') {
                categoryBanner.innerHTML = `
                    <div class="banner-content">
                        <h2>All Products</h2>
                        <p>Discover our complete collection of luxury beauty products</p>
                    </div>
                    <img src="https://via.placeholder.com/150" alt="Category Banner" class="banner-image">
                `;
            } else {
                const category = products.categories.find(cat => cat.id === currentCategory);
                if (category) {
                    categoryBanner.innerHTML = `
                        <div class="banner-content">
                            <h2>${category.name}</h2>
                            <p>${category.description}</p>
                        </div>
                        <img src="${category.banner}" alt="${category.name}" class="banner-image">
                    `;
                }
            }
        }
        function setupEventListeners() {
            document.querySelectorAll('.category-item[data-category]').forEach(item => {
                item.addEventListener('click', function() {
                    document.querySelectorAll('.category-item').forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    currentCategory = this.dataset.category;
                    renderProducts();
                });
            });
            
      
            document.querySelectorAll('.category-item[data-filter]').forEach(item=> {
                item.addEventListener('click', function() {
                    document.querySelectorAll('.category-item[data-filter]').forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    currentQuality = this.dataset.filter === 'all' ? 'default' : this.dataset.filter;
                    renderProducts();
                })
            });
            
            sortPrice.addEventListener('change', function() {
                currentSort = this.value;
                renderProducts();
            });
            
            sortQuality.addEventListener('change', function() {
                currentQuality = this.value === 'default' ? 'default' : this.value;
                renderProducts();
            });
            
            // Search functionality
            searchInput.addEventListener('input', function() {
                currentSearch = this.value;
                renderProducts();
            });
            
            document.querySelectorAll('input[name="price-range"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    renderProducts();
                });
            });
            document.querySelectorAll('input[name="rating"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    renderProducts();
                });
            });
            
            document.querySelectorAll('input[name="availability"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    renderProducts();
                });
            });
        }
        
        document.addEventListener('DOMContentLoaded', init);
 