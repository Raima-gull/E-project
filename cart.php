<?php
$currentpath = basename($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="./Assets/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./new.css">
</head>

  

    <style>
  :root {
    --black: #000000;
    --white: #ffffff;
    --red: #e5233e;
    --golden: #debd01;
    --grey: rgb(41, 35, 35);
    --text: #cccccc;
  }

/* ===== Navbar ===== */
  .upper-navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 8px 45px;
    background-color: var(--black);
    border-bottom: 0.1px solid var(--red);
    color: var(--white);
    flex-wrap: wrap;
  }

  .upper-left,
  .upper-right {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .logo {
    text-align: center;
    margin-left: -14rem;
    flex: 1;
  }

  .logo img {
    width: 125px;
  }

  .icon {
    cursor: pointer;
    color: var(--white);
    font-size: 1.2em;
  }


  .icon:hover {
    color: var(--golden);
  }

  .search-bar {
    display: flex;
    align-items: center;
    background: var(--black);
    padding: 5px 10px;
    background-color: var(--black);
    border-radius: 3px;
  }

  .search-bar i {
    color: var(--text);
    margin-right: 14px;
  }

  .search-bar input {
    border: none;
    border-radius: 8px;
    border-bottom: 1px solid var(--text);
    background-color: var(--black);
    outline: none;
    color: var(--white);
    padding: 8px 20px;
    padding-right: 20px;
    z-index: 999;
  }

  .search-bar input:focus {
    background: var(--black);
  }

  .search-bar input::placeholder {
    color: var(--text);
  }


  .full-search input::placeholder {
    color: var(--text);
  }

  .menu-icon {
    display: none;
    font-size: 1.5em;
    cursor: pointer;
  }

  .full-search {
    display: none;
    width: 100%;
    background: var(--black);
    padding: 10px;
    padding-top: 3%;
  }

  .full-search input {
    width: 100%;
    padding: 12px;
    background: var(--black);
    color: var(--white);
    border: none;
    border-bottom: 1px solid var(--white);
    border-radius: 8px;
  }

  .full-search input:focus {
    background-color: var(--black);
    outline: none;
  }

  .lower-navbar {
    background-color: var(--grey);
    display: flex;
    justify-content: center;
    padding: 4px 50px;

  }

  .nav-links {
    display: flex;
    gap: 30px;
    list-style: none;
    color: var(--white);
  }

  .dl,
  ol,
  ul {
    margin-bottom: 0rem;
  }

  .nav-links li {
    position: relative;
  }

  .nav-links li a {
    text-decoration: none;
    color: var(--white);
    padding: 5px 10px;
    font-size: 0.99rem;
    display: block;
  }

  .nav-links li a:hover {
    color: var(--golden);
  }


  .nav-links li a.active {
    color: var(--golden);
  }

  /* ===== Sidebar ===== */
  .sidebar {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100%;
    background-color: var(--grey);
    padding: 20px;
    color: var(--white);
    z-index: 1000;
  }

  .sidebar .sidebar-logo {
    font-size: 1.4em;
    margin-bottom: 25px;
  }

  .sidebar ul {
    list-style: none;
    padding-top: 42px;
  }

  .sidebar ul li {
    padding: 20px 18px;
  }


  .sidebar ul li a {
    text-decoration: none;
    color: var(--white);
    font-size: 1em;
  }

  .close-btn {
    font-size: 2em;
    cursor: pointer;
    position: absolute;
    top: 19px;
    right: 22px;
  }


  @media (max-width: 898px) {

    .logo {
      text-align: center;
      margin-left: -8rem;
      flex: 1;
    }
  }

  @media (max-width: 768px) {
    .search-bar {
      display: none;
    }

    .menu-icon {
      display: block;
    }


    .logo {
      margin-left: 2.9rem;
    }

    .lower-navbar {
      display: none;
    }

    .full-search {
      display: block;
    }
  }



  @media (max-width: 480px) {
    .logo {
      display: none;
    }

    .sidebar-logo img {
      width: 125px;
      padding-top: 12px;
    }

    .sidebar .sidebar-logo {
      display: block;
    }
  }

  @media (min-width: 481px) {
    .sidebar .sidebar-logo {
      display: none;
    }
  }

  /* =====  Navbar ===== */





  /* =====  add to cart css  ===== */



  .cart-container {
    background-color: var(--black);
    padding: 45px 25px;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
    max-width: 1200px;
    margin: 0 auto;
  }

  .cart-heading {
    color: var(--red);
    text-align: center;
    font-size: 56px;
    margin-bottom: 8px;
    margin-top: 18px;
    text-shadow: 1px 1px 2px var(--text);
  }

  .cart-table.dataTable {
    background-color: var(--grey);
    color: var(--text);
    border: none;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
  }



  .cart-table thead th {
    background-color: var(--black);
    border: 1px solid var(--golden);
    color: var(--white);
    padding: 12px;
  }

  .cart-table tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.05);
  }

  .cart-table tbody td {
    padding: 10px;
  }

  .cart-table tfoot {
    background-color: var(--grey);
  }

  .cart-checkout-btn {
    background-color: var(--black);
    color: var(--white);
    font-weight: bold;
    border: 1px solid var(--golden);
    padding: 12px;
    transition: background-color 0.3s ease;
    width: 100%;
    border-radius: 6px;
    
    text-decoration: none;
  }

  .cart-checkout-btn:hover {
    transition: all 0.3s ease-in;
    background-color: var(--golden);
    color: var(--black);
  }



  /* =====  add to cart css  ===== */






    </style>
