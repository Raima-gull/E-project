function renderProducts() {
    let filteredProducts = [...products.items];
    
    if (currentCategory !== 'all') {
        // Filter by selected category
        filteredProducts = filteredProducts.filter(product => product.category === currentCategory);
    } else {
        // For "All Jewelry", show one product from each category first
        let selectedProducts = [];
        const categories = ["necklaces", "rings", "bracelets", "earrings"];
        
        // Get one product from each category
        categories.forEach(category => {
            const productsInCategory = products.items.filter(p => p.category === category);
            if (productsInCategory.length > 0) {
                selectedProducts.push(productsInCategory[0]);
            }
        });
        
        // If we still need more products to reach 9, add more from any category
        const remaining = 9 - selectedProducts.length;
        if (remaining > 0) {
            // Get all product IDs we've already selected
            const selectedIds = new Set(selectedProducts.map(p => p.id));
            // Find products not already selected
            const otherProducts = products.items.filter(p => !selectedIds.has(p.id));
            // Add the remaining needed products
            selectedProducts.push(...otherProducts.slice(0, remaining));
        }
        
        filteredProducts = selectedProducts;
    }
    
    // Apply quality filter if set
    if (currentQuality !== 'default') {
        filteredProducts = filteredProducts.filter(product => product.quality === currentQuality);
    }
    
    // Apply sorting if set
    if (currentSort === 'low-high') {
        filteredProducts.sort((a, b) => a.price - b.price);
    } else if (currentSort === 'high-low') {
        filteredProducts.sort((a, b) => b.price - a.price);
    }
    
    // Update results count
    resultsCount.textContent = `${filteredProducts.length} jewelry pieces found`;
    
    // Render products or show "no results" message
    productGrid.innerHTML = filteredProducts.length === 0 ?
        `<div class="products__empty">No jewelry matches your filters. Try adjusting your search criteria.</div>` :
        filteredProducts.map((product, index) => {
            const delay = index * 0.1;
            let badgeHtml = '';
            if (product.badge) {
                badgeHtml = `<span class="product__badge">${product.badge}</span>`;
            }
            const originalPriceHtml = product.originalPrice ?
                `<span class="product__original-price">$${product.originalPrice.toFixed(2)}</span>` : '';
            
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
                        <p class="product__description">${product.description}</p>
                        <div class="product__footer">
                            <div class="product__price">
                                ${originalPriceHtml}
                                $${product.price.toFixed(2)}
                            </div>
                            <button class="product__button">
                                <i class="fas fa-shopping-bag"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            `;
        }).join('');
    
    updateCategoryBanner();
}