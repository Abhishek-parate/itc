<?php
/**
 * Header Component - Indian Traders Corp
 * Live Search reads from localStorage('itc_products') or fetches products.json
 * Search dropdown → product_details.php?slug= (DB se data fetch hoga)
 */
?>

<!-- Header Section -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">

            <!-- Logo Section -->
            <div class="flex items-center space-x-3 flex-shrink-0">
                <img src="./assets/images/ITC LOGO.png" alt="Indian Traders Corp Logo" class="h-12 w-12">
                <div>
                    <h1 class="text-xl font-bold text-primary">Indian Traders Corp</h1>
                    <p class="text-xs text-gray-600">Since 1969</p>
                </div>
            </div>

            <!-- SEARCH BAR - DESKTOP -->
            <div class="hidden lg:flex items-center flex-1 max-w-xl mx-8 relative" id="desktopSearchWrapper">
                <div class="relative w-full group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                        <svg class="w-5 h-5 text-gray-400 group-focus-within:text-secondary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search for products, categories..."
                        autocomplete="off"
                        class="w-full pl-12 pr-24 py-3 bg-gray-50 border-2 border-gray-200 rounded-full text-gray-700 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-secondary focus:ring-4 focus:ring-secondary/10 transition-all duration-300 ease-in-out"
                    >
                </div>

                <!-- Desktop Dropdown Results — PROFESSIONAL ECOMMERCE STYLE -->
                <div id="searchDropdown"
                     class="hidden absolute top-full left-0 right-0 mt-3 bg-white rounded-2xl z-[9999] overflow-hidden"
                     style="box-shadow: 0 20px 60px rgba(0,0,0,0.15); border: 1px solid #e8edf5;">
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="index.php" class="text-gray-700 hover:text-secondary font-semibold transition">Home</a>

                <!-- About Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-secondary font-semibold transition flex items-center space-x-1">
                        <span>About</span>
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2 z-50">
                        <div class="py-2">
                            <a href="documentation.php" class="block px-6 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-secondary/10 hover:to-red-50 hover:text-secondary font-medium transition-all border-l-4 border-transparent hover:border-secondary">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    <span>Documentation</span>
                                </div>
                            </a>
                            <a href="industry-we-serve.php" class="block px-6 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-secondary/10 hover:to-red-50 hover:text-secondary font-medium transition-all border-l-4 border-transparent hover:border-secondary">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    <span>Industry We Serve</span>
                                </div>
                            </a>
                            <a href="why-itc.php" class="block px-6 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-secondary/10 hover:to-red-50 hover:text-secondary font-medium transition-all border-l-4 border-transparent hover:border-secondary">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                    <span>Why ITC</span>
                                </div>
                            </a>
                            <a href="mission-vision.php" class="block px-6 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-secondary/10 hover:to-red-50 hover:text-secondary font-medium transition-all border-l-4 border-transparent hover:border-secondary rounded-b-lg">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    <span>Mission & Vision</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="products.php" class="text-gray-700 hover:text-secondary font-semibold transition">Products</a>
                <a href="contact.php"  class="text-gray-700 hover:text-secondary font-semibold transition">Contact</a>

                <button onclick="openQuoteModal()" class="bg-gradient-to-r from-secondary to-red-700 text-white px-6 py-2 rounded-lg font-bold hover:from-red-700 hover:to-secondary transition-all transform hover:scale-105 shadow-lg">
                    Get Quote
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-4">

            <!-- Mobile Search Bar -->
            <div class="relative w-full" id="mobileSearchWrapper">
                <div class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="mobileSearchInput"
                        placeholder="Search products..."
                        autocomplete="off"
                        class="w-full pl-12 pr-16 py-3 bg-gray-50 border-2 border-gray-200 rounded-full text-gray-700 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-secondary focus:ring-4 focus:ring-secondary/20 transition-all duration-300"
                    >
                    <button onclick="doMobileSearch()" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-secondary to-red-700 text-white p-2 rounded-full hover:shadow-lg transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
                <!-- Mobile Dropdown Results -->
                <div id="mobileSearchDropdown"
                     class="hidden absolute top-full left-0 right-0 mt-2 bg-white rounded-2xl z-[9999] overflow-hidden"
                     style="box-shadow: 0 20px 60px rgba(0,0,0,0.15); border: 1px solid #e8edf5; max-height: 380px; overflow-y: auto;">
                </div>
            </div>

            <a href="index.php" class="block text-gray-700 hover:text-secondary font-semibold transition">Home</a>

            <!-- Mobile About Dropdown -->
            <div>
                <button id="mobileAboutBtn" class="w-full text-left text-gray-700 hover:text-secondary font-semibold transition flex items-center justify-between">
                    <span>About</span>
                    <svg id="mobileAboutIcon" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobileAboutMenu" class="hidden mt-2 ml-4 space-y-2 border-l-2 border-secondary/30 pl-4">
                    <a href="documentation.php"     class="block text-gray-600 hover:text-secondary font-medium transition py-1">📄 Documentation</a>
                    <a href="industry-we-serve.php"  class="block text-gray-600 hover:text-secondary font-medium transition py-1">🏭 Industry We Serve</a>
                    <a href="why-itc.php"            class="block text-gray-600 hover:text-secondary font-medium transition py-1">⭐ Why ITC</a>
                    <a href="mission-vision.php"     class="block text-gray-600 hover:text-secondary font-medium transition py-1">👁️ Mission & Vision</a>
                </div>
            </div>

            <a href="products.php" class="block text-gray-700 hover:text-secondary font-semibold transition">Products</a>
            <a href="contact.php"  class="block text-gray-700 hover:text-secondary font-semibold transition">Contact</a>

            <button onclick="openQuoteModal()" class="w-full bg-gradient-to-r from-secondary to-red-700 text-white px-6 py-2 rounded-lg font-bold hover:from-red-700 hover:to-secondary transition-all shadow-lg">
                Get Quote
            </button>
        </div>
    </nav>
