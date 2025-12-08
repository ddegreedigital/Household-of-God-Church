<?php include '../component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Church</title>
  <link rel="stylesheet" href="../css/style.css" />
  <script defer src="../js/script.js"></script>
  <!-- CDN LINKS -->
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php renderHeader(); ?>

  <?php renderBanner('Our Church'); ?>

  <!-- BREADCRUMB NAVIGATION -->
  <div class="container mt-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="../about/aboutchurch.php">About</a></li>
        <li class="breadcrumb-item active" aria-current="page">Our Church</li>
      </ol>
    </nav>
  </div>

  <!-- ABOUT CHURCH SECTION -->
  <div class="container church-section py-5">
    <h2 class="church-title text-center mb-4">OUR CHURCH</h2>
    <div id="carouselExampleIndicators" class="carousel slide gap-3">
      <div class="carousel-inner mb-4 shadow-sm">
        <div class="carousel-item active">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                <img src="../images/Rectangle 4.png" alt="Founding and Early Growth" class="church-image w-100 h-100 object-fit-fill rounded-3" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100 p-3">
              <br>
              <br>
              <br>
              <br>
              
              <h3 class="fw-bold">Founding and Early Growth</h3>
                <p class="church-text">
                  The Household of God Church was founded on February 1, 1987, in a living room in Ikeja, Lagos. Rapid growth saw membership swell to thousands, with the surrounding grounds used for seating to accommodate the overspill, marking the church’s early rise as a spiritual hub.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                <img src="../images/ca1.png" alt="Relocation to Oregun" class="church-image w-100 h-100 object-fit-fill rounded-3" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100 p-3">
              <br>
              <br>
              <br>
              <br>
              
              <h3 class="fw-bold">Relocation to Oregun</h3>
                <p class="church-text">
                  By 1990, the church outgrew its original site and relocated to a renovated factory in Oregun, Ikeja, on December 19, 1992. This move marked a significant milestone, and the ministry now owns a vast expanse of land in the area, reflecting divine provision.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                <img src="../images/ca3.png" alt="GRACE Programme" class="church-image w-100 h-100 object-fit-fill rounded-3" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100 p-3">
              <br>
              <br>
              <br>
              <br>
              
              <h3 class="fw-bold">GRACE Programme</h3>
                <p class="church-text">
                  Launched in 1990, the GRACE Programme supports charities like Sunshine Foundation, Pacelli School for the Blind, Little Saints’ Orphanage, and Spinal Cord Injuries Association of Nigeria, each receiving 500,000 naira annually, extending care to the less privileged.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                <img src="../images/Rectangle 4.png" alt="Karis Award" class="church-image w-100 h-100 object-fit-fill rounded-3" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100 p-3">
              <br>
              <br>
              <br>
              <br>
              
              <h3 class="fw-bold">Karis Award</h3>
                <p class="church-text">
                  Introduced in 1996, the Karis Award honors Nigerians like Mallam Aminu Kano and Gani Fawehinmi (2010, posthumous) for unrecognized contributions. Integrated into the GRACE Programme, it offers a 2 million naira prize, with recipients often later recognized by the government.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                <img src="../images/ca3.png" alt="Apokalupsis Ministry" class="church-image w-100 h-100 object-fit-fill rounded-3" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100 p-3">
              <br>
              <br>
              <br>
              <br>
              
              <h3 class="fw-bold">Apokalupsis Ministry</h3>
                <p class="church-text">
                  The Apokalupsis television ministry, started in 1999, spreads God’s grace globally, earning a 2002 Nigerian Television Authority award. Messages are available online, with plans for live streaming, extending the church’s reach beyond its local assembly.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                <img src="../images/ca1.png" alt="Other Initiatives" class="church-image w-100 h-100 object-fit-fill rounded-3" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100 p-3">
              <br>
              <br>
              <br>
              <br>
              
              <h3 class="fw-bold">Other Initiatives</h3>
                <p class="church-text">
                  The church is building the Silver Citadel, a seven-storey Children’s Church. Monthly birthday celebrations began in 2005, fostering fellowship. The Queen Esther pageant, started in 2006, promotes biblical values for women, integrated into the GRACE Programme.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-custom-navigation d-flex align-items-center justify-content-center">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <?php renderFooter(); ?>
</body>

</html>