<?php
// ================================
// component.php
// All reusable components for the church website
// ================================

// -------------------- BASE PATH FUNCTION --------------------
function getBasePath()
{
    $current = $_SERVER['PHP_SELF'];
    if (stripos($current, '/departments/') !== false) return '../';
    if (stripos($current, '/about/') !== false) return '../';
    if (stripos($current, '/events/') !== false) return '../';
    if (stripos($current, '/media/') !== false) return '../';
    if (stripos($current, '/converts/') !== false) return '../';
    return '';
}

// -------------------- HERO / BANNER SECTION --------------------
function renderBanner($title, $image1 = '', $image2 = '', $image3 = '')
{
    $base = getBasePath();
    $image1 = !empty($image1) ? $image1 : $base . 'images/ca1.png';
    $image2 = !empty($image2) ? $image2 : $base . 'images/ca3.png';
    $image3 = !empty($image3) ? $image3 : $base . 'images/Rectangle%204.png';
?>
    <div class="hero-section mt-0 pt-0">
        <div id="churchCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $slides = [
                    [$image1, "Welcome to", $title, "Join us in worship and grow in faith.", "Sunday: 9 AM – Lagos, Nigeria"],
                    [$image2, "Welcome to", $title, "Come and encounter God's transforming power.", "Wednesday: 6 PM"],
                    [$image3, "Welcome to", $title, "Find your place in our family of believers.", "Friday Prayer: 6 PM"]
                ];
                $active = true;
                foreach ($slides as $slide) {
                    echo '<div class="carousel-item' . ($active ? ' active' : '') . '" style="background-image: url(' . $slide[0] . ');">
                            <div class="carousel-overlay text-center">
                                <p>' . $slide[1] . '</p>
                                <h1>' . $slide[2] . '</h1>
                                <p>' . $slide[3] . '</p>
                                <p><i class="fa-regular fa-calendar-days"></i> ' . $slide[4] . '</p>
                                <a href="#" class="btn btn-primary"><i class="fa fa-video"></i> Watch Live</a>
                            </div>
                        </div>';
                    $active = false;
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#churchCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#churchCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
<?php
}

