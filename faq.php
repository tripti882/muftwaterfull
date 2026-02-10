<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Muft Water | FAQ</title>

<link rel="stylesheet" href="css/styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">

<style>
/* SMALL HERO */
/* .hero.small-hero{
  min-height:140px;
  padding:30px 0; */

/* } */
.hero.small-hero{
  min-height:140px;
  padding:0;
  display:flex;
  align-items:center;   /* vertical center */
  justify-content:center; /* horizontal center */
  text-align:center;
}


/* REMOVE GAP BETWEEN HERO & FAQ */
.hero.small-hero + .faq{
  margin-top:0;
  padding-top:20px;
}

/* FAQ STYLE */
.faq-accordion{max-width:900px;margin:auto}
.faq-box{
  background:#fff;
  border-radius:10px;
  margin-bottom:15px;
  box-shadow:0 4px 12px rgba(0,0,0,0.05);
  overflow:hidden;
}
.faq-question{
  width:100%;
  background:none;
  border:none;
  padding:20px 24px;
  font-size:1.05rem;
  font-weight:600;
  text-align:left;
  cursor:pointer;
  position:relative;
}
.faq-question::after{
  content:"+";
  position:absolute;
  right:22px;
  font-size:1.6rem;
  transition:.3s;
}
.faq-question.active::after{
  content:"−";
  transform:rotate(180deg);
}
.faq-answer{
  max-height:0;
  overflow:hidden;
  transition:max-height .3s ease;
}
.faq-answer p{
  padding:0 24px 20px;
  color:#555;
  line-height:1.6;
}

/* SPACE BEFORE FOOTER */
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
    <span class="hero-badge">Help Center</span>
    <h1>Frequently Asked Questions</h1>
    <p>Everything you need to know about Muftwater.</p>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="faq section-padding">
  <div class="container">
    <h2 class="section-title center">Need Answers? We’ve Got You.</h2>

    <div class="faq-accordion">

      <div class="faq-box">
        <button class="faq-question">What is Muftwater?</button>
        <div class="faq-answer">
          <p>Muftwater provides free drinking water to people at high footfall locations like malls, events, coaching hubs and public places. At the same time brands can advertise on our bottles, kiosks and carts with measurable engagement.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">Is the water really free?</button>
        <div class="faq-answer">
          <p>Yes the water is completely free for people. Brands sponsor the distribution by advertising with us.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">How does Muftwater help brands?</button>
        <div class="faq-answer">
          <p>We help brands reach people physically through water bottles and kiosks. People notice water ads more than digital ads. Brands get visibility, engagement and real leads through QR codes.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">What kind of advertising formats do you offer?</button>
        <div class="faq-answer">
          <p>We offer advertising on water kiosks, carts, disposable bottles and premium bottles like aluminum or cartons depending on campaign needs.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">Can any brand advertise with Muftwater?</button>
        <div class="faq-answer">
          <p>Yes startups, local businesses, corporates, event organizers and CSR teams can advertise with us as long as the brand aligns with public use.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">How is performance measured?</button>
        <div class="faq-answer">
          <p>We track impressions, QR scans, leads and engagement. Brands receive regular reports so they know exactly how the campaign is performing.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">Where does Muftwater currently operate?</button>
        <div class="faq-answer">
          <p>We are currently operating in Noida, Greater Noida and nearby NCR areas and expanding to more locations soon.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">Is Muftwater an NGO?</button>
        <div class="faq-answer">
          <p>No Muftwater is not an NGO. We are a performance marketing and media platform that uses free water as a medium.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">Can I run a short pilot campaign?</button>
        <div class="faq-answer">
          <p>Yes brands can start with a short pilot campaign to test performance before running a longer campaign.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">How can I advertise with Muftwater?</button>
        <div class="faq-answer">
          <p>You can contact us through the website, Instagram or WhatsApp to discuss campaign details and pricing.</p>
        </div>
      </div>

      <div class="faq-box">
        <button class="faq-question">Is the water safe and hygienic?</button>
        <div class="faq-answer">
          <p>Yes we ensure clean drinking water through trusted sources and maintain hygiene standards during distribution.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<div id="footer"></div>

<script>
fetch("footer.php").then(r=>r.text()).then(d=>footer.innerHTML=d);
</script>

<!-- <script>
document.querySelectorAll(".faq-question").forEach(btn=>{
  btn.onclick=()=>{
    const ans = btn.nextElementSibling;
    const open = btn.classList.contains("active");

    document.querySelectorAll(".faq-answer").forEach(a=>a.style.maxHeight=null);
    document.querySelectorAll(".faq-question").forEach(q=>q.classList.remove("active"));

    if(!open){
      btn.classList.add("active");
      ans.style.maxHeight = ans.scrollHeight + "px";
    }
  }
});
</script> --> 
<!-- <script src="script.js"></script>
    <script>
        document.getElementById('distributeForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);

            try {
                const response = await fetch('submit_distribute.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    // Show success modal and reset form
                    document.getElementById('successModal').classList.add('active');
                    document.body.style.overflow = 'hidden';
                    form.reset();
                } else {
                    const msg = result && result.message ? result.message : 'An error occurred while submitting your request.';
                    alert(msg);
                    if (result && result.errors) {
                        alert(result.errors.join('\n'));
                    }
                }
            } catch (error) {
                console.error('Error submitting distribute request:', error);
                alert('Unable to submit your request right now. Please try again later.');
            }
        });
    </script> -->
<script src="script.js"></script>

</body>
</html>
