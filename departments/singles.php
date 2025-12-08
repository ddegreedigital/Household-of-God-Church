<?php include '../component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Singles Department</title>
  <link rel="stylesheet" href="../css/style.css" />
  <script defer src="../js/script.js"></script>
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

  <style>
    .church-section {
      padding: 60px 0;
    }

    .church-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #212529;
    }

    .hod-section {
      text-align: center;
    }

    .hod-card {
      background: #fff;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .hod-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .hod-section img {
      max-width: 250px;
      width: 100%;
      height: auto;
      border-radius: 15px;
      border: 3px solid #212529;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 1.5rem;
      transition: transform 0.3s ease;
    }

    .hod-section img:hover {
      transform: scale(1.05);
    }

    .church-text-card {
      background: #fff;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
    }

    .church-text-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .church-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #6C757D;
    }

    .hod-section h2 {
      font-size: 1.75rem;
      font-weight: 700;
      color: #212529;
      margin-bottom: 1rem;
    }

    .hod-section p {
      font-size: 1rem;
      color: #6C757D;
      margin-bottom: 1.5rem;
    }

    .hod-section a {
      color: #212529;
      text-decoration: none;
      font-weight: 500;
    }

    .hod-section a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .church-title {
        font-size: 2rem;
      }

      .hod-section img {
        max-width: 200px;
      }

      .hod-section h2 {
        font-size: 1.5rem;
      }

      .church-text {
        font-size: 1rem;
      }
    }

    @media (max-width: 576px) {
      .church-title {
        font-size: 1.75rem;
      }

      .hod-section img {
        max-width: 150px;
      }

      .hod-section h2 {
        font-size: 1.25rem;
      }

      .church-text {
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>
  <?php
  renderHeader();
  renderBanner('Singles Department');
  ?>

  <div class="container church-section">
    <h2 class="church-title pb-4 text-center">SINGLES DEPARTMENT</h2>
    <div class="row align-items-stretch church-row">
      <div class="col-md-5 hod-section">
        <div class="hod-card">
          <img src="../images/pastor.jpg" alt="Head of Department" class="mb-4">
          <h2>Bro. John Doe</h2>
          <p>The Singles Department is dedicated to empowering single adults through spiritual growth and community fellowship.</p>
          <a href="mailto:singles@householdofgodchurch.org">singles@householdofgodchurch.org</a>
        </div>
      </div>
      <div class="col-md-6 d-flex">
        <div class="church-text-card">
          <p class="church-text">
            The Singles Department at Household of God Church is committed to supporting single adults in their spiritual and personal journeys. We organize fellowship events, Bible study groups, and workshops to foster spiritual growth, build community, and encourage meaningful connections among singles.
            <br><br>
            Our programs include social gatherings, prayer meetings, and personal development seminars to equip singles for their walk with Christ. We work closely with other ministries to provide a supportive environment where single adults can thrive in faith and fellowship.
            <br><br>
            If you are a single adult looking to connect or volunteer with our department, please contact our department head.
          </p>
        </div>
      </div>
    </div>
  </div>

  <?php renderFooter(); ?>
</body>
</html>