// -------------------- HEADER SECTION --------------------
function renderHeader()
{
    $base = getBasePath();

    // --------------- EVENT DATA ---------------
    $eventData = [
        "Grace" => [
            [
                "type" => "event",
                "eventType" => "Grace",
                "year" => "1990",
                "title" => "Grace Programme",
                "slogan" => "",
                "description" => "A charity-driven programme instituted to extend care and sharing to the less privileged in society through recognized non-governmental organizations. It is a major benevolence channel of the ministry on an annual basis.",
                "cordinator" => "Mr Cordinator",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "1990-12-01",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Grace",
                "year" => "2006",
                "title" => "Grace Event",
                "slogan" => "Grace Celebration 2006",
                "description" => "A powerful grace event in 2006 focused on charity and community support.",
                "cordinator" => "Event Coordinator 2006",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2006-12-25",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Grace",
                "year" => "2007",
                "title" => "Grace Event",
                "slogan" => "Grace Celebration 2007",
                "description" => "A powerful grace event in 2007 emphasizing benevolence and outreach.",
                "cordinator" => "Event Coordinator 2007",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2007-12-25",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Grace",
                "year" => "2008",
                "title" => "Grace Event",
                "slogan" => "Grace Celebration 2008",
                "description" => "A powerful grace event in 2008 dedicated to supporting the less privileged.",
                "cordinator" => "Event Coordinator 2008",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2008-12-25",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Grace",
                "year" => "2008",
                "title" => "Grace Event",
                "slogan" => "Grace Celebration 2008",
                "description" => "A powerful grace event in 2008 with additional community engagement.",
                "cordinator" => "Event Coordinator 2008",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2008-12-25",
                "month" => "November",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Grace",
                "year" => "2017",
                "title" => "Grace Event",
                "slogan" => "Grace Celebration 2017",
                "description" => "A powerful grace event in 2017 highlighting ministry benevolence.",
                "cordinator" => "Event Coordinator 2017",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2017-12-25",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Grace",
                "year" => "2017",
                "title" => "Grace Event",
                "slogan" => "Grace Celebration 2017",
                "description" => "A powerful grace event in 2017 with spring focus.",
                "cordinator" => "Event Coordinator 2017",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2017-12-25",
                "month" => "March",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Grace",
                "year" => "2025",
                "title" => "Grace Event",
                "slogan" => "Grace Celebration 2025",
                "description" => "A powerful grace event in 2025 to support the community.",
                "cordinator" => "Pastor Okorie A.",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2025-12-25",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "QueenEsther" => [
            [
                "type" => "event",
                "eventType" => "Queen Esther",
                "year" => "2006",
                "title" => "Queen Esther Event",
                "slogan" => "Queen Esther Celebration 2006",
                "description" => "A empowering women's event in 2006 inspired by biblical Queen Esther.",
                "cordinator" => "Women's Ministry Coordinator 2006",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2006-03-25",
                "month" => "March",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Queen Esther",
                "year" => "2007",
                "title" => "Queen Esther Event",
                "slogan" => "Queen Esther Celebration 2007",
                "description" => "A powerful women's empowerment event in 2007.",
                "cordinator" => "Women's Ministry Coordinator 2007",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2007-03-25",
                "month" => "March",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Queen Esther",
                "year" => "2008",
                "title" => "Queen Esther Event",
                "slogan" => "Queen Esther Celebration 2008",
                "description" => "A transformative event for women in 2008.",
                "cordinator" => "Women's Ministry Coordinator 2008",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2008-03-25",
                "month" => "March",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Queen Esther",
                "year" => "2017",
                "title" => "Queen Esther Event",
                "slogan" => "Queen Esther Celebration 2017",
                "description" => "A significant women's ministry event in 2017.",
                "cordinator" => "Women's Ministry Coordinator 2017",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2017-03-25",
                "month" => "March",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Queen Esther",
                "year" => "2017",
                "title" => "Queen Esther Event",
                "slogan" => "Queen Esther Celebration 2017",
                "description" => "Spring extension of the Queen Esther programme in 2017.",
                "cordinator" => "Women's Ministry Coordinator 2017",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2017-03-25",
                "month" => "April",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Queen Esther",
                "year" => "2017",
                "title" => "Queen Esther Event",
                "slogan" => "Queen Esther Celebration 2017",
                "description" => "Autumn session of the Queen Esther event in 2017.",
                "cordinator" => "Women's Ministry Coordinator 2017",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2017-03-25",
                "month" => "October",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "HallelujahParty" => [
            [
                "type" => "event",
                "eventType" => "Hallelujah Party",
                "year" => "2022",
                "title" => "Hallelujah Party",
                "slogan" => "Praise and worship celebration",
                "description" => "An electrifying night of praise, worship, and thanksgiving.",
                "cordinator" => "Worship Coordinator 2022",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2022-12-31",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Hallelujah Party",
                "year" => "2023",
                "title" => "Hallelujah Party",
                "slogan" => "Entering the new year with praise",
                "description" => "Our annual New Year's Eve celebration with music and fellowship.",
                "cordinator" => "Worship Coordinator 2023",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2023-12-31",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "FellowshipSunday" => [
            [
                "type" => "event",
                "eventType" => "Fellowship Sunday",
                "year" => "2023",
                "title" => "Fellowship Sunday",
                "slogan" => "A day of community and worship",
                "description" => "Join us for a special service focused on fellowship and spiritual growth.",
                "cordinator" => "Fellowship Coordinator 2023",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2023-11-12",
                "month" => "November",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Fellowship Sunday",
                "year" => "2024",
                "title" => "Fellowship Sunday",
                "slogan" => "Building bonds in Christ",
                "description" => "A time to connect with one another and share in the Lord's grace.",
                "cordinator" => "Fellowship Coordinator 2024",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2024-05-19",
                "month" => "May",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "BabyDedication" => [
            [
                "type" => "event",
                "eventType" => "Baby Dedication",
                "year" => "2023",
                "title" => "August Baby Dedication",
                "slogan" => "Presenting our children to the Lord",
                "description" => "A joyful event for families to dedicate their new babies to the church.",
                "cordinator" => "Family Ministry Coordinator 2023",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2023-08-20",
                "month" => "August",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Baby Dedication",
                "year" => "2024",
                "title" => "April Baby Dedication",
                "slogan" => "Welcoming our little ones",
                "description" => "A special service to dedicate our babies to God.",
                "cordinator" => "Family Ministry Coordinator 2024",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2024-04-14",
                "month" => "April",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "ChristmasCarol" => [
            [
                "type" => "event",
                "eventType" => "Christmas Carol",
                "year" => "2022",
                "title" => "Christmas Carol Service",
                "slogan" => "Celebrating the birth of Christ",
                "description" => "A festive night of carols and readings.",
                "cordinator" => "Music Ministry Coordinator 2022",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2022-12-18",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ],
            [
                "type" => "event",
                "eventType" => "Christmas Carol",
                "year" => "2023",
                "title" => "Christmas Carol Service",
                "slogan" => "Singing praises for His birth",
                "description" => "Our annual Christmas Carol service with special performances.",
                "cordinator" => "Music Ministry Coordinator 2023",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2023-12-17",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "YouthRally" => [
            [
                "type" => "event",
                "eventType" => "Youth Rally",
                "year" => "2024",
                "title" => "Youth Rally",
                "slogan" => "Empowering the next generation",
                "description" => "A vibrant gathering for young believers to grow in faith.",
                "cordinator" => "Youth Ministry Coordinator 2024",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2024-06-15",
                "month" => "June",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "AnnualConference" => [
            [
                "type" => "event",
                "eventType" => "Annual Conference",
                "year" => "2024",
                "title" => "Annual Conference",
                "slogan" => "Gathering in His name",
                "description" => "Our yearly conference for all members to unite and learn.",
                "cordinator" => "Conference Coordinator 2024",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "2024-11-30",
                "month" => "November",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "KarisAward" => [
            [
                "type" => "event",
                "eventType" => "Karis Award",
                "year" => "1996",
                "title" => "Karis Award",
                "slogan" => "",
                "description" => "Instituted in 1996, aimed at appreciating Nigerians who have positively impacted the nation but have not been recognized by the government. It is subsumed into the GRACE programme.",
                "cordinator" => "Awards Coordinator 1996",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "year",
                "date" => "1996-12-01",
                "month" => "December",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ],
        "PrayerMeeting" => [
            [
                "type" => "event",
                "eventType" => "Prayer Meeting",
                "year" => "2023",
                "title" => "Prayer Meeting",
                "slogan" => "A time of spiritual renewal",
                "description" => "A gathering for prayer and intercession in March 2023.",
                "cordinator" => "Prayer Coordinator 2023",
                "cordinatorImage" => "cordinator.jpeg",
                "eventCategory" => "month",
                "date" => "2023-03-15",
                "month" => "March",
                "images" => ["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"]
            ]
        ]
    ];

    // --------------- DYNAMIC EVENT CATEGORIES FOR MONTHLY EVENTS ---------------
    $eventCategories = [];
    foreach ($eventData as $eventType => $events) {
        if ($events[0]['eventCategory'] === 'month') {
            $categories = [];
            foreach ($events as $event) {
                $category = $event['month'];
                if (!in_array($category, $categories)) {
                    $categories[] = $category;
                }
            }
            sort($categories); // Sort months for consistent display
            $eventCategories[$eventType] = $categories;
        }
    }

    // --------------- HEADER HTML ---------------
?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $base; ?>index.php">
                    <img src="<?php echo $base; ?>images/hog-logo.png" alt="Logo" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>index.php">Home</a></li>

                        <!-- ABOUT -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <li><a class="dropdown-item" href="<?php echo $base; ?>about/aboutchurch.php">Our Church</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>about/aboutpastor.php">Our Pastor</a></li>
                            </ul>
                        </li>

                        <!-- DEPARTMENTS -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="departmentsDropdown" data-bs-toggle="dropdown" aria-expanded="false">Departments</a>
                            <ul class="dropdown-menu" aria-labelledby="departmentsDropdown">
                                <?php
                                $departments = [
                                    'childrens' => "Children's Department",
                                    'singles' => "Singles Department",
                                    'works' => "Works Department",
                                    'publication' => "Publication Department",
                                    'evangelism' => "Evangelism Department",
                                    'holy' => "Holy Police",
                                    'technical' => "Technical Crew",
                                    'villa' => "Villa Sanitation",
                                    'pastoral' => "Pastoral Care",
                                    'missions' => "Missions Department",
                                    'protocol' => "Protocol Department",
                                    'benevolence' => "Benevolence Department"
                                ];
                                foreach ($departments as $slug => $name) {
                                    echo "<li><a class='dropdown-item' href='{$base}departments/{$slug}.php'>{$name}</a></li>";
                                }
                                ?>
                            </ul>
                        </li>

                        <!-- EVENTS -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" data-bs-toggle="dropdown" aria-expanded="false">Events</a>
                            <ul class="dropdown-menu" aria-labelledby="eventsDropdown">
                                <?php
                                foreach ($eventData as $event => $events) {
                                    if ($events[0]['eventCategory'] === 'month') {
                                        // Monthly events with submenu
                                        echo "<li class='dropdown-submenu'>
                                                <a href='#' class='dropdown-item dropdown-toggle' data-bs-toggle='dropdown-submenu'>{$event}</a>
                                                <ul class='dropdown-menu'>";
                                        foreach ($eventCategories[$event] as $month) {
                                            $payload = urlencode(json_encode(['event' => $event, 'month' => $month]));
                                            echo "<li><a class='dropdown-item' href='{$base}events/event.php?data={$payload}'>{$month}</a></li>";
                                        }
                                        echo "</ul></li>";
                                    } else {
                                        // Yearly events with direct link
                                        $payload = urlencode(json_encode(['event' => $event]));
                                        echo "<li><a class='dropdown-item' href='{$base}events/event.php?data={$payload}'>{$event}</a></li>";
                                    }
                                }

                                // Other simple events
                                $otherEvents = ["Incandescence", "Annual Revival", "Youth Conference", "Easter", "Thanksgiving"];
                                foreach ($otherEvents as $event) {
                                    $payload = urlencode(json_encode(['event' => $event]));
                                    echo "<li><a class='dropdown-item' href='{$base}events/event.php?data={$payload}'>{$event}</a></li>";
                                }
                                ?>
                            </ul>
                        </li>

                        <!-- OTHER LINKS -->
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>converts/convert.php">New Converts</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>media/gallery.php">Media</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>index.php#contact-section">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.dropdown-submenu > a.dropdown-toggle').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    let submenu = this.nextElementSibling;
                    if (submenu) submenu.classList.toggle('show');
                    document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function(menu) {
                        if (menu !== submenu) menu.classList.remove('show');
                    });
                });
            });

            document.querySelectorAll('.dropdown-submenu').forEach(function(element) {
                element.addEventListener('mouseenter', function() {
                    if (window.innerWidth >= 992) {
                        let submenu = this.querySelector('.dropdown-menu');
                        if (submenu) submenu.classList.add('show');
                    }
                });
                element.addEventListener('mouseleave', function() {
                    if (window.innerWidth >= 992) {
                        let submenu = this.querySelector('.dropdown-menu');
                        if (submenu) submenu.classList.remove('show');
                    }
                });
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('.dropdown-submenu')) {
                    document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function(menu) {
                        menu.classList.remove('show');
                    });
                }
            });
        });
    </script>

    <style>
        .dropdown-menu {
            border-radius: 10px;
            background-color: #212529;
            min-width: 200px;
        }

        .dropdown-item {
            color: #fff !important;
        }

        .dropdown-item:hover {
            background-color: #ffc107;
            color: #000 !important;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: 0.1rem;
            display: none;
            border-radius: 10px;
            background-color: #212529;
        }

        .dropdown-submenu .dropdown-menu.show {
            display: block;
        }

        @media (max-width: 991.98px) {
            .dropdown-submenu .dropdown-menu {
                position: static;
                left: 0;
                margin-left: 1rem;
                border: none;
                background-color: #343a40;
            }
        }
    </style>
<?php
} // END renderHeader()

// -------------------- FOOTER SECTION --------------------
function renderFooter()
{
    $base = getBasePath();
?>
    <footer class="footer text-white bg-dark mt-5">
        <div class="container py-4">
            <div class="row align-items-center mb-4">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <img src="<?php echo $base; ?>images/hog-logo.png" alt="Logo" height="60" />
                </div>
                <div class="col-md-6">
                    <form class="input-group" action="#" method="POST">
                        <span class="input-group-text bg-white border-0 rounded-start">
                            <i class="fas fa-envelope text-secondary"></i>
                        </span>
                        <input type="email" class="form-control border-0" placeholder="youremailaddress@gmail.com" />
                        <button class="btn btn-secondary rounded-end" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>

            <hr class="border-light" />

            <div class="row text-start mt-4">
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">ADDRESS</h6>
                    <p>Plot 4 HouseHold of God Street,<br> Off Kudirat Abiola Way, Clay Bus-Stop,<br> Ikeja, Lagos - Nigeria</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">#OKOTIESLETTER</h6>
                    <p>Get Okotie’s Letter now for free</p>
                    <button class="btn btn-secondary w-100"><i class="fas fa-download"></i></button>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">FOLLOW US</h6>
                    <p>Follow us on our social Media</p>
                    <div class="d-flex gap-3">
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">INFO</h6>
                    <div class="mb-2">Prayer Meeting – 6pm Weekdays</div>
                    <div class="mb-2">Proclaimers – 9pm Saturdays</div>
                    <div>Apokalupsis – 7am Sundays on Raypower 100.5fm</div>
                </div>
            </div>
        </div>
    </footer>
<?php
}
?>