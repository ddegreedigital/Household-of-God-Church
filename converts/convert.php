<?php
include '../component.php';

$confirmation = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $phone   = htmlspecialchars($_POST['phone']);
    $contact = htmlspecialchars($_POST['contact']);

    // Confirmation modal content
    $confirmation = "
    <div class='modal fade' id='confirmationModal' tabindex='-1' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered'>
        <div class='modal-content border-gold bg-dark'>
          <div class='modal-header bg-gold text-dark'>
            <h5 class='modal-title fw-bold'>✅ Thank You!</h5>
            <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body text-white'>
            <p class='lead'>Your decision to follow Jesus is the greatest step of your life. 🎉</p>
            <p>We have received your details and will reach out to you soon.</p>
            <p class='fw-bold'>👉 You are not alone—Jesus is with you. Welcome to God’s family! 💖</p>
            <p class='text-end mb-0'>— Household of God Church</p>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          var confirmationModalEl = document.getElementById('confirmationModal');
          if (confirmationModalEl) {
              var confirmationModal = new bootstrap.Modal(confirmationModalEl);
              confirmationModal.show();
          }
      });
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Convert</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        :root {
            --gold: #FFD700;
            --dark: #1a1a1a;
            --light: #f8f9fa;
        }

        body {
            background: linear-gradient(135deg, var(--light) 0%, #e6e6e6 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .text-gold {
            color: var(--gold) !important;
        }

        .bg-gold {
            background-color: var(--gold) !important;
        }

        .border-gold {
            border-color: var(--gold) !important;
        }

        .card {
            border-radius: 1.5rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            background: var(--dark);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .form-control {
            border-radius: 0.75rem;
            border: 2px solid #ccc;
            background: #2a2a2a;
            color: #fff;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
            background: #333;
        }

        .form-label {
            position: relative;
            top: 0.5rem;
            transition: all 0.2s ease;
            color: #aaa;
        }

        .form-control:focus + .form-label,
        .form-control:not(:placeholder-shown) + .form-label {
            top: -1.5rem;
            font-size: 0.85rem;
            color: var(--gold);
        }

        .btn-theme {
            background: linear-gradient(90deg, var(--gold), #e6c200);
            color: #1a1a1a;
            font-weight: 600;
            border-radius: 0.75rem;
            padding: 0.75rem 2rem;
            transition: all 0.3s ease;
        }

        .btn-theme:hover {
            background: linear-gradient(90deg, #e6c200, var(--gold));
            transform: scale(1.05);
        }

        .step-card {
            display: none;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .step-card.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .progress-steps {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .step-indicator {
            width: 40px;
            height: 40px;
            background: #ccc;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .step-indicator.active {
            background: var(--gold);
        }

        .whatsapp-btn {
            background: linear-gradient(90deg, #25D366, #20c058);
            border: none;
            border-radius: 0.75rem;
            padding: 0.75rem 2rem;
            font-weight: 600;
            color: #fff;
            transition: all 0.3s ease;
        }

        .whatsapp-btn:hover {
            background: linear-gradient(90deg, #20c058, #25D366);
            transform: scale(1.05);
        }

        @media (max-width: 576px) {
            .card {
                padding: 1.5rem;
            }

            .btn-theme, .whatsapp-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <?php renderHeader(); ?>
    <?php renderBanner('New Convert'); ?>

    <div class="container py-5">
        <!-- Progress Steps -->
        <div class="progress-steps">
            <div class="step-indicator active" id="indicator1">1</div>
            <div class="step-indicator" id="indicator2">2</div>
            <div class="step-indicator" id="indicator3">3</div>
        </div>

        <!-- Step 1: Prayer of Salvation Section -->
        <div id="step1" class="card text-white shadow p-5 mb-4  step-card active">
            <div class="text-center mb-4">
                <img src="../images/hog-logo.png" alt="Church Logo" class="img-fluid mb-3 bg-dark p-2 rounded-1" style="max-height: 80px;">
                <h2 class="fw-bold text-gold">Would You Like to Give Your Life to Christ Today?</h2>
            </div>
            <p class="lead">If your answer is <strong class="text-gold">YES</strong>, kindly say this prayer with faith in your heart:</p>
            <h5 class="fw-bold text-gold">Prayer of Salvation</h5>
            <p class="lead">
                Father, I come to You now in the Name of Jesus Christ.<br>
                I believe in my heart that Jesus Christ is the Son of God.<br>
                I believe He died for me and that He rose from the dead.<br>
                Today, I confess with my mouth that Jesus Christ is my Lord and my personal Saviour.<br>
                Thank You, Lord, for saving me. I give You all the glory.<br>
                <strong class="text-gold">Amen.</strong>
            </p>
            <div class="text-center">
                <button type="button" id="affirmPrayer" class="btn btn-theme">I Have Affirmed This Prayer</button>
            </div>
        </div>

        <!-- Step 2: Prayer Request Form Section -->
        <div id="step2" class="card text-white shadow p-5 mb-4 step-card">
            <div class="text-center mb-4">
                <i class="fas fa-check-circle text-gold" style="font-size: 2.5rem;"></i>
                <h5 class="fw-bold text-gold mt-3">Great! Now Let's Connect</h5>
            </div>
            <p class="lead">We would love to stand with you in prayer and guide you on your new journey of faith.</p>
            <form method="POST" action="">
                <div class="mb-4 position-relative">
                    <input type="text" name="name" class="form-control" placeholder=" " required id="nameInput">
                    <label for="nameInput" class="form-label">Full Name</label>
                </div>
                <div class="mb-4 position-relative">
                    <input type="text" name="address" class="form-control" placeholder=" " required id="addressInput">
                    <label for="addressInput" class="form-label">Address</label>
                </div>
                <div class="mb-4 position-relative">
                    <input type="text" name="phone" class="form-control" placeholder=" " required id="phoneInput">
                    <label for="phoneInput" class="form-label">Phone Number</label>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold">Preferred Contact Method</label><br>
                    <?php
                    $methods = ["Call", "WhatsApp", "SMS", "Email"];
                    foreach ($methods as $method) {
                        echo "
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='contact' value='{$method}' required>
                            <label class='form-check-label text-white'>{$method}</label>
                        </div>";
                    }
                    ?>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-theme">Submit</button>
                </div>
            </form>
        </div>

        <!-- Step 3: WhatsApp Chat Section -->
        <div id="step3" class="card text-white shadow p-5 step-card">
            <div class="text-center">
                <i class="fas fa-check-circle text-gold" style="font-size: 2.5rem;"></i>
                <h5 class="fw-bold text-gold mt-3">All Set! Chat With Us</h5>
                <p class="lead mb-4">If you prefer, start a conversation right away.</p>
                <a id="whatsappLink" href="#" target="_blank" class="btn whatsapp-btn">
                    <i class="fab fa-whatsapp me-2"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>

    <?php renderFooter(); ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const affirmBtn = document.getElementById('affirmPrayer');
            const phoneInput = document.getElementById('phoneInput');
            const whatsappLink = document.getElementById('whatsappLink');
            const steps = ['step1', 'step2', 'step3'];
            const indicators = ['indicator1', 'indicator2', 'indicator3'];

            // Handle affirmation click: show step 2, hide step 1
            if (affirmBtn) {
                affirmBtn.addEventListener('click', function() {
                    document.getElementById('step1').classList.remove('active');
                    document.getElementById('step2').classList.add('active');
                    document.getElementById('indicator1').classList.remove('active');
                    document.getElementById('indicator2').classList.add('active');
                });
            }

            // Handle phone input for WhatsApp link
            if (phoneInput && whatsappLink) {
                phoneInput.addEventListener('input', () => {
                    const number = phoneInput.value.replace(/\D/g, '');
                    if (number) {
                        const msg = encodeURIComponent('Hello, I would like a follow-up after giving my life to Christ.');
                        whatsappLink.href = `https://wa.me/${number}?text=${msg}`;
                    } else {
                        whatsappLink.href = '#';
                    }
                });
            }

            // Show step 3 after form submission (client-side fallback if PHP doesn't redirect)
            document.querySelector('form').addEventListener('submit', function(e) {
                // This won't run if PHP handles the POST and reloads, but useful for client-side flow
                setTimeout(() => {
                    document.getElementById('step2').classList.remove('active');
                    document.getElementById('step3').classList.add('active');
                    document.getElementById('indicator2').classList.remove('active');
                    document.getElementById('indicator3').classList.add('active');
                }, 1000); // Delay to allow form submission
            });
        });
    </script>

    <?php if (!empty($confirmation)) echo $confirmation; ?>
</body>

</html>