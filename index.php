<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UrbanPulse</title>

  <!-- Favicon -->
  <link rel="icon" href="img/up.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- HEADER -->
  <header class="bg-white sticky-top shadow-sm">
    <div class="container d-flex justify-content-between align-items-center py-3">

      <div class="d-flex align-items-center gap-2">
        <img src="img/up.png" alt="UrbanPulse Logo" height="50">
        <span class="fw-bold fs-3">Urban<span class="text-danger">Pulse</span></span>
      </div>

      <nav class="d-none d-md-flex gap-4 fw-semibold">
        <a href="#" class="text-decoration-none text-danger">Home</a>
        <a href="#" class="text-decoration-none text-muted">Restaurants</a>
        <a href="#" class="text-decoration-none text-muted">Offers</a>
      </nav>

      <a href="ordernow.php" class="btn btn-dark rounded-pill px-4">Order Now</a>

    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="hero-glass text-center text-white">
    <div class="container">
      <h1 class="display-3 fw-bold mb-4">
        Your Hunger, <span class="text-danger">Our Passion.</span>
      </h1>

      <p class="lead mb-5 opacity-75">
        The fastest way to get your favorite meals delivered.
      </p>

      <!-- SEARCH -->
      <form action="search.php" method="GET" class="search-container d-flex align-items-center">
        <i class='bx bx-search fs-4 ms-3 opacity-50'></i>

        <input type="text" name="query" class="form-control"
          placeholder="What are you craving today?" aria-label="Search food" required>

        <button type="submit" class="btn btn-danger rounded-pill px-4 py-2 fw-bold">
          Find Food
        </button>
      </form>
    </div>
  </section>

  <!-- FEATURED RESTAURANTS -->
  <section class="container my-5 py-5">
    <div class="d-flex justify-content-between align-items-end mb-5">

      <div>
        <h6 class="text-danger fw-bold text-uppercase">Local Favorites</h6>
        <h2 class="fw-bold display-6">Featured Restaurants</h2>
      </div>

      <a href="#" class="btn btn-outline-danger rounded-pill px-4 fw-bold">
        View All <i class='bx bx-right-arrow-alt'></i>
      </a>
    </div>

    <div class="row g-4">

      <!-- CARD 1 -->
      <div class="col-md-3">
        <div class="card featured-card h-100 border-0 shadow-sm">

          <div class="position-relative overflow-hidden">
            <img src="img/restruation.webp" loading="lazy" class="card-img-top" alt="Grilled Chicken">

            <span class="badge bg-danger position-absolute top-0 start-0 m-3">Best Seller</span>

            <div class="delivery-time position-absolute bottom-0 end-0 m-2">
              <small class="fw-bold"><i class='bx bxs-time'></i> 25 min</small>
            </div>
          </div>

          <div class="card-body">
            <h5 class="fw-bold">Hyper Flame</h5>
            <p class="text-muted small">Grilled Chicken</p>

            <div class="d-flex justify-content-between">
              <span class="fw-bold text-danger">Rs. 450</span>
              <span class="text-warning"><i class='bx bxs-star'></i> 4.8</span>
            </div>
          </div>

        </div>
      </div>

      <!-- CARD 2 -->
      <div class="col-md-3">
        <div class="card featured-card h-100 border-0 shadow-sm">

          <img src="img/pasta.webp" loading="lazy" class="card-img-top" alt="Pasta">

          <div class="card-body">
            <h5 class="fw-bold">Golden Era</h5>
            <p class="text-muted small">Alfredo Pasta</p>

            <div class="d-flex justify-content-between">
              <span class="fw-bold text-danger">Rs. 380</span>
              <span class="text-warning"><i class='bx bxs-star'></i> 4.5</span>
            </div>
          </div>

        </div>
      </div>

      <!-- CARD 3 -->
      <div class="col-md-3">
        <div class="card featured-card h-100 border-0 shadow-sm">

          <img src="img/sushiroll.webp" loading="lazy" class="card-img-top" alt="Sushi">

          <div class="card-body">
            <h5 class="fw-bold">Mustang Sushi</h5>
            <p class="text-muted small">Sushi Rolls</p>

            <div class="d-flex justify-content-between">
              <span class="fw-bold text-danger">Rs. 850</span>
              <span class="text-warning"><i class='bx bxs-star'></i> 4.9</span>
            </div>
          </div>

        </div>
      </div>

      <!-- CARD 4 -->
      <div class="col-md-3">
        <div class="card featured-card h-100 border-0 shadow-sm">

          <img src="img/MargheritaPizza.webp" loading="lazy" class="card-img-top" alt="Pizza">

          <div class="card-body">
            <h5 class="fw-bold">Saffron Kitchen</h5>
            <p class="text-muted small">Margherita Pizza</p>

            <div class="d-flex justify-content-between">
              <span class="fw-bold text-danger">Rs. 550</span>
              <span class="text-warning"><i class='bx bxs-star'></i> 4.2</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- ABOUT -->
  <section class="about-modern">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6">
          <h2 class="text-white fw-bold mb-4">
            Driven by Speed. Powered by Taste.
          </h2>

          <p class="text-light">
            Connecting the best restaurants to your doorstep.
          </p>

          <button class="btn btn-danger rounded-pill px-4">Learn More</button>
        </div>

        <div class="col-lg-6 text-center">
          <img src="img/delivery.png" class="img-fluid delivery-img" alt="Delivery">
        </div>

      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="text-white mt-5 p-5 bg-dark text-center">
    <p>© 2026 UrbanPulse Pvt. Ltd.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>