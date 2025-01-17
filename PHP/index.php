<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />

    <!-- styles css -->
    <link rel="stylesheet" href="css/styles.css" />
    <title>Home | Comfy</title>
  </head>
  <body>
      
     <?php include "includes/nav-white.inc.php"; ?> 
      
    <!-- hero -->
    <section class="hero">
      <div class="hero-container">
        <h1 class="text-slanted">
          rest, relax, unwind
        </h1>
        <h3>embrace your choices - we do</h3>
        <a href="products.html" class="hero-btn">Shop Now</a>
      </div>
    </section>
    <!-- sidebar -->
    <div class="sidebar-overlay">
      <aside class="sidebar">
        <!-- close -->
        <button class="sidebar-close">
          <i class="fas fa-times"></i>
        </button>
        <!-- links -->
        <ul class="sidebar-links">
          <li>
            <a href="index.html" class="sidebar-link">
              <i class="fas fa-home fa-fw"></i>
              home
            </a>
          </li>
          <li>
            <a href="products.html" class="sidebar-link">
              <i class="fas fa-couch fa-fw"></i>
              products
            </a>
          </li>
          <li>
            <a href="about.html" class="sidebar-link">
              <i class="fas fa-book fa-fw"></i>
              about
            </a>
          </li>
        </ul>
      </aside>
    </div>
    <!-- cart -->
    <div class="cart-overlay">
      <aside class="cart">
        <button class="cart-close">
          <i class="fas fa-times"></i>
        </button>
        <header>
          <h3 class="text-slanted">your bag</h3>
        </header>
        <!-- cart items -->
        <div class="cart-items">
          <!-- single item -->
          <article class="cart-item" data-id="">
            <img src="./images/main-bcg.jpeg" class="cart-item-img" alt="name">
            <!-- item info -->
            <div>
              <h4 class="cart-item-name">high-back bench</h4>
              <p class="cart-item-price">$13.30</p>
              <button class="cart-item-remove-btn">remove</button>
            </div>
            <!-- amount toggle -->
            <div>
              <button class="cart-item-increase-btn">
                <i class="fas fa-chevron-up"></i>
              </button>
              <p class="cart-item-amount">1</p>
              <button class="cart-item-decrease-btn">
                <i class="fas fa-chevron-down"></i>
              </button>
            </div>
          </article>
          <!-- end of single item -->
        </div>
        <!-- footer -->
        <footer>
          <h3 class="cart-total text-slanted">
            total: $12.00
          </h3>
          <button class="cart-checkout btn">checkout</button>
        </footer>
      </aside>
    </div>
    <!-- featured products -->
    <section class="section featured">
      <div class="title">
        <h2><span>/</span> featured</h2>
      </div>
      <div class="featured-center section-center">
        <h2 class="section-loading">
          loading...
        </h2>
      </div>
      <a href="products.php" class="btn">
        all products
      </a>
    </section>
    <script type="module" src="index.js"></script>
  </body>
</html>