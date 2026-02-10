<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Water Distribution Locations | Muftwater</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Main CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    .location-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
      margin-top: 40px;
    }

    .location-card {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
    }

    .location-card:hover {
      transform: translateY(-6px);
    }

    .location-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .location-content {
      padding: 18px;
    }

    .location-content h3 {
      margin-bottom: 8px;
      font-size: 1.2rem;
    }

    .location-content p {
      color: #555;
      font-size: 0.95rem;
      line-height: 1.5;
    }

    .location-badge {
      display: inline-block;
      margin-bottom: 10px;
      padding: 4px 10px;
      background: #e6f3ff;
      color: #0066cc;
      font-size: 0.8rem;
      border-radius: 20px;
      font-weight: 600;
    }

    .location-grid {
  margin-bottom: 80px; /* controls space before footer */
}

  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="nav-container">
    <a href="#" class="logo">
      <svg class="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/>
        <path d="M20 8C20 8 12 16 12 22C12 26.4183 15.5817 30 20 30C24.4183 30 28 26.4183 28 22C28 16 20 8 20 8Z" fill="currentColor"/>
      </svg>
      <span>Muftwater</span>
    </a>
            <ul class="nav-links">
                <li><a href="index.php#home">Home</a></li>
                <li><a href="advertise.php">Advertise</a></li>
                <!-- <li><a href="index.php#impact">Impact</a></li> -->
                 <li><a href="distribute.php" class="active">Distribute</a></li>
                <li><a href="contact-us.php">Contact</a></li>
            </ul>
            <a href="advertise.php#quote" class="nav-cta">Get a Quote</a>
            <button class="mobile-menu-btn" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
  </div>
</nav>

<!-- HERO -->
<section class="hero small-hero">
  <div class="hero-content center">
    <span class="hero-badge">🌍 WHERE WE OPERATE</span>
    <h1 class="hero-title">Muftwater Distribution Locations</h1>
    <p class="hero-description">
      We place Muftwater points at high-footfall public and private spaces to ensure maximum reach and impact.
    </p>
  </div>
</section>

<!-- LOCATIONS SECTION -->
<section class="section-padding">
  <div class="container">
    <div class="section-header center">
      <span class="section-tag">🚰 OUR PRESENCE</span>
      <h2 class="section-title">High-Footfall Water Distribution Points</h2>
      <p class="hero-description">
        These are some of the key environments where Muftwater operates and brands connect with people.
      </p>
    </div>

    <div class="location-grid">

      <div class="location-card">
        <img src="assets/images/metro_station.jpeg" alt="Metro Station Distribution">
        <div class="location-content">
          <span class="location-badge">Public Transport</span>
          <h3>Metro Stations</h3>
          <p>High daily commuter traffic ensures repeated brand exposure and public utility.</p>
        </div>
      </div>

      <div class="location-card">
        <img src="assets/images/public_park.jpeg" alt="Public Park Distribution">
        <div class="location-content">
          <span class="location-badge">Outdoor Spaces</span>
          <h3>Public Parks</h3>
          <p>Ideal for families, walkers, and fitness groups during peak hours.</p>
        </div>
      </div>

      <div class="location-card">
        <img src="assets/images/coching_class.jpeg" alt="Coaching Class Distribution">
        <div class="location-content">
          <span class="location-badge">Education</span>
          <h3>Coaching Institutes</h3>
          <p>Strong engagement with students preparing for competitive exams.</p>
        </div>
      </div>

      <div class="location-card">
        <img src="assets/images/corparate_offices.jpeg" alt="Corporate Office Distribution">
        <div class="location-content">
          <span class="location-badge">Workplaces</span>
          <h3>Corporate Offices</h3>
          <p>Daily professional audiences with strong recall and brand trust.</p>
        </div>
      </div>

      <div class="location-card">
        <img src="assets/images/evert_epark.jpeg" alt="Event Distribution">
        <div class="location-content">
          <span class="location-badge">Events</span>
          <h3>Events & Campaigns</h3>
          <p>Short-term high-volume exposure during fairs, marathons, and festivals.</p>
        </div>
      </div>

      <div class="location-card">
        <img src="assets/images/university_capmus.jpeg" alt="University Distribution">
        <div class="location-content">
          <span class="location-badge">Campuses</span>
          <h3>University Campuses</h3>
          <p>Long-duration brand presence among youth and academic communities.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FOOTER -->
<div id="footer"></div>
<script>
fetch("footer.php")
.then(response => response.text())
.then(html => {
  document.getElementById("footer").innerHTML = html;
});
</script>

<script src="script.js"></script>
</body>
</html>
