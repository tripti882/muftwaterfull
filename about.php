<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Muft Water</title>

    <link rel="stylesheet" href="css/styles.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<!-- SAME NAVBAR -->
<nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="logo">
            <svg class="logo-icon" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/>
                <path d="M20 8C20 8 12 16 12 22C12 26.4 15.6 30 20 30C24.4 30 28 26.4 28 22C28 16 20 8 20 8Z" fill="currentColor"/>
            </svg>
            <span>Muftwater</span>
        </a>

        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="advertise.php">Advertise</a></li>
            <li><a href="distribute.php">Distribute</a></li>
            <li><a href="contact-us.php">Contact</a></li>
        </ul>

        <a href="advertise.php#quote" class="nav-cta">Get a Quote</a>

        <button class="mobile-menu-btn">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<!-- HERO -->
<section class="hero small-hero">
    <div class="hero-content center">
        <span class="hero-badge">🌊 About Muft Water</span>
        <h1 class="hero-title">
            <span class="title-line">Water for People.</span>
            <span class="title-line accent">Media for Brands.</span>
        </h1>
        <p class="hero-description">
            We combine free drinking water with high-impact offline advertising.
        </p>
    </div>
</section>

<!-- ABOUT CONTENT -->
<section class="about">
    <div class="container">

        <div class="section-header center">
            <span class="section-tag">WHO WE ARE</span>
            <h2 class="section-title">India’s First Free Water Media Network</h2>
        </div>

        <div class="about-grid">

            <div class="about-text">
                <p>
                    Muft Water is a new-age offline advertising platform that provides
                    free drinking water at high-footfall locations such as coaching centers,
                    metro stations, parks, hospitals, and events.
                </p>

                <p>
                    Instead of billboards people ignore, we put your brand in their hands.
                    Every bottle and kiosk carries brand messaging and a QR code that drives
                    users to offers, websites, or WhatsApp.
                </p>

                <strong>
                    This is not charity.  
                    This is measurable performance marketing.
                </strong>
            </div>

            <div class="about-image">
                <img src="assets/images/sam.png" alt="Muft Water Bottles">
            </div>

        </div>
    </div>
</section>

<!-- MISSION / VISION -->
<section class="mission">
    <div class="container">
        <div class="mission-grid">

            <div class="mission-card">
                <h3>🎯 Our Mission</h3>
                <p>
                    To make clean drinking water accessible while helping brands
                    reach real people in real places.
                </p>
            </div>

            <div class="mission-card">
                <h3>🌍 Our Vision</h3>
                <p>
                    To build India’s largest offline ad network powered by
                    utility, not interruption.
                </p>
            </div>

            <div class="mission-card">
                <h3>📊 Our Model</h3>
                <p>
                    Brands sponsor the water.  
                    People drink for free.  
                    Brands get leads, scans, and visibility.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER LOAD -->
<div id="footer"></div>

<script>
fetch("footer.php")
  .then(res => res.text())
  .then(data => {
    document.getElementById("footer").innerHTML = data;
  });
</script>

<script src="script.js"></script>
</body>
</html>
