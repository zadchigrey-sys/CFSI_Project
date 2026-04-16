<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CFSI Landing Page</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    scroll-behavior: smooth;
}

html {
    scroll-padding-top: 90px; /* space for fixed header */
}

body {
    color: white;
    background-color: #1e3a8a;
}

/* ===== HEADER ===== */
header {
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px;
    background-color: rgba(26, 89, 184, 0.85);
}

.logo-container {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo-container img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.logo-container h1 {
    font-size: 28px;
}

/* NAV BUTTONS */
nav a {
    text-decoration: none;
    color: white;
    margin-left: 12px;
    padding: 6px 12px;
    background-color: #1e3a8a;
    border-radius: 20px;
    transition: 0.3s ease-in-out;
    display: inline-block;
}

nav a:hover {
    background-color: #FFD700;
    color: #000;
    transform: scale(1.05);
}

/* ===== QUOTE ===== */
.quote {
    text-align: center;
    padding: 13px;
    font-size: 23px;
    font-style: italic;
    font-weight: bold;
    color: gold;
    margin-top: 90px;
    background: transparent;
}

/* ===== HERO SECTION ===== */
.hero {
    height: 90vh;
    background-image: url('https://static.wixstatic.com/media/38a705_c47b28e6563744d7967ea2abd42c1e1a~mv2.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
    position: relative;
}

.hero::after {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.5);
}

.hero-content {
    position: relative;
    z-index: 1;
    color: white;
}

.hero h2 {
    font-size: 48px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    max-width: 600px;
    margin: auto;
}

.login-btn {
    margin-top: 30px;
    padding: 12px 30px;
    background-color: #1e3a8a;
    border: none;
    border-radius: 25px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.login-btn:hover {
    background-color: #60a5fa;
    color: #000;
}

/* ===== SECTIONS ===== */
section {
    padding: 80px 50px;
    min-height: 100vh;
    background-color: rgba(30, 58, 138, 0.8);
    border-radius: 15px;
    margin: 20px auto;
}

/* ===== HISTORY CONTAINER ===== */
.history-container {
    background-color: rgba(255, 255, 255, 0.1);
    border-left: 5px solid gold;
    padding: 20px 25px;
    margin-top: 30px;
    border-radius: 10px;
}

.history-container h3 {
    font-size: 28px;
    margin-bottom: 15px;
    color: gold;
}

.history-container p {
    font-size: 16px;
    line-height: 1.6;
}

/* ===== HYMNS + MISSION/VISION FLEX ===== */
.about-flex-container {
    display: flex;
    gap: 30px;
    margin-top: 30px;
    flex-wrap: wrap; /* stacks on small screens */
}

.hymn-container, .mission-container {
    flex: 1;
    background-color: rgba(255, 255, 255, 0.1);
    border-left: 5px solid gold;
    padding: 20px 25px;
    border-radius: 10px;
    min-width: 300px;
}

.hymn-container h3, .mission-container h3 {
    font-size: 28px;
    margin-bottom: 15px;
    color: gold;
}

.hymn-container p, .mission-container p, .mission-container li {
    font-size: 16px;
    line-height: 1.6;
}

.mission-container ol {
    padding-left: 20px;
}

/* ===== CONTACT / CONNECT ===== */
#contact {
    border: 3px solid gold;
    border-radius: 15px;
    padding: 30px;
    background-color: rgba(30, 58, 138, 0.85);
    margin: 20px auto;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.contact-info p, .social-media h3, .social-media a, .quick-links h3, .quick-links ul {
    font-size: 16px;
    margin-bottom: 10px;
    color: white;
}

.social-media a {
    color: #FFD700;
    text-decoration: none;
    margin-right: 10px;
}

.social-media a:hover {
    text-decoration: underline;
}

.map-container iframe {
    width: 100%;
    height: 300px;
    border: 0;
    border-radius: 10px;
}

.quick-links ul {
    list-style-type: disc;
    padding-left: 20px;
}

.quick-links a {
    color: #FFD700;
    text-decoration: none;
}

.quick-links a:hover {
    text-decoration: underline;
}

/* ===== LOGIN MODAL ===== */
.modal {
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    color: black;
    padding: 30px;
    border-radius: 15px;
    width: 300px;
    text-align: center;
    position: relative;
}

.modal-content input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
}

.modal-content button {
    width: 100%;
    padding: 10px;
    background: #1e3a8a;
    color: white;
    border: none;
    cursor: pointer;
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    cursor: pointer;
    font-size: 20px;
}

/* ===== FOOTER ===== */
footer {
    background-color: rgba(26, 89, 184, 0.9);
    text-align: center;
    padding: 20px;
    font-size: 16px;
    margin-top: 50px;
}
</style>
</head>
<body>

<header>
    <div class="logo-container">
        <img src="https://th.bing.com/th/id/OIP.3PWQE-n8LFQ82CrIy9fg1gHaHa">
        <h1>CHILDREN OF FATIMA SCHOOL, INC.</h1>
    </div>
    

    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Connect</a>
        <a href="#" onclick="openModal()">Log In</a>
    </nav>
</header>

<div class="quote">
    "We don't just school our learners, We educate them. Fatimanians apply VALUES"
</div>

<!-- ===== HERO ===== -->
<section class="hero" id="home">
    <div class="hero-content">
        <h2>Welcome to CFSI</h2>
        <p>Supporting and empowering children through care, faith, and service.</p>
        <button class="login-btn" onclick="openModal()">Log In</button>
    </div>
</section>

<!-- ===== ABOUT + HISTORY + HYMNS & MISSION/VISION ===== -->
<section id="about">
    <h2>About CFSI</h2>
    <p>Children of Fatima School, Inc. (CFSI) is committed to nurturing learners with faith, values, and academic excellence. Our programs are designed to educate, empower, and shape the future of our learners.</p>

    <div class="history-container">
        <h3>Brief History of CFSI</h3>
        <p>Founded and established in October 1995, the Children of Fatima School, Inc. (Main Campus) is located at Dau, Mabalacat, Pampanga. The persons behind were MS. MA. PRESENTACION G. PINEDA and MR. WILFREDO R. JESALVA, who became its first principal, with the support of MR. ALEJANDRO F. PINEDA and MRS. VICTORIA G. PINEDA.</p>
        <p>Through the years, Children of Fatima School, Inc. has struggled to expand in area, in school plant, in enrollment, and in its services not only to its population but to the community. It has identified itself as contributions to the locality’s academic upliftment through the promotion of all DepEd supported programs.</p>
        <p>Backed by its outstanding performance in Dau, CFSI’s educational services were extended to the other areas of Pampanga, thus was established Children of Fatima School of Mabalacat, Inc. located at San Francisco Mabalacat, Pampanga in 2002 and Children of Fatima School of Sto. Tomas, Inc. located at San Matias, Sto. Tomas, Pampanga in 2005.</p>
        <p>Today CFSI continues to develop in each member of the school community a love for learning, work for academic excellence for the betterment of themselves and to be of service to others.</p>
    </div>

    <div class="about-flex-container">
        <div class="hymn-container">
            <h3>CFSI Hymn</h3>
            <p>Like a bright morning star<br>
            Fatimanians came from afar<br>
            United by one vision<br>
            Strengthened by will and conviction</p>

            <p>O, Children of Fatima<br>
            Arise, accomplish the mission<br>
            O, Children of Fatima<br>
            We entrust to you our ambition</p>

            <p>With united hearts and minds<br>
            Lead everyone to the right path<br>
            By the wisdom that binds<br>
            And the spirit that spurs us on</p>

            <p>CFSI we hail you<br>
            Our Alma Mater our guide<br>
            CFSI we salute you<br>
            May you take us far and wide</p>
        </div>

        <div class="mission-container">
            <h3>Mission</h3>
            <p>The academic community of Children of Fatima School, Inc. commits themselves to protect and promote the right of every learner to quality and complete basic education where:</p>
            <ol>
                <li>Students are provided with a safe and motivating environment.</li>
                <li>Teachers facilitate learning and constantly nurture every Fatimanian.</li>
                <li>Administrators, staff, and stakeholders share responsibility to ensure a supportive and safe-motivating environment for effective learning to happen and develop life-long learners.</li>
            </ol>

            <h3>Vision</h3>
            <p>CFSI envisions students whose values and competencies enable them to realize and utilize their full potential which may contribute to the furtherance of the quality of life in their respective communities and in the wider circle of society.</p>
        </div>
    </div>
</section>

<!-- ===== CONTACT / CONNECT ===== -->
<section id="contact">
    <h2>Connect with Us</h2>

    <div class="contact-info">
        <p><strong>Email:</strong> info@cfsi.edu</p>
        <p><strong>Phone:</strong> +63 912 345 6789</p>
        <p><strong>Address:</strong> 123 Fatima St., Manila, Philippines</p>
        <p><strong>Office Hours:</strong> Mon-Fri 8:00 AM - 5:00 PM</p>
    </div>

    <div class="social-media">
        <h3>Follow Us</h3>
        <a href="https://www.facebook.com/profile.php?id=100057246438734" target="_blank">Facebook</a> |
        
    </div>

    <div class="map-container">
        <h3>Find Us Here</h3>
        <iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.7262119973293!2d120.70919407424559!3d15.00789598552818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f78a063afa5d%3A0x93ff749722eb9500!2sChildren%20Of%20Fatima%20School%2C%20Inc.!5e0!3m2!1sen!2sph!4v1776306376523!5m2!1sen!2sph"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
    </div>

    <div class="quick-links">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="#admissions">How to Enroll?</a></li>
            <li><a href="#calendar">School Calendar</a></li>
            <li><a href="#programs">Programs Offered</a></li>
        </ul>
    </div>
</section>

<!-- ===== LOGIN MODAL ===== -->
<div class="modal" id="loginModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Login</h2>
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button>Login</button>
    </div>
</div>

<!-- ===== FOOTER ===== -->
<footer>
    &copy; 2026 Children of Fatima School, Inc. All rights reserved.
     <br>
    <span style="font-size: 12px; display: block; margin-top: 5px;">
        Dau, Mabalacat City, Pampanga | SHS Mabiga, Mabalacat City, Pampanga | 
        San Francisco, Mabalacat City, Pampanga | Sto. Tomas, Pampanga
    </span>
</footer>

<script>
function openModal() {
    document.getElementById("loginModal").style.display = "flex";
}
function closeModal() {
    document.getElementById("loginModal").style.display = "none";
}
window.onclick = function(event) {
    let modal = document.getElementById("loginModal");
    if(event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>