</header>

<style>
/* ===== SEARCH DROPDOWN STYLES ===== */
.search-header-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 16px;
    background: linear-gradient(135deg, #0a2463, #1a3a7a);
    color: white;
}
.search-header-bar span {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    opacity: 0.85;
}
.search-header-bar a {
    font-size: 11px;
    font-weight: 700;
    color: #fbbf24;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 4px;
    transition: opacity 0.2s;
}
.search-header-bar a:hover { opacity: 0.8; }

.search-item {
    display: flex;
    align-items: center;
    gap: 0;
    padding: 0;
    border-bottom: 1px solid #f1f5f9;
    cursor: pointer;
    transition: background 0.15s;
    text-decoration: none;
}
.search-item:last-of-type { border-bottom: none; }
.search-item:hover { background: #f8faff; }
.search-item:hover .search-item-name { color: #0a2463; }

.search-item-img-wrap {
    width: 80px;
    min-width: 80px;
    height: 80px;
    background: #f8faff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-right: 1px solid #f1f5f9;
    padding: 8px;
    position: relative;
    overflow: hidden;
}
.search-item-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}
.search-item:hover .search-item-img-wrap img { transform: scale(1.08); }

.search-item-body {
    flex: 1;
    padding: 10px 14px;
    min-width: 0;
}
.search-item-category {
    font-size: 10px;
    font-weight: 700;
    color: #0a2463;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 3px;
    opacity: 0.7;
}
.search-item-name {
    font-size: 13px;
    font-weight: 700;
    color: #1e293b;
    line-height: 1.35;
    margin-bottom: 3px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    transition: color 0.15s;
}
.search-item-sub {
    font-size: 11px;
    color: #94a3b8;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.search-item-right {
    padding: 10px 14px;
    text-align: right;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    gap: 6px;
}
.search-item-price {
    font-size: 15px;
    font-weight: 800;
    color: #b71c1c;
    white-space: nowrap;
}
.search-item-unit {
    font-size: 10px;
    color: #cbd5e1;
}
.search-item-badge {
    display: inline-block;
    font-size: 9px;
    font-weight: 700;
    padding: 2px 7px;
    border-radius: 20px;
    background: #dcfce7;
    color: #16a34a;
    white-space: nowrap;
}
.search-item-badge.out { background: #fee2e2; color: #dc2626; }

.search-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 16px;
    background: #f8faff;
    border-top: 1px solid #e8edf5;
}
.search-footer-left {
    font-size: 11px;
    color: #94a3b8;
    display: flex;
    align-items: center;
    gap: 5px;
}
.search-footer-btn {
    font-size: 12px;
    font-weight: 700;
    color: #0a2463;
    background: white;
    border: 1.5px solid #0a2463;
    padding: 5px 14px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    gap: 5px;
}
.search-footer-btn:hover { background: #0a2463; color: white; }

.search-empty {
    padding: 36px 20px;
    text-align: center;
}
.search-empty svg { margin: 0 auto 12px; display: block; opacity: 0.25; }
.search-empty-title { font-size: 14px; font-weight: 700; color: #475569; margin-bottom: 6px; }
.search-empty-sub   { font-size: 12px; color: #94a3b8; }
.search-empty-tags  { display: flex; flex-wrap: wrap; gap: 6px; justify-content: center; margin-top: 12px; }
.search-empty-tag   {
    font-size: 11px; font-weight: 600; color: #0a2463;
    background: #eff6ff; border: 1px solid #bfdbfe;
    padding: 3px 10px; border-radius: 20px; cursor: pointer;
    transition: all 0.2s;
}
.search-empty-tag:hover { background: #0a2463; color: white; border-color: #0a2463; }

.search-loading {
    padding: 28px 20px;
    text-align: center;
}
.search-spinner {
    width: 28px; height: 28px;
    border: 3px solid #e2e8f0;
    border-top-color: #0a2463;
    border-radius: 50%;
    animation: spin 0.7s linear infinite;
    margin: 0 auto 10px;
}
@keyframes spin { to { transform: rotate(360deg); } }

mark.sh { background: #fef08a; color: #1e293b; padding: 0 2px; border-radius: 2px; }
</style>

<!-- ============================================================
     SEARCH JS — works on ALL pages
     ✅ FIX: goToProductFromSearch → product_details.php?slug=
     ============================================================ -->
<script>
var searchProducts = [];
var searchLoaded   = false;

// 1. Load products data — SEEDHA DB SE via API (products.json hatao!)
// Slug DB se aayega → redirect 100% correct product pe hoga
function loadSearchData() {
    if (searchLoaded) return;

    // 30 min cache check
    try {
        var ts     = localStorage.getItem('itc_db_ts');
        var cached = localStorage.getItem('itc_db_products');
        if (ts && cached && (Date.now() - parseInt(ts)) < 1800000) {
            searchProducts = JSON.parse(cached);
            searchLoaded   = true;
            return;
        }
    } catch(e) {}

    // Fetch from DB API — slug DB se aayega, id mismatch nahi hoga
    fetch('./api/get_products.php')
        .then(function(r) {
            if (!r.ok) throw new Error('API error: ' + r.status);
            return r.json();
        })
        .then(function(data) {
            var products = (data && data.products) ? data.products : data;
            if (!Array.isArray(products) || products.length === 0) {
                console.warn('Search: empty/invalid API response');
                return;
            }
            searchProducts = products;
            searchLoaded   = true;
            try {
                localStorage.setItem('itc_db_products', JSON.stringify(products));
                localStorage.setItem('itc_db_ts', Date.now().toString());
            } catch(e) {}
            console.log('✅ Search: ' + products.length + ' products loaded from DB');
        })
        .catch(function(e) { console.warn('Search API failed:', e); });
}

// 2. Filter function
function doFilter(query) {
    if (!query || query.trim().length < 2) return [];
    var q = query.toLowerCase().trim();
    return searchProducts.filter(function(p) {
        return (p.name        && p.name.toLowerCase().indexOf(q)        > -1)
            || (p.subtitle    && p.subtitle.toLowerCase().indexOf(q)    > -1)
            || (p.category    && p.category.toLowerCase().indexOf(q)    > -1)
            || (p.material    && p.material.toLowerCase().indexOf(q)    > -1)
            || (p.description && p.description.toLowerCase().indexOf(q) > -1);
    }).slice(0, 6);
}

// 3. Highlight matching text
function hlText(text, query) {
    if (!text || !query) return text || '';
    var safe = query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    return text.replace(new RegExp('(' + safe + ')', 'gi'),
        '<mark class="sh">$1</mark>');
}

// 4. ✅ FIXED: Navigate to cart.php via slug (yahi tera product detail page hai)
function goToProductFromSearch(id) {
    closeAllDropdowns();
    var p = searchProducts.find(function(x){ return x.id === id; });
    if (!p) return;
    if (p.slug) {
        window.location.href = 'cart.php?slug=' + encodeURIComponent(p.slug);
    } else {
        window.location.href = 'cart.php?id=' + p.id;
    }
}

// 5. Render PROFESSIONAL dropdown
function renderDropdown(results, query, dropdownId) {
    var dd = document.getElementById(dropdownId);
    if (!dd) return;

    // NO RESULTS
    if (results.length === 0) {
        dd.innerHTML =
            '<div class="search-empty">' +
            '<svg width="48" height="48" fill="none" stroke="#94a3b8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>' +
            '<p class="search-empty-title">No results for &ldquo;' + query + '&rdquo;</p>' +
            '<p class="search-empty-sub">Try different keywords</p>' +
            '<div class="search-empty-tags">' +
            '<span class="search-empty-tag" onclick="quickSearch(\'gate valve\')">Gate Valve</span>' +
            '<span class="search-empty-tag" onclick="quickSearch(\'globe valve\')">Globe Valve</span>' +
            '<span class="search-empty-tag" onclick="quickSearch(\'IBR\')">IBR</span>' +
            '<span class="search-empty-tag" onclick="quickSearch(\'SS 304\')">SS 304</span>' +
            '<span class="search-empty-tag" onclick="quickSearch(\'pipes\')">Pipes</span>' +
            '</div></div>';
        dd.classList.remove('hidden');
        return;
    }

    // HEADER BAR
    var html =
        '<div class="search-header-bar">' +
        '<span>' + results.length + ' Product' + (results.length !== 1 ? 's' : '') + ' Found</span>' +
        '<a href="product_details.php">View All Products <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg></a>' +
        '</div>';

    // PRODUCT ROWS
    results.forEach(function(p) {
        var rawPrice = p.price_min || p.price || 0;
        var priceStr = '₹' + Number(rawPrice).toLocaleString('en-IN');
        var inStock  = (p.in_stock === undefined) ? true : !!p.in_stock;
        var stockBadge = inStock
            ? '<span class="search-item-badge">✓ In Stock</span>'
            : '<span class="search-item-badge out">Out of Stock</span>';
        var imgSrc = p.image || './assets/images/Gate-Valve-1.png';
        var slug   = p.slug ? encodeURIComponent(p.slug) : '';
        var href   = slug
            ? 'product_details.php?slug=' + slug
            : 'product_details.php?id=' + p.id;

        html +=
            '<div class="search-item" onclick="goToProductFromSearch(' + p.id + ')">' +

            /* IMAGE */
            '<div class="search-item-img-wrap">' +
            '<img src="' + imgSrc + '" alt="' + p.name + '" loading="lazy" onerror="this.src=\'./assets/images/Gate-Valve-1.png\'">' +
            '</div>' +

            /* INFO */
            '<div class="search-item-body">' +
            '<div class="search-item-category">' + (p.category || '') + '</div>' +
            '<div class="search-item-name">'     + hlText(p.name,     query) + '</div>' +
            '<div class="search-item-sub">'      + hlText(p.subtitle || '', query) + '</div>' +
            '</div>' +

            /* PRICE + BADGE */
            '<div class="search-item-right">' +
            '<div class="search-item-price">' + priceStr + '</div>' +
            '<div class="search-item-unit">per piece</div>' +
            stockBadge +
            '</div>' +

            '</div>';
    });

    // FOOTER
    html +=
        '<div class="search-footer">' +
        '<span class="search-footer-left">' +
        '<svg width="13" height="13" fill="none" stroke="#94a3b8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>' +
        'Showing ' + results.length + ' of ' + searchProducts.length + ' products' +
        '</span>' +
        '<button class="search-footer-btn" onclick="doSearchWithQuery(\'' + encodeURIComponent(query) + '\')">' +
        'See all results' +
        '<svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>' +
        '</button>' +
        '</div>';

    dd.innerHTML = html;
    dd.classList.remove('hidden');
}

// 6. Quick search from empty state tags
function quickSearch(term) {
    var di = document.getElementById('searchInput');
    var mi = document.getElementById('mobileSearchInput');
    if (di) { di.value = term; renderDropdown(doFilter(term), term, 'searchDropdown'); }
    if (mi) { mi.value = term; renderDropdown(doFilter(term), term, 'mobileSearchDropdown'); }
}

// 7. Close all dropdowns
function closeAllDropdowns() {
    var d1 = document.getElementById('searchDropdown');
    var d2 = document.getElementById('mobileSearchDropdown');
    if (d1) d1.classList.add('hidden');
    if (d2) d2.classList.add('hidden');
}

// 8. Go to products page with search param
function doSearchWithQuery(encodedQuery) {
    closeAllDropdowns();
    window.location.href = 'product_details.php?search=' + encodedQuery;
}

function doSearch() {
    var inp = document.getElementById('searchInput');
    var q = inp ? inp.value.trim() : '';
    if (!q) return;
    closeAllDropdowns();
    window.location.href = 'cart.php?search=' + encodeURIComponent(q);
}

function doMobileSearch() {
    var inp = document.getElementById('mobileSearchInput');
    var q = inp ? inp.value.trim() : '';
    if (!q) return;
    closeAllDropdowns();
    window.location.href = 'cart.php?search=' + encodeURIComponent(q);
}

// 9. Desktop input events
(function() {
    var timer;
    var inp = document.getElementById('searchInput');
    if (!inp) return;

    inp.addEventListener('focus', function() {
        loadSearchData();
        var q = this.value.trim();
        if (q.length >= 2) renderDropdown(doFilter(q), q, 'searchDropdown');
    });

    inp.addEventListener('input', function() {
        clearTimeout(timer);
        var q = this.value.trim();
        if (q.length < 2) { closeAllDropdowns(); return; }
        timer = setTimeout(function() {
            renderDropdown(doFilter(q), q, 'searchDropdown');
        }, 220);
    });

    inp.addEventListener('keydown', function(e) {
        if (e.key === 'Enter')  doSearch();
        if (e.key === 'Escape') closeAllDropdowns();
    });
})();

// 10. Mobile input events
(function() {
    var timer;
    var inp = document.getElementById('mobileSearchInput');
    if (!inp) return;

    inp.addEventListener('focus', function() {
        loadSearchData();
        var q = this.value.trim();
        if (q.length >= 2) renderDropdown(doFilter(q), q, 'mobileSearchDropdown');
    });

    inp.addEventListener('input', function() {
        clearTimeout(timer);
        var q = this.value.trim();
        if (q.length < 2) {
            var dd = document.getElementById('mobileSearchDropdown');
            if (dd) dd.classList.add('hidden');
            return;
        }
        timer = setTimeout(function() {
            renderDropdown(doFilter(q), q, 'mobileSearchDropdown');
        }, 220);
    });

    inp.addEventListener('keydown', function(e) {
        if (e.key === 'Enter')  doMobileSearch();
        if (e.key === 'Escape') closeAllDropdowns();
    });
})();

// 11. Click outside → close dropdown
document.addEventListener('click', function(e) {
    var dw = document.getElementById('desktopSearchWrapper');
    var mw = document.getElementById('mobileSearchWrapper');
    if (dw && !dw.contains(e.target)) {
        var d = document.getElementById('searchDropdown');
        if (d) d.classList.add('hidden');
    }
    if (mw && !mw.contains(e.target)) {
        var d2 = document.getElementById('mobileSearchDropdown');
        if (d2) d2.classList.add('hidden');
    }
});

// 12. products.php pe ?search= param handle karo
function handleSearchParam() {
    var params = new URLSearchParams(window.location.search);
    var q = params.get('search');
    if (!q) return;

    var di = document.getElementById('searchInput');
    var mi = document.getElementById('mobileSearchInput');
    if (di) di.value = q;
    if (mi) mi.value = q;

    var attempts = 0;
    var interval = setInterval(function() {
        attempts++;
        var ap = (typeof allProducts !== 'undefined') ? allProducts : [];
        if (ap.length > 0) {
            clearInterval(interval);
            applySearchFilter(q, ap);
        }
        if (attempts > 50) clearInterval(interval);
    }, 100);
}

// 13. Filter and re-render product grid on products.php
function applySearchFilter(q, ap) {
    var query = q.toLowerCase().trim();
    var results = ap.filter(function(p) {
        return (p.name     && p.name.toLowerCase().indexOf(query)     > -1)
            || (p.subtitle && p.subtitle.toLowerCase().indexOf(query) > -1)
            || (p.category && p.category.toLowerCase().indexOf(query) > -1)
            || (p.material && p.material.toLowerCase().indexOf(query) > -1);
    });

    var titleEl = document.getElementById('section-title');
    var countEl = document.getElementById('section-count');
    if (titleEl) titleEl.textContent = 'Search: "' + q + '"';
    if (countEl) countEl.textContent = results.length + ' product' + (results.length !== 1 ? 's' : '') + ' found';

    var grid = document.getElementById('productGrid');
    if (!grid) return;

    if (results.length === 0) {
        grid.innerHTML =
            '<div class="col-span-4 text-center py-20">' +
            '<svg class="w-20 h-20 mx-auto text-gray-200 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">' +
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>' +
            '<p class="text-2xl font-bold text-gray-600 mb-2">No results for &quot;' + q + '&quot;</p>' +
            '<p class="text-gray-400 mb-6">Try: gate valve, globe valve, pipes, IBR, SS 304</p>' +
            '<a href="products.php" class="bg-secondary text-white px-8 py-3 rounded-xl font-bold hover:bg-blue-800 transition-all inline-block">View All Products</a>' +
            '</div>';
        return;
    }

    var cardFn = (typeof createCard === 'function') ? createCard
               : (typeof createProductCard === 'function') ? createProductCard
               : null;
    if (cardFn) {
        grid.innerHTML = results.map(cardFn).join('');
    }
}

// 14. Mobile menu toggle
var mbBtn = document.getElementById('mobileMenuBtn');
if (mbBtn) {
    mbBtn.addEventListener('click', function() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
}

// 15. Mobile About dropdown toggle
var abBtn = document.getElementById('mobileAboutBtn');
if (abBtn) {
    abBtn.addEventListener('click', function() {
        document.getElementById('mobileAboutMenu').classList.toggle('hidden');
        document.getElementById('mobileAboutIcon').classList.toggle('rotate-180');
    });
}

// Init on load
document.addEventListener('DOMContentLoaded', function() {
    loadSearchData();
    handleSearchParam();
});
</script>