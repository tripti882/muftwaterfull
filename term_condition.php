<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Muftwater | Terms & Conditions</title>

<link rel="stylesheet" href="css/styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">

<style>
.hero.small-hero{
  min-height:140px;
  padding:0;
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
}
.policy-content{
  max-width:900px;
  margin:auto;
  line-height:1.7;
  color:#444;
}
.policy-content h3{
  margin-top:30px;
  font-size:1.3rem;
  color:#000;
}
.policy-content ul{
  padding-left:20px;
}
.policy-content li{
  margin-bottom:8px;
}
.faq.section-padding{
  padding-bottom:80px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
     <nav class="navbar">
        <div class="nav-container">
            <a href="index.php#home" class="logo">
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
    <span class="hero-badge">Legal</span>
    <h1>Terms & Conditions</h1>
    <p>Please read these terms carefully.</p>
  </div>
</section>

<!-- TERMS SECTION -->
<section class="faq section-padding">
  <div class="container policy-content">

    <p><strong>Last Updated:</strong> [Add Date]</p>

    <p>
      These Terms and Conditions govern the use of the Muftwater website, services, and platforms.
      By accessing or using our website or services, you agree to be bound by these terms.
      If you do not agree with these terms, please do not use our services.
    </p>

    <h3>About Muftwater</h3>
    <p>
      Muftwater is a platform that provides free drinking water through kiosks, carts, and bottles
      while enabling brands to advertise and engage with people through physical and digital formats.
    </p>
    <p>
      Muftwater operates as a marketing and media service provider and not as an NGO or charitable organization.
    </p>

    <h3>Use of Website and Services</h3>
    <ul>
      <li>You agree to use the website and services only for lawful purposes.</li>
      <li>You must not misuse the website, attempt unauthorized access, or introduce harmful content.</li>
      <li>Muftwater reserves the right to restrict or terminate access if misuse is detected.</li>
    </ul>

    <h3>Free Water Distribution</h3>
    <ul>
      <li>Water is provided free of cost through Muftwater kiosks, carts, and bottles.</li>
      <li>Availability may vary by location, time, and campaign.</li>
      <li>Muftwater does not guarantee uninterrupted availability.</li>
      <li>Distribution may be suspended or modified without prior notice.</li>
    </ul>

    <h3>Advertising and Brand Campaigns</h3>
    <ul>
      <li>Advertising campaigns are subject to mutual agreement.</li>
      <li>Campaign details will be defined separately before execution.</li>
      <li>Muftwater does not guarantee sales, conversions, or revenue.</li>
      <li>Performance data is indicative and engagement-based.</li>
      <li>Muftwater may refuse or discontinue inappropriate campaigns.</li>
    </ul>

    <h3>Content and Intellectual Property</h3>
    <ul>
      <li>All website content is the property of Muftwater.</li>
      <li>Content may not be copied or reused without written permission.</li>
      <li>Advertisers grant Muftwater rights to use assets for campaign purposes.</li>
    </ul>

    <h3>QR Codes and User Interaction</h3>
    <ul>
      <li>QR codes may redirect to third-party platforms.</li>
      <li>Muftwater is not responsible for third-party content or privacy.</li>
      <li>QR interaction is voluntary.</li>
    </ul>

    <h3>Limitation of Liability</h3>
    <p>
      Muftwater is not liable for any direct or indirect damages arising from the use of its services.
      Use of services is at the user’s own risk.
    </p>

    <h3>Health and Safety Disclaimer</h3>
    <p>
      While reasonable measures are taken to ensure water quality, external factors may affect distribution.
      Users are advised to exercise personal discretion.
    </p>

    <h3>Payments and Refunds</h3>
    <ul>
      <li>Payments must follow agreed campaign terms.</li>
      <li>Refunds are evaluated on a case-by-case basis.</li>
      <li>Refunds may be withheld in cases of misuse or policy violations.</li>
    </ul>

    <h3>Termination</h3>
    <p>
      Muftwater may suspend or terminate services due to violations or legal requirements.
      Prior obligations remain unaffected.
    </p>

    <h3>Governing Law</h3>
    <p>
      These terms are governed by the laws of India.
      Disputes fall under the jurisdiction of Noida, Uttar Pradesh courts.
    </p>

    <h3>Changes to Terms</h3>
    <p>
      Muftwater may update these terms at any time.
      Continued use of services implies acceptance of the updated terms.
    </p>

  </div>
</section>
<script src="script.js"></script>

<!-- FOOTER -->
<div id="footer"></div>

<script>
fetch("footer.php")
  .then(res => res.text())
  .then(data => document.getElementById("footer").innerHTML = data);
</script>

</body>
</html>