</head>
<body>
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <nav id="shownavbar">
        <div class="upper-navbar">
            <div class="upper-left">
                <div class="menu-icon" onclick="openSidebar()"><i class="fas fa-bars"></i></div>
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search..." />
                </div>
            </div>
            <div class="logo">
                <img src="./Assets/Images/gl logo-01-01.png" alt="Glamourae Luxe Logo">
            </div>
            <div class="upper-right">
                <a href="./cart.php">
                    <div class="icon position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count badge bg-danger position-absolute top-0 start-100 translate-middle rounded-pill" id="cartCount">0</span>
                    </div>
                </a>

                <a href="./Register.php">
                    <div class="icon"><i class="fas fa-user-plus"></i></div>
                </a>
            </div>
            <div class="full-search">
                <input type="text" placeholder="Search..." />
            </div>
        </div>

        <div class="lower-navbar">
            <ul class="nav-links">
                <li><a href="index.php" class="<?php echo $currentpath == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="./cosmetics.php" class="<?php echo $currentpath == 'cosmetics.php' ? 'active' : '' ?>">Cosmetics</a></li>
                <li><a href="./extraJewlry.php" class="<?php echo $currentpath == 'jewellery.php' ? 'active' : '' ?>">Jewellery</a></li>
                <li><a href="select_category.php" class="<?php echo $currentpath == 'compare&choose.php' ? 'active' : '' ?>">Compare & Choose</a></li> <!-- Renamed for safety -->
                <li><a href="blog.php" class="<?php echo $currentpath == 'blog.php' ? 'active' : '' ?>">Blog</a></li>
                <li><a href="about.php" class="<?php echo $currentpath == 'about.php' ? 'active' : '' ?>">About</a></li>
                <li><a href="contact.php" class="<?php echo $currentpath == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="sidebar" id="sidebar">
        <div class="close-btn" onclick="closeSidebar()">×</div>
        <div class="sidebar-logo">
            <img src="./Assets/Images/gl logo-01-01.png" alt="Sidebar Logo">
        </div>
        <ul>
            <li><a href="index.php" class="<?php echo $currentpath == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="cosmetics.php" class="<?php echo $currentpath == 'cosmetics.php' ? 'active' : '' ?>">Cosmetics</a></li>
            <li><a href="jewellery.php" class="<?php echo $currentpath == 'jewellery.php' ? 'active' : '' ?>">Jewellery</a></li>
            <li><a href="compare&choose.php" class="<?php echo $currentpath == 'compare&choose.php' ? 'active' : '' ?>">Compare & Choose</a></li>
            <li><a href="blog.php" class="<?php echo $currentpath == 'blog.php' ? 'active' : '' ?>">Blog</a></li>
            <li><a href="about.php" class="<?php echo $currentpath == 'about.php' ? 'active' : '' ?>">About</a></li>
            <li><a href="contact.php" class="<?php echo $currentpath == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </div>
    <div class="container cart-container">
    <h1 class="cart-heading">Cart Items</h1>

    <table id="example" class="cart-table display" style="width: 100%">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="cartItems" class="cart-items-body">
            <!-- JavaScript will populate this -->
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6">
                    <a href="./checkout.php"><button class="cart-checkout-btn" id="checkoutBtn">CHECKOUT</button>
                    </a>
                </th>
            </tr>
        </tfoot>
    </table>
