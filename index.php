<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UrbanPulse</title>

  <link rel="stylesheet" href="style.css">

  <!-- Box Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <header class="bg-white sticky-top shadow-sm">
    <div class="container d-flex justify-content-between align-items-center py-3">
      <div class="d-flex align-items-center gap-2">
        <img src="img/up.png" alt="Logo" height="50">
        <span class="fw-bold fs-3 tracking-tight">Urban<span class="text-danger">Pulse</span></span>
      </div>
      <div class="d-none d-md-flex gap-4 fw-semibold text-muted">
        <a href="#" class="text-decoration-none text-dark">Home</a>
        <a href="#" class="text-decoration-none text-muted">Restaurants</a>
        <a href="#" class="text-decoration-none text-muted">Offers</a>
      </div>
      <a href="ordernow.php" class="btn btn-dark rounded-pill px-4">Order Now</a>
    </div>
  </header>

  <section class="hero-glass text-center text-white">
    <div class="container">
      <h1 class="display-3 fw-bold mb-4">Your Hunger, <span class="text-danger">Our Passion.</span></h1>
      <p class="lead mb-5 opacity-75">The fastest way to get your favorite meals delivered.</p>

      <div class="search-container d-flex align-items-center">
        <i class='bx bx-search fs-4 ms-3 opacity-50'></i>
        <input type="text" class="form-control" placeholder="What are you craving today?">
        <button class="btn btn-danger rounded-pill px-5 py-2 fw-bold">Find Food</button>
      </div>
    </div>
  </section>
 
  <div class="container my-5 py-5">
    <div class="d-flex justify-content-between align-items-end mb-5">
      <div>
        <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">Local Favorites</h6>
        <h2 class="fw-bold display-6">Featured Restaurants</h2>
      </div>
      <a href="#" class="btn btn-outline-danger rounded-pill px-4 fw-bold">View All <i
          class='bx bx-right-arrow-alt'></i></a>
    </div>

    <div class="row g-4">

      <div class="col-md-3">
        <div class="card featured-card h-100 shadow-sm border-0">
          <div class="position-relative overflow-hidden rounded-top-4">
            <img src="img/restruation.webp" class="card-img-top" alt="Grilled Chicken">
            <span class="badge bg-danger position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2 shadow">Best
              Seller</span>
            <div class="delivery-time position-absolute bottom-0 end-0 m-2 px-2 py-1 bg-white rounded-3 shadow-sm">
              <small class="fw-bold text-dark"><i class='bx bxs-time'></i> 25 min</small>
            </div>
          </div>
          <div class="card-body p-4">
            <h5 class="fw-bold mb-1">Hyper Flame</h5>
            <p class="text-muted small mb-3">Flame-Kissed Grilled Chicken</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold text-danger">Rs. 450</span>
              <div class="rating text-warning small">
                <i class='bx bxs-star'></i> 4.8
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card featured-card h-100 shadow-sm border-0">
          <div class="position-relative overflow-hidden rounded-top-4">
            <img src="img/pasta.webp" class="card-img-top" alt="Pasta">
            <div class="delivery-time position-absolute bottom-0 end-0 m-2 px-2 py-1 bg-white rounded-3 shadow-sm">
              <small class="fw-bold text-dark"><i class='bx bxs-time'></i> 20 min</small>
            </div>
          </div>
          <div class="card-body p-4">
            <h5 class="fw-bold mb-1">New Golden Era</h5>
            <p class="text-muted small mb-3">Creamy Alfredo Pasta</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold text-danger">Rs. 380</span>
              <div class="rating text-warning small">
                <i class='bx bxs-star'></i> 4.5
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card featured-card h-100 shadow-sm border-0">
          <div class="position-relative overflow-hidden rounded-top-4">
            <img src="img/sushiroll.webp" class="card-img-top" alt="Sushi">
            <span class="badge bg-dark position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2 shadow">Premium</span>
            <div class="delivery-time position-absolute bottom-0 end-0 m-2 px-2 py-1 bg-white rounded-3 shadow-sm">
              <small class="fw-bold text-dark"><i class='bx bxs-time'></i> 40 min</small>
            </div>
          </div>
          <div class="card-body p-4">
            <h5 class="fw-bold mb-1">Mustang Sushi</h5>
            <p class="text-muted small mb-3">Artfully Crafted Sushi Rolls</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold text-danger">Rs. 850</span>
              <div class="rating text-warning small">
                <i class='bx bxs-star'></i> 4.9
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card featured-card h-100 shadow-sm border-0">
          <div class="position-relative overflow-hidden rounded-top-4">
            <img src="img/MargheritaPizza.webp" class="card-img-top" alt="Pizza">
            <div class="delivery-time position-absolute bottom-0 end-0 m-2 px-2 py-1 bg-white rounded-3 shadow-sm">
              <small class="fw-bold text-dark"><i class='bx bxs-time'></i> 15 min</small>
            </div>
          </div>
          <div class="card-body p-4">
            <h5 class="fw-bold mb-1">Saffron Kitchen</h5>
            <p class="text-muted small mb-3">Classic Margherita Pizza</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold text-danger">Rs. 550</span>
              <div class="rating text-warning small">
                <i class='bx bxs-star'></i> 4.2
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <section class="about-modern">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="glass-content">
            <h2 class="display-5 fw-bold text-white mb-4">Driven by Speed.<br>Powered by Taste.</h2>
            <p class="mb-4 text-light opacity-75">UrbanPulse isn't just a delivery service; it's a bridge between the
              city's finest kitchens and your doorstep.</p>
            <ul class="about-features p-0">
              <li><i class='bx bxs-check-circle'></i> Lightning-fast 30-minute delivery</li>
              <li><i class='bx bxs-check-circle'></i> 500+ Premium Restaurant partners</li>
              <li><i class='bx bxs-check-circle'></i> Real-time military-grade tracking</li>
            </ul>
            <button class="btn btn-danger btn-lg rounded-pill px-5 mt-3 shadow-lg">Learn More</button>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="position-relative p-4">
            <img src="img/delivery.png" class="img-fluid rounded-5 shadow-lg"
              style="transform: rotate(-2deg); max-height: 450px;" alt="Delivery">
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <section class="partner-cta text-white text-center shadow-lg">
      <h2 class="fw-bold display-6 mb-3">Partner With UrbanPulse</h2>
      <p class="lead mb-4 opacity-90">Expand your reach and join 200,000+ happy customers.</p>
      <a href="mailto:partner@urbanpulse.com" class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-danger">Get
        Started Today</a>
    </section>
  </div>

  <footer class="text-white">
    <div class="container">
      <div class="row g-5">
        <div class="col-md-4">
          <h4 class="fw-bold mb-4 text-danger">UrbanPulse</h4>
          <p class="opacity-50">Providing the pulse of the city through every bite. The premium choice for urban
            delivery.</p>
        </div>
        <div class="col-md-2">
          <h6 class="fw-bold mb-4">Company</h6>
          <ul class="list-unstyled opacity-75">
            <li class="mb-2"><a href="#" class="text-white text-decoration-none">About Us</a></li>
            <li class="mb-2"><a href="#" class="text-white text-decoration-none">Careers</a></li>
          </ul>
        </div>
      </div>
      <hr class="my-5 opacity-25">
      <p class="text-center opacity-50">© 2026 UrbanPulse Pvt. Ltd. All Rights Reserved.</p>
    </div>
  </footer>

</body>

</html>