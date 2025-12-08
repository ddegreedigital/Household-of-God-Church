<?php include 'component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Responsive Navbar with Nested Dropdown">
  <title>HOUSEHOLD OF GOD CHURCH</title>
  <link rel="stylesheet" href="css/style.css">
  <script defer src="js/script.js"></script>
  <!-- CDN LINKS -->
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <style>
    /* Popup Modal Styles */
    .welcome-popup .modal-content {
      background: url('./images/church-background.png') no-repeat center center/cover;
      border-radius: 15px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      text-align: center;
      overflow: hidden;
      padding: 0;
      max-width: 90%;
      margin: 0 auto;
    }

    .welcome-popup .modal-dialog {
      max-width: 800px;
      width: 90%;
      margin: 1.75rem auto;
      height: auto;
      display: flex;
      align-items: center;
    }

    .welcome-popup .modal-header {
      border-bottom: none;
      padding: 1rem 2rem;
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
      justify-content: center;
      position: relative;
    }

    .welcome-popup .modal-body {
      padding: 1rem;
      background: transparent;
      /* Removed white background */
      display: flex;
      flex-direction: column;
      align-items: center;
      border-radius: 0 0 15px 15px;
    }

    .welcome-popup h2 {
      color: #000000;
      font-weight: 700;
      margin-bottom: 1rem;
      font-size: clamp(1.2rem, 4vw, 2.5rem);
      text-shadow: 1px 1px 5px rgba(255, 255, 255, 0.8);
      /* Added text shadow for readability */
    }

    .welcome-popup p {
      color: #fff;
      /* Changed text color to white for visibility */
      margin-bottom: 0.75rem;
      line-height: 1.4;
      font-size: clamp(0.8rem, 2.5vw, 1.2rem);
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
      /* Added text shadow for readability */
    }

    .countdown-timer {
      font-weight: 600;
      color: white;
      margin: 1rem 0;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.3rem;
      flex-wrap: wrap;
    }

    .countdown-timer span {
      background: rgba(0, 0, 0, 0.7);
      /* Adjusted background for better contrast */
      color: #fff;
      padding: 0.3rem;
      border-radius: 5px;
      min-width: 40px;
      text-align: center;
      font-size: clamp(0.7rem, 2vw, 1rem);
      display: flex;
      flex-direction: column;
    }

    .countdown-timer span small {
      font-size: clamp(0.5rem, 1.5vw, 0.8rem);
      color: #ccc;
      margin-top: 2px;
    }

    .welcome-popup .btn-close {
      background-color: #fff;
      border-radius: 50%;
      padding: 0.3rem;
      opacity: 0.8;
      transition: opacity 0.3s;
      position: absolute;
      right: 0.5rem;
      top: 0.5rem;
    }

    .welcome-popup .btn-close:hover {
      opacity: 1;
    }

    .welcome-popup .btn-primary,
    .welcome-popup .btn-secondary {
      background-color: #000000;
      border-color: #000000;
      color: #ffc107;
      padding: 0.5rem 1.5rem;
      font-size: clamp(0.9rem, 2.5vw, 1.1rem);
      border-radius: 8px;
      transition: all 0.3s ease;
      margin: 0.3rem;
    }

    .welcome-popup .btn-primary:hover,
    .welcome-popup .btn-secondary:hover {
      background-color: #ffc107;
      border-color: #ffc107;
      color: #000000;
      transform: translateY(-2px);
    }

    .video-container {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      height: clamp(150px, 40vw, 400px);
      margin-bottom: 1rem;
    }

    .video-container video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .marquee-container {
      width: 100%;
      overflow: hidden;
      margin: 0.5rem 0;
    }

    .marquee-content {
      display: flex;
      animation: marquee 10s linear infinite;
    }

    .marquee-content p {
      margin: 0 1rem;
      font-size: clamp(0.8rem, 2.5vw, 1.2rem);
      color: #fff;
      /* Changed text color to white for visibility */
      white-space: nowrap;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
      /* Added text shadow for readability */
    }

    @keyframes marquee {
      0% {
        transform: translateY(0);
      }

      20% {
        transform: translateY(0);
      }

      25% {
        transform: translateY(-100%);
      }

      45% {
        transform: translateY(-100%);
      }

      50% {
        transform: translateY(-200%);
      }

      70% {
        transform: translateY(-200%);
      }

      75% {
        transform: translateY(-300%);
      }

      95% {
        transform: translateY(-300%);
      }

      100% {
        transform: translateY(0);
      }
    }

    .fade-video {
      transition: opacity 1s ease-in-out;
    }

    .fade-out {
      opacity: 0;
    }

    .fade-in {
      opacity: 1;
    }

    .streaming-now {
      position: absolute;
      top: 5px;
      left: 5px;
      background-color: #ff0000;
      color: #fff;
      padding: 0.3rem 0.8rem;
      border-radius: 5px;
      font-weight: bold;
      z-index: 10;
      font-size: clamp(0.6rem, 2vw, 0.9rem);
    }

    /* Hero Section */
    .hero-section .carousel-item {
      height: clamp(200px, 50vh, 500px);
    }

    .carousel-overlay {
      padding: 1rem;
    }

    .carousel-overlay h1 {
      font-size: clamp(1.5rem, 5vw, 3rem);
    }

    .carousel-overlay p {
      font-size: clamp(0.9rem, 2.5vw, 1.2rem);
    }

    .watch-btn {
      padding: 0.5rem 1rem;
      font-size: clamp(0.9rem, 2.5vw, 1.1rem);
    }

    /* About Church Section */
    .church-image {
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .church-title {
      font-size: clamp(1.5rem, 4vw, 2.5rem);
    }

    .church-text {
      font-size: clamp(0.9rem, 2.5vw, 1.1rem);
    }

    /* Watch Sermon Section */
    .sermon-card {
      height: 100%;
    }

    .sermon-image {
      width: 100%;
      height: auto;
    }

    /* Programme Section */
    .programme-card {
      height: 150px;
    }

    .programme-title {
      font-size: clamp(0.9rem, 2.5vw, 1.2rem);
    }

    /* Contact Section */
    .contact-info p {
      font-size: clamp(0.8rem, 2vw, 1rem);
    }

    .form-group input,
    .form-group textarea {
      font-size: clamp(0.8rem, 2vw, 1rem);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .welcome-popup .modal-dialog {
        margin: 0.5rem;
      }

      .welcome-popup .modal-content {
        max-width: 95%;
      }

      .video-container {
        height: clamp(120px, 35vw, 200px);
      }

      .hero-section .carousel-item {
        height: clamp(150px, 40vh, 300px);
      }

      .church-row {
        flex-direction: column;
      }

      .church-image {
        margin-bottom: 1rem;
      }

      .sermon-card {
        margin-bottom: 1rem;
      }

      .programme-card {
        height: 120px;
      }

      .contact-box {
        padding: 0.5rem;
      }
    }

    @media (max-width: 576px) {
      .welcome-popup .modal-body {
        padding: 0.5rem;
      }

      .countdown-timer {
        gap: 0.2rem;
      }

      .countdown-timer span {
        min-width: 30px;
        padding: 0.2rem;
      }

      .countdown-timer span small {
        font-size: clamp(0.4rem, 1.5vw, 0.6rem);
      }

      .button-group {
        flex-direction: column;
      }

      .button-group a {
        width: 100%;
        margin: 0.2rem 0;
      }

      .carousel-overlay {
        padding: 0.5rem;
      }

      .church-title {
        font-size: clamp(1.2rem, 4vw, 1.8rem);
      }

      .church-text {
        font-size: clamp(0.8rem, 2.5vw, 1rem);
      }

      .sermon-card .p-2 {
        padding: 0.3rem;
      }

      .programme-section .row {
        flex-direction: column;
        align-items: center;
      }

      .programme-card {
        width: 80%;
        margin-bottom: 1rem;
      }
    }
  </style>
</head>

<body>
  <?php renderHeader(); ?>
  <!-- WELCOME POPUP MODAL -->
  <div class="modal fade welcome-popup" id="welcomePopup" tabindex="-1" aria-labelledby="welcomePopupLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="welcomePopupLabel">Welcome to Household of God Church</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="video-container">
            <div class="streaming-now">Streaming Now - Apokalupsis</div>
            <video id="serviceVideo" controls muted preload="auto" autoplay class="fade-video">
              <source src="videos/Apokalupsis.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
          <p>Sundays at 7:00 AM</p>
          <p>Plot 4 HouseHold of God Street, Off Kudirat Abiola Way, Ikeja, Lagos – Nigeria</p>
          <p>Church Online Starting In</p>
          <div class="countdown-timer" id="countdownTimer">
            <span id="days">00</span><small>Days</small>
            <span id="hours">00</span><small>Hours</small>
            <span id="minutes">00</span><small>Minutes</small>
            <span id="seconds">00</span><small>Seconds</small>
          </div>
          <div class="marquee-container">
            <div class="marquee-content">
              <p>Watch Apokalupsis every Sunday at 7AM on [Radio Channel]</p>
              <p>Join us for worship, experience God's presence, and grow in faith.</p>
              <p>Discover the transforming power of God's love at Household of God Church.</p>
            </div>
          </div>
          <div class="button-group">
            <a href="http://localhost/Church-website-main/media/gallery.php" class="btn btn-primary">Watch More</a>
            <a href="http://localhost/Church-website-main/about/aboutchurch.php" class="btn btn-secondary">Discover Our Church</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- HERO SECTION -->
  <div class="hero-section mt-3 pt-2">
    <div id="churchCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('images/ca1.png');">
          <div class="carousel-overlay">
            <p>Welcome to</p>
            <h1>HOUSEHOLD OF GOD CHURCH</h1>
            <p>Join us in worship, experience God's presence, and grow in faith.</p>
            <p class="service-time"><i class="fa-regular fa-calendar-days"></i> Sunday: 9 AM – Lagos, Nigeria</p>
            <a href="http://localhost/Church-website-main/about/aboutchurch.php" class="watch-btn"><i class="fa fa-video"></i> Watch Live</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/ca3.png');">
          <div class="carousel-overlay">
            <p>Experience</p>
            <h1>GOD'S LOVE</h1>
            <p>Come as you are and encounter the transforming power of God.</p>
            <p class="service-time"><i class="fa-regular fa-calendar-days"></i> Wednesday Bible Study: 6 PM</p>
            <a href="http://localhost/Church-website-main/about/aboutchurch.php" class="watch-btn"><i class="fa-solid fa-video"></i> Watch Live</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/Rectangle 4.png');">
          <div class="carousel-overlay">
            <p>Join Our</p>
            <h1>COMMUNITY</h1>
            <p>Find your place in our growing family of believers.</p>
            <p class="service-time"><i class="fa-regular fa-calendar-days"></i> Friday Prayer: 6 PM</p>
            <a href="http://localhost/Church-website-main/about/aboutchurch.php" class="watch-btn"><i class="fa-solid fa-video"></i> Watch Live</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#churchCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#churchCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <div class="custom-indicators">
        <div class="custom-indicator active" data-bs-target="#churchCarousel" data-bs-slide-to="0"></div>
        <div class="custom-indicator" data-bs-target="#churchCarousel" data-bs-slide-to="1"></div>
        <div class="custom-indicator" data-bs-target="#churchCarousel" data-bs-slide-to="2"></div>
      </div>
    </div>
  </div>

  <!-- ABOUT CHURCH SECTION -->
  <div class="container church-section py-3">
    <div class="row align-items-stretch church-row">
      <div class="col-12 col-md-5 d-flex mb-3 mb-md-0">
        <div class="w-100 h-100">
          <img src="images/ca1.png" alt="Church Building" class="church-image h-100 w-100 object-fit-cover rounded">
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex">
        <div class="d-flex flex-column justify-content-center w-100">
          <h2 class="church-title">A CHURCH WHERE GRACE MEETS GLORY</h2>
          <p class="church-text">
            The young ministry had its inaugural Sunday morning service on the 1st of February, 1987 in his living room, then in the Ikeja area of Lagos state. As membership of the young but peculiar church grew into the hundreds and thousands, the surrounding grounds of his house became sitting area for the overspill from the living room.
            <br><br>
            The young ministry had its inaugural Sunday morning service on the 1st of February, 1987 in his living room, then in the Ikeja area of Lagos state.
          </p>
          <div class="text-start mt-2">
            <a href="http://localhost/Church-website-main/about/aboutchurch.php" class="btn-see-more">See More. . .</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- WATCH SERMON SECTION -->
  <div class="watch-sermon py-3">
    <div class="container">
      <h2 class="text-center mb-3">WATCH SERMONS</h2>
      <div class="row g-3">
        <div class="col-6 col-md-3">
          <div class="sermon-card bg-black text-warning">
            <img src="images/hog-logo.png" alt="Sunday Sermon" class="img-fluid sermon-image">
            <div class="p-2">
              <h5>Sunday Sermon</h5>
              <p class="text-white">Pastor Chris Okotie</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="sermon-card bg-black text-warning">
            <img src="images/hog-logo.png" alt="Christmas Carol" class="img-fluid sermon-image">
            <div class="p-2">
              <h5>Christmas Carol</h5>
              <p class="text-white">Pastor Chris Okotie</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="sermon-card bg-black text-warning">
            <img src="images/hog-logo.png" alt="Halleluyah Party" class="img-fluid sermon-image">
            <div class="p-2">
              <h5>Halleluyah Party</h5>
              <p class="text-white">Pastor Chris Okotie</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="sermon-card bg-black text-warning">
            <img src="images/hog-logo.png" alt="Youth Conference" class="img-fluid sermon-image">
            <div class="p-2">
              <h5>Youth Conference</h5>
              <p class="text-white">Pastor Chris Okotie</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-3">
        <a href="http://localhost/Church-website-main/media/gallery.php" class="btn btn-seemore">Watch Now</a>
      </div>
    </div>
  </div>

  <!-- PROGRAMME SECTION -->
  <div class="container programme-section py-3">
    <h2 class="text-center fw-bold mb-3">PROGRAMMES</h2>
    <div class="row g-3 justify-content-center" id="programme-container">
      <div class="col-10 col-md-3 col-sm-6">
        <div class="programme-card" style="background-color: #f15c5c;">
          <div class="programme-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="programme-date">01</div>
          <div class="programme-month">02</div>
          <div class="programme-title">GRACE Programme</div>
        </div>
      </div>
      <div class="col-10 col-md-3 col-sm-6">
        <div class="programme-card" style="background-color: #000000;">
          <div class="programme-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="programme-date">01</div>
          <div class="programme-month">01</div>
          <div class="programme-title">Apokalupsis</div>
        </div>
      </div>
      <div class="col-10 col-md-3 col-sm-6">
        <div class="programme-card" style="background-color: #ffaa00;">
          <div class="programme-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="programme-date">01</div>
          <div class="programme-month">01</div>
          <div class="programme-title">Karis Award</div>
        </div>
      </div>
    </div>
    <div class="text-center mt-3" id="see-more-container">
      <button class="btn btn-seemore" data-bs-toggle="modal" data-bs-target="#programmeModal">See More</button>
    </div>
  </div>

  <!-- PROGRAMME MODAL -->
  <div class="modal fade" id="programmeModal" tabindex="-1" aria-labelledby="programmeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="programmeModalLabel">Our Programmes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="programme-modal-content">
          <!-- Event details will be dynamically populated by JavaScript -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ANNOUNCEMENTS SECTION -->
  <div class="announcement-section py-3">
    <div class="container">
      <h2 class="text-center fw-bold mb-3">ANNOUNCEMENTS</h2>
      <div class="row g-3" id="announcement-container">
        <!-- Announcement cards will be populated by JavaScript -->
      </div>
      <div class="text-center mt-3">
        <button class="btn btn-seemore" data-bs-toggle="modal" data-bs-target="#announcementModal">See More</button>
      </div>
    </div>
  </div>

  <!-- ANNOUNCEMENT MODAL -->
  <div class="modal fade" id="announcementModal" tabindex="-1" aria-labelledby="announcementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="announcementModalLabel">All Announcements</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="announcement-modal-content">
          <!-- Announcement details will be dynamically populated by JavaScript -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- BOOK SECTION -->
  <div class="section-container py-3">
    <div class="container">
      <div class="row">
        <!-- Left Column -->
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <h3 class="highlight-title">THE LAST OUTCAST</h3>
          <p>
            Who is the Last Outcast? | What is the mystery of iniquity?<br>
            Who is the antichrist? | What is the religion of the antichrist?<br>
            How will the antichrist enter our world?<br>
            Find out in <span class="fw-bold">THE LAST OUTCAST</span>
          </p>
          <img src="images/book.png" alt="The Last Outcast Book" class="book-img">
        </div>
        <!-- Right Column -->
        <div class="col-12 col-md-6">
          <div class="row mb-2">
            <div class="col-4">
              <hr>
            </div>
            <div class="right-border-title col-4">Huperballó Megethos</div>
            <div class="col-4">
              <hr>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col-5 col-sm-5">
              <img src="images/pastor.jpg" alt="Rev. Chris Okotie" class="profile-img mb-2" />
              <div class="author-info">Rev. Chris Okotie</div>
              <div class="author-subtitle">Pastor, Household of God Church</div>
            </div>
            <div class="col-7 col-sm-7">
              <p>
                And what is the exceeding greatness of his power to us-ward who believe, according to the working of his mighty power, Which he wrought in Christ, when he raised him from the dead, and set him at his own right hand in the heavenly places, Far above all principality, and power, and might, and dominion, and every name that is named, not only in this world, but also in that which is to come: And hath put all things under his feet, and gave him to be the head over all things to the church, Which is his body, the fulness of him that filleth all in all. Ephesians 1:19-23
              </p>
              <button class="btn btn-seemore" data-bs-toggle="modal" data-bs-target="#bookModal">See More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- BOOK MODAL -->
  <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookModalLabel">THE LAST OUTCAST</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Who is the Last Outcast? | What is the mystery of iniquity?</p>
          <p>Who is the antichrist? | What is the religion of the antichrist?</p>
          <p>How will the antichrist enter our world?</p>
          <p>Find out in <strong>THE LAST OUTCAST</strong></p>
          <h5>Huperballó Megethos</h5>
          <p>
            And what is the exceeding greatness of his power to us-ward who believe, according to the working of his mighty power, Which he wrought in Christ, when he raised him from the dead, and set him at his own right hand in the heavenly places, Far above all principality, and power, and might, and dominion, and every name that is named, not only in this world, but also in that which is to come: And hath put all things under his feet, and gave him to be the head over all things to the church, Which is his body, the fulness of him that filleth all in all. Ephesians 1:19-23
          </p>
          <p>Rev. Chris Okotie<br>Pastor, Household of God Church</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTACT SECTION -->
  <div class="contact-section py-3" id="contact-section">
    <div class="container">
      <div class="row align-items-start g-3">
        <!-- Left column: Contact Info -->
        <div class="col-12 col-lg-6 d-flex flex-column left-column mb-3 mb-lg-0">
          <h3 class="fw-bold">SEND US A MESSAGE</h3>
          <p class="text-muted">
            Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.
          </p>
          <div class="contact-info">
            <p><i class="fas fa-location-dot"></i> Plot 4 HouseHold of God Street, Off Kudirat Abiola Way, Clay Bus–Stop, Ikeja, Lagos – Nigeria</p>
            <p><i class="fas fa-envelope"></i> info@householdofgodchurch.org</p>
            <p><i class="fas fa-phone"></i> +234 813 6633 494, +234 702 6828 318</p>
          </div>
        </div>
        <!-- Right column: Form -->
        <div class="col-12 col-lg-6">
          <div class="contact-box">
            <form>
              <h4 class="">CONTACT FORM</h4>
              <p>Kindly fill the form below to reach out to us</p>
              <div class="form-group mb-2">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" placeholder="Full Name" required />
              </div>
              <div class="form-group mb-2">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" placeholder="Email Address" required />
              </div>
              <div class="form-group mb-2">
                <i class="fas fa-tag"></i>
                <input type="text" class="form-control" placeholder="Subject" required />
              </div>
              <div class="form-group mb-2">
                <i class="fas fa-comment-dots"></i>
                <textarea class="form-control" rows="3" placeholder="Write your message here..." required></textarea>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-custom">
                  <i class="fas fa-paper-plane me-1"></i> Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER SECTION -->
  <?php renderFooter(); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // ===============================
      //  DATA SECTION
      // ===============================
      const apocalypseData = [{
        type: "Apokalupsis",
        title: "The Beginning of the End",
        date: "Jan 12, 2025",
        description: "Join us for worship, word, and celebration as we begin the new year with divine insight into the End Times.",
        src: "videos/Apokalupsis.mp4",
        intro: "videos/intro.mp4"
      }];

      const selectedVideoTitle = "The Beginning of the End";
      const selectedVideo = apocalypseData.find(v => v.title === selectedVideoTitle);

      // ===============================
      //  MODAL INITIALIZATION
      // ===============================
      const welcomeModal = new bootstrap.Modal(document.getElementById('welcomePopup'), {
        backdrop: 'static',
        keyboard: false
      });
      welcomeModal.show();

      // ===============================
      //  SERVICE COUNTDOWN LOGIC
      // ===============================
      const serviceTimes = [{
        day: 'Sunday',
        time: '07:00:00',
        name: 'Apokalupsis'
      }, ];

      function getNextService() {
        const now = new Date();
        const currentDay = now.getDay();
        const currentTime = now.getTime();
        let nextService = null;
        let minDiff = Infinity;

        serviceTimes.forEach(service => {
          const serviceDate = new Date(now);
          const [hours, minutes, seconds] = service.time.split(':').map(Number);
          serviceDate.setHours(hours, minutes, seconds, 0);
          const dayIndex = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'].indexOf(service.day);
          let diff = dayIndex - currentDay;
          if (diff < 0 || (diff === 0 && now.getHours() >= hours)) diff += 7;
          serviceDate.setDate(now.getDate() + diff);
          const diffTime = serviceDate.getTime() - currentTime;
          if (diffTime < minDiff) {
            minDiff = diffTime;
            nextService = {
              date: serviceDate,
              name: service.name
            };
          }
        });

        return nextService;
      }

      const videoEl = document.getElementById('serviceVideo');
      let hasPlayedIntro = false;

      function updateCountdown() {
        const nextService = getNextService();
        if (!nextService) return;

        const now = new Date().getTime();
        const remaining = nextService.date.getTime() - now;

        if (remaining <= 0 && !hasPlayedIntro) {
          hasPlayedIntro = true;
          videoEl.src = selectedVideo.src;
          videoEl.load();
          videoEl.play();
          return;
        }

        const days = Math.floor(remaining / (1000 * 60 * 60 * 24));
        const hours = Math.floor((remaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((remaining % (1000 * 60)) / 1000);

        document.getElementById('days').textContent = String(days).padStart(2, '0');
        document.getElementById('hours').textContent = String(hours).padStart(2, '0');
        document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
        document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
      }

      setInterval(updateCountdown, 1000);
      updateCountdown();

      // ===============================
      //  EXISTING DATA AND LOGIC
      // ===============================
      const aboutData = {
        About: [{
            type: "about",
            category: "Church",
            year: "1987",
            title: "About Our Church",
            description: "The Household of God Church, founded in February 1987 in Lagos, Nigeria, began in Rev. Chris Okotie’s living room in Ikeja. As membership grew into hundreds and thousands, it expanded to become a nationally recognized ministry. The church is committed to extending care to the less privileged through its GRACE Programme, initiated in 1990, and its television ministry, APOKALUPSIS, spreading its spiritual mission across Nigeria.",
            image: "images/events/church.jpg",
            date: "1987-02-01",
            images: ["images/events/church.jpg"]
          },
          {
            type: "about",
            category: "Pastor",
            year: "1958",
            title: "About Our Pastor",
            name: "Rev. Chris Okotie",
            description: "Rev. Chris Okotie, born June 16, 1958, is the pastor of the Household of God Church International Ministries since February 1987. A law graduate from the University of Nigeria, Nsukka (1984), he also attended Grace Fellowship Bible School in Tulsa, Oklahoma. Before his ministry, he pursued a pop music career. Known for his integrity, he leads the annual GRACE Programme and Karis Awards, supporting Nigerian citizens through charitable efforts.",
            image: "images/events/pastor.jpg",
            date: "1958-06-16",
            location: "Lagos, Nigeria",
            images: ["images/events/pastor.jpg"]
          }
        ]
      };

      const departmentData = [{
          type: "department",
          name: "Choir",
          description: "Leads worship, praises, and inspires the congregation through music ministry."
        },
        {
          type: "department",
          name: "Ushering",
          description: "Ensures order, hospitality, and a welcoming atmosphere in all services."
        },
        {
          type: "department",
          name: "Youth",
          description: "Dedicated to raising godly youths, mentoring and empowering them for leadership."
        },
        {
          type: "department",
          name: "Media",
          description: "Manages live streaming, recordings, and church media content."
        },
        {
          type: "department",
          name: "Evangelism",
          description: "Reaches out to the community with the gospel."
        },
        {
          type: "department",
          name: "Prayer",
          description: "Intercedes for the church, community, and nation."
        },
        {
          type: "department",
          name: "Hospitality",
          description: "Creates a welcoming environment for all visitors."
        },
        {
          type: "department",
          name: "Bible Study",
          description: "Leads small group Bible study sessions."
        },
        {
          type: "department",
          name: "Children Ministry",
          description: "Provides teaching, games, and activities for children."
        },
        {
          type: "department",
          name: "Men's Fellowship",
          description: "Encourages men to grow in faith."
        },
        {
          type: "department",
          name: "Women's Fellowship",
          description: "Empowers women through fellowship and mentoring."
        },
        {
          type: "department",
          name: "Technical",
          description: "Handles lighting, sound, and technical support."
        },
        {
          type: "department",
          name: "Outreach",
          description: "Organizes community projects and outreach events."
        },
        {
          type: "department",
          name: "Finance",
          description: "Manages tithes, offerings, and financial stewardship."
        },
        {
          type: "department",
          name: "Hospital Ministry",
          description: "Visits hospitals to pray for the sick."
        },
        {
          type: "department",
          name: "Prayer Warriors",
          description: "Special intercessors for urgent prayer needs."
        },
        {
          type: "department",
          name: "Social Media",
          description: "Manages social media content and promotions."
        },
        {
          type: "department",
          name: "Event Planning",
          description: "Coordinates church programs and conferences."
        },
        {
          type: "department",
          name: "Mission",
          description: "Leads missions in communities and nations."
        },
        {
          type: "department",
          name: "Administration",
          description: "Handles administrative and clerical tasks."
        }
      ];

      const eventData = {
        Grace: [{
          type: "event",
          eventType: "Grace",
          title: "GRACE Programme",
          slogan: "Extending Care to the Less Privileged",
          description: "Initiated in 1990, the GRACE Programme supports charities like Sunshine Foundation and Pacelli School for the Blind, providing aid to the less privileged across Nigeria.",
          cordinator: "Rev. Chris Okotie",
          cordinatorTitle: "Pastor",
          cordinatorImage: "images/events/pastor.jpg",
          eventCategory: "Charity",
          date: "01,02",
          images: ["images/events/ca1.png"]
        }],
        Apokalupsis: [{
          type: "event",
          eventType: "Apokalupsis",
          title: "Apokalupsis",
          slogan: "Spreading God's Grace",
          description: "Launched in 1999, Apokalupsis is a television ministry broadcasting the church’s spiritual mission across Nigeria and beyond.",
          cordinator: "Rev. Chris Okotie",
          cordinatorTitle: "Pastor",
          cordinatorImage: "images/events/pastor.jpg",
          eventCategory: "Media",
          date: "01,01",
          images: ["images/events/ca3.png"]
        }],
        KarisAward: [{
          type: "event",
          eventType: "Karis Award",
          title: "Karis Award",
          slogan: "Honoring Unsung Heroes",
          description: "Started in 1996, the Karis Award recognizes and supports unrecognized Nigerian contributors for their impactful work in society.",
          cordinator: "Rev. Chris Okotie",
          cordinatorTitle: "Pastor",
          cordinatorImage: "images/events/pastor.jpg",
          eventCategory: "Award",
          date: "01,01",
          images: ["images/events/Rectangle 4.png"]
        }],
        QueenEsther: [{
          type: "event",
          eventType: "Queen Esther",
          title: "Queen Esther",
          slogan: "Celebrating Biblical Womanhood",
          description: "A women’s pageant initiated in 2006 to promote biblical values and empower women through faith and grace.",
          cordinator: "Rev. Chris Okotie",
          cordinatorTitle: "Pastor",
          cordinatorImage: "images/events/pastor.jpg",
          eventCategory: "Conference",
          date: "25,03",
          images: ["images/events/book.png"]
        }],
        HouseholdBirthday: [{
          type: "event",
          eventType: "Household Birthday",
          title: "Household Birthday Celebration",
          slogan: "Celebrating Life in Fellowship",
          description: "A monthly event started in 2005 to celebrate members’ birthdays, fostering community and fellowship.",
          cordinator: "Rev. Chris Okotie",
          cordinatorTitle: "Pastor",
          cordinatorImage: "images/events/pastor.jpg",
          eventCategory: "Fellowship",
          date: "01,01",
          images: ["images/events/hog-logo.png"]
        }]
      };

      const mediaData = [{
          type: "media",
          title: "Sunday Fellowship - January 2025",
          date: "Jan 12, 2025",
          description: "Join us for worship, word, and celebration as we began the new year.",
          src: "https://www.youtube.com/embed/ysz5S6PUM-U"
        },
        {
          type: "media",
          title: "Christmas Carol 2024",
          date: "Dec 20, 2024",
          description: "A night of joyful carols, praise and worship as we celebrated Christmas together.",
          src: "https://www.youtube.com/embed/jfKfPfyJRdk"
        },
        {
          type: "media",
          title: "Halleluyah Party 2024",
          date: "Dec 31, 2024",
          description: "An electrifying crossover service filled with music, joy and testimonies.",
          src: "https://www.youtube.com/embed/aqz-KE-bpKQ"
        },
        {
          type: "media",
          title: "Youth Conference 2024",
          date: "Aug 15, 2024",
          description: "Empowering the youth with purpose and vision.",
          src: "https://www.youtube.com/embed/ScMzIvxBSi4"
        },
        {
          type: "media",
          title: "Easter Service 2024",
          date: "Apr 9, 2024",
          description: "Celebrating the resurrection of our Lord and Savior.",
          src: "https://www.youtube.com/embed/tgbNymZ7vqY"
        }
      ];

      window.groupedData = Object.values(eventData).flat();
      window.siteData = {
        about: aboutData,
        departments: departmentData,
        events: window.groupedData,
        media: mediaData
      };

      const programmeModalContent = document.getElementById('programme-modal-content');
      const announcementContainer = document.getElementById('announcement-container');
      const announcementModalContent = document.getElementById('announcement-modal-content');

      function populateProgrammeModal() {
        let content = '';
        window.groupedData.forEach(event => {
          content += `
            <div class="event-item mb-3">
              <div class="row">
                <div class="col-4 col-md-4">
                  <img src="${event.images[0]}" alt="${event.title}" class="img-fluid event-image rounded">
                </div>
                <div class="col-8 col-md-8">
                  <h5 class="event-title">${event.title}</h5>
                  <p class="event-slogan"><em>${event.slogan}</em></p>
                  <p class="event-description">${event.description}</p>
                  <p class="event-coordinator"><strong>Coordinator:</strong> ${event.cordinator}, ${event.cordinatorTitle}</p>
                  <p class="event-category"><strong>Category:</strong> ${event.eventCategory}</p>
                  <p class="event-date"><strong>Date:</strong> ${event.date}</p>
                </div>
              </div>
            </div>
          `;
        });
        programmeModalContent.innerHTML = content;
      }

      function populateAnnouncementCards(announcements) {
        let content = '';
        announcements.forEach(announcement => {
          content += `
            <div class="col-6 col-md-4">
              <div class="announcement-card">
                <img src="${announcement.image}" alt="${announcement.title}" class="img-fluid announcement-image">
                <div class="p-2">
                  <h5>${announcement.title}</h5>
                  <p class="text-muted"><i class="fas fa-calendar-alt"></i> ${announcement.date}</p>
                  <p>${announcement.description}</p>
                </div>
              </div>
            </div>
          `;
        });
        announcementContainer.innerHTML = content;
      }

      function populateAnnouncementModal(announcements) {
        let content = '';
        announcements.forEach(announcement => {
          content += `
            <div class="announcement-item mb-3">
              <div class="row">
                <div class="col-4 col-md-4">
                  <img src="${announcement.image}" alt="${announcement.title}" class="img-fluid announcement-image rounded">
                </div>
                <div class="col-8 col-md-8">
                  <h5 class="announcement-title">${announcement.title}</h5>
                  <p class="announcement-date"><i class="fas fa-calendar-alt"></i> ${announcement.date}</p>
                  <p class="announcement-description">${announcement.description}</p>
                </div>
              </div>
            </div>
          `;
        });
        announcementModalContent.innerHTML = content;
      }

      fetch('announcements.json')
        .then(response => {
          if (!response.ok) throw new Error('Network response was not ok');
          return response.json();
        })
        .then(data => {
          window.siteData.announcements = data;
          populateAnnouncementCards(data);
          const announcementModal = document.getElementById('announcementModal');
          announcementModal.addEventListener('show.bs.modal', () => populateAnnouncementModal(data));
        })
        .catch(error => console.error('Error loading announcements:', error));

      const programmeModal = document.getElementById('programmeModal');
      programmeModal.addEventListener('show.bs.modal', populateProgrammeModal);
    });
  </script>
</body>

</html>