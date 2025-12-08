<?php include '../component.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" defer></script>
    <style>
        body { background-color: #f8f9fa; }
        .event-section { margin-top: 5rem; margin-bottom: 5rem; }
        .coordinator-img { width: 100%; border-radius: 1rem; object-fit: cover; }
        .event-title { font-size: 2rem; font-weight: bold; color: #000000; }
        .event-slogan { font-size: 1.1rem; color: #6c757d; font-style: italic; }
        .event-description { font-size: 1.05rem; margin-top: 1rem; color: #333; }
        .thumb-gallery img { width: 110px; height: 90px; object-fit: cover; border-radius: 8px; cursor: pointer; transition: transform 0.3s; }
        .thumb-gallery img:hover { transform: scale(1.05); }
        .modal-img { width: 100%; border-radius: 10px; object-fit: contain; }
    </style>
</head>
<body>
<?php renderHeader(); ?>

<?php
// =========================================
// EVENT DATA (with PrayerMeeting added)
// =========================================

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

// =========================================
// LOGIC STARTS HERE
// =========================================
$imageBasePath = '../images/events/';

// Check if 'data' parameter exists in the URL
if (isset($_GET['data'])) {
    // Decode the JSON data
    $data = json_decode(urldecode($_GET['data']), true);
    $eventType = isset($data['event']) ? trim($data['event']) : '';
    $monthFilter = isset($data['month']) ? trim($data['month']) : '';
} else {
    // Fallback to direct query parameters
    $eventType = isset($_GET['event']) ? trim($_GET['event']) : '';
    $monthFilter = isset($_GET['month']) ? trim($_GET['month']) : '';
}

$yearFilter = isset($_GET['year']) ? trim($_GET['year']) : '';

// Normalize eventType to match $eventData keys (e.g., remove spaces)
$eventType = str_replace(' ', '', $eventType); // e.g., "Prayer Meeting" -> "PrayerMeeting"

if (empty($eventType) || !isset($eventData[$eventType])) {
    echo "<div class='container text-center py-5 my-5'><h4 class='text-muted'>No events found for event type: " . htmlspecialchars($eventType) . "</h4></div>";
    renderFooter();
    exit;
}

// Step 1: Base events of this eventType
$filteredEvents = $eventData[$eventType];

// Step 2: If month is in URL, narrow it down
if (!empty($monthFilter)) {
    $filteredEvents = array_filter($filteredEvents, function($ev) use ($monthFilter) {
        return strcasecmp($ev['month'], $monthFilter) === 0;
    });
}

// Step 3: Extract all unique years from the filtered list
$years = array_unique(array_column($filteredEvents, 'year'));
sort($years, SORT_NUMERIC);

// Step 4: Select current year (URL or default to latest)
$currentYear = (!empty($yearFilter) && in_array($yearFilter, $years)) ? $yearFilter : end($years);

// Step 5: Pick the current event for that year
$currentEvent = null;
foreach ($filteredEvents as $ev) {
    if ($ev['year'] === $currentYear) {
        $currentEvent = $ev;
        break;
    }
}

// If no event matched
if (!$currentEvent) {
    echo "<div class='container text-center py-5 my-5'><h4 class='text-muted'>No events found for the selected filters.</h4></div>";
    renderFooter();
    exit;
}
?>

<div class="container event-section">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-warning mb-2"><?= htmlspecialchars($eventType) ?> Event</h2>
        <?php if (!empty($monthFilter)): ?>
            <p class="text-secondary">Showing all <strong><?= htmlspecialchars($monthFilter) ?></strong> events</p>
        <?php else: ?>
            <p class="text-secondary">Select a year to view past editions.</p>
        <?php endif; ?>
        <form method="get" class="d-inline-block">
            <input type="hidden" name="event" value="<?= htmlspecialchars($eventType) ?>">
            <?php if ($monthFilter): ?>
                <input type="hidden" name="month" value="<?= htmlspecialchars($monthFilter) ?>">
            <?php endif; ?>
            <select name="year" class="form-select d-inline-block w-auto rounded-pill" onchange="this.form.submit()">
                <?php foreach ($years as $yr): ?>
                    <option value="<?= htmlspecialchars($yr) ?>" <?= $yr == $currentYear ? 'selected' : '' ?>><?= htmlspecialchars($yr) ?></option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>

    <div class="row align-items-start gy-4">
        <?php if (!empty($currentEvent['cordinatorImage'])): ?>
            <div class="col-md-5">
                <img src="<?= htmlspecialchars($imageBasePath . $currentEvent['cordinatorImage']) ?>" class="coordinator-img mb-3" alt="Coordinator" onerror="this.style.display='none';">
                <h5 class="fw-bold mt-2"><?= htmlspecialchars($currentEvent['cordinator'] ?? 'N/A') ?></h5>
            </div>
        <?php endif; ?>

        <div class="<?= !empty($currentEvent['cordinatorImage']) ? 'col-md-7' : 'col-md-12' ?>">
            <h3 class="event-title"><?= htmlspecialchars($currentEvent['title'] ?? 'Untitled Event') ?></h3>
            <?php if (!empty($currentEvent['slogan'])): ?>
                <p class="event-slogan">"<?= htmlspecialchars($currentEvent['slogan']) ?>"</p>
            <?php endif; ?>
            <p class="event-description"><?= htmlspecialchars($currentEvent['description'] ?? 'No description available.') ?></p>
            <p class="text-muted small mt-2">
                <i class="fa-regular fa-calendar-days me-2"></i><?= htmlspecialchars($currentEvent['date'] ?? 'N/A') ?>
            </p>
        </div>
    </div>

    <div class="thumb-gallery d-flex flex-wrap gap-3 mt-5 justify-content-center">
        <?php foreach ($currentEvent['images'] as $index => $img): ?>
            <img src="<?= htmlspecialchars($imageBasePath . $img) ?>" alt="Event Image" onclick="openModal(<?= $index ?>)">
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal Gallery -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark border-0">
            <div class="modal-body text-center position-relative">
                <img id="modalImage" src="" class="modal-img" alt="Event Image">
                <button type="button" class="btn btn-light position-absolute top-50 start-0 translate-middle-y" style="border-radius:50%" onclick="prevImage()"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn btn-light position-absolute top-50 end-0 translate-middle-y" style="border-radius:50%" onclick="nextImage()"><i class="fa fa-chevron-right"></i></button>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>

<?php renderFooter(); ?>

<script>
const images = <?= json_encode($currentEvent['images'] ?? [], JSON_UNESCAPED_SLASHES) ?>;
const imageBasePath = <?= json_encode($imageBasePath, JSON_UNESCAPED_SLASHES) ?>;
let currentIndex = 0;

function openModal(index) {
    if (!images.length) return;
    currentIndex = index;
    document.getElementById('modalImage').src = imageBasePath + images[currentIndex];
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}

function nextImage() {
    if (!images.length) return;
    currentIndex = (currentIndex + 1) % images.length;
    document.getElementById('modalImage').src = imageBasePath + images[currentIndex];
}

function prevImage() {
    if (!images.length) return;
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    document.getElementById('modalImage').src = imageBasePath + images[currentIndex];
}
</script>
</body>
</html>