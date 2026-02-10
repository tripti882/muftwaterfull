<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Muft Water | Privacy Policy</title>

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
    <span class="hero-badge">Legal</span>
    <h1>Privacy Policy</h1>
    <p>Your privacy matters to us.</p>
  </div>
</section>

<!-- POLICY SECTION -->
<section class="faq section-padding">
  <div class="container policy-content">

    <p><strong>Last Updated:</strong> [Add Date]</p>

    <p>
      This Privacy Policy describes how Muftwater collects, uses, stores and protects personal information when you visit our website or interact with our services. By using our website or services, you agree to the practices described in this policy.
    </p>

    <h3>Introduction</h3>
    <p>
      Muftwater is a brand and platform that provides free drinking water through kiosks, carts and bottles while enabling brands to advertise and engage with people through these formats. We respect your privacy and are committed to protecting the personal information you share with us.
    </p>

    <h3>Information We Collect</h3>
    <ul>
      <li><strong>Personal Information:</strong> Name, phone number, email address, company name and other details when you contact us, fill out a form, scan a QR code or communicate with us through WhatsApp, email or social media.</li>
      <li><strong>Usage Information:</strong> Pages visited, device type, browser type, IP address and general location.</li>
      <li><strong>Campaign Interaction Data:</strong> QR scan count, time, location and form responses submitted voluntarily.</li>
    </ul>

    <h3>How We Use Your Information</h3>
    <ul>
      <li>To respond to inquiries and requests</li>
      <li>To provide information about our services and campaigns</li>
      <li>To run and manage advertising and brand engagement campaigns</li>
      <li>To track and measure campaign performance</li>
      <li>To improve our website and user experience</li>
      <li>To communicate updates, offers or relevant information</li>
      <li>To comply with legal and regulatory requirements</li>
    </ul>

    <p>We do not sell personal data to third parties.</p>

    <h3>Sharing of Information</h3>
    <ul>
      <li><strong>With service providers:</strong> Limited data may be shared with trusted vendors under strict confidentiality.</li>
      <li><strong>With advertisers:</strong> Aggregated and anonymized campaign performance data only.</li>
      <li><strong>Legal requirements:</strong> Information may be disclosed if required by law or authority.</li>
    </ul>

    <h3>Data Security</h3>
    <p>
      We take reasonable and appropriate measures to protect your information from unauthorized access, loss, misuse or disclosure. However, no method of transmission over the internet is completely secure.
    </p>

    <h3>Data Retention</h3>
    <p>
      We retain personal information only as long as necessary to fulfill the purposes outlined in this policy or as required by law. Data is securely deleted or anonymized when no longer required.
    </p>

    <h3>Your Rights</h3>
    <ul>
      <li>Request access to your personal data</li>
      <li>Request correction of inaccurate data</li>
      <li>Request deletion of your personal data</li>
      <li>Withdraw consent for communication</li>
    </ul>

    <h3>Cookies and Tracking</h3>
    <p>
      Our website may use cookies or similar technologies to enhance user experience and analyze traffic. You can control cookies through your browser settings.
    </p>

    <h3>Third Party Links</h3>
    <p>
      Our website may contain links to third-party websites. We are not responsible for their privacy practices and encourage users to review their policies.
    </p>

    <h3>Changes to This Policy</h3>
    <p>
      We may update this Privacy Policy from time to time. Continued use of the website indicates acceptance of the updated policy.
    </p>

  </div>
</section>
<script src="script.js"></script>

<div id="footer"></div>

<script>
fetch("footer.php").then(r=>r.text()).then(d=>footer.innerHTML=d);
</script>

</body>
</html>