</div>

<script>
// Cart Class - Single Instance
class Cart {
    constructor() {
        this.items = JSON.parse(localStorage.getItem('cart')) || [];
        this.updateCartCount();
    }
    save() {
        localStorage.setItem('cart', JSON.stringify(this.items));
        this.updateCartCount();
    }
    add(product) {
        const existing = this.items.find(item => item.id === product.id);
        existing ? existing.quantity++ : this.items.push({...product, quantity: 1});
        this.save();
        return existing ? existing.quantity : 1;
    }
    remove(id) {
        this.items = this.items.filter(item => item.id !== id);
        this.save();
    }

    update(id, quantity) {
        const item = this.items.find(item => item.id === id);
        if (item) {
            item.quantity = quantity;
            this.save();
        }
    }

    get totalItems() {
        return this.items.reduce((total, item) => total + item.quantity, 0);
    }

    updateCartCount() {
        const count = this.totalItems;
        document.querySelectorAll('.cart-count').forEach(el => {
            el.textContent = count;
            el.style.display = count > 0 ? 'block' : 'none';
        });
    }
}

// Initialize Single Cart Instance
const cart = new Cart();

// Cart Page Functions
function renderCart() {
    const container = document.getElementById('cartItems');
    if (!container) return;
    
    container.innerHTML = cart.items.length ? cart.items.map((item, i) => `
        <tr>
            <td>${i + 1}</td>
            <td>${item.name}</td>
            <td>$${item.price.toFixed(2)}</td>
            <td><input type="number" min="1" value="${item.quantity}" 
                 onchange="updateCartItem(${item.id}, this.value)"></td>
            <td><img src="https://via.placeholder.com/50/1e1e1e/ffffff?text=${item.name.split(' ').join('+')}"></td>
            <td><button onclick="removeCartItem(${item.id})" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i></button></td>
        </tr>
    `).join('') : `<tr><td colspan="6" class="text-center py-4">Your cart is empty</td></tr>`;
    
    document.getElementById('checkoutBtn').style.display = cart.items.length ? 'block' : 'none';
}

// Product Page Functions
function addToCart(product) {
    cart.add(product);
    updateProductButton(product.id);
    showNotification(`${product.name} added to cart`);
}

function updateProductButton(productId) {
    document.querySelectorAll(`button[onclick*="${productId}"]`).forEach(btn => {
        btn.innerHTML = `<i class="fas fa-check"></i> Added to Cart`;
        btn.classList.add('added');
    });
}

// Helper Functions
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'cart-notification';
    notification.innerHTML = `<i class="fas fa-check-circle"></i><span>${message}</span>`;
    document.body.appendChild(notification);
    
    setTimeout(() => notification.classList.add('show'), 10);
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Global Functions
function updateCartItem(id, quantity) {
    cart.update(id, parseInt(quantity));
    renderCart();
}

function removeCartItem(id) {
    cart.remove(id);
    renderCart();
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('cartItems')) {
        renderCart();
    }
});
</script>

</body>
</html>


