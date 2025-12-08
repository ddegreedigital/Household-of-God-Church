<?php include '../component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Media - Gallery, Watch & Listen</title>
  <link rel="stylesheet" href="../css/style.css" />
  <script defer src="../js/script.js"></script>
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

  <style>
    .church-section {
      padding: 60px 0;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #212529;
      background: linear-gradient(180deg, #ffc107, #ffca2c);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .media-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .media-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .card.h-100 {
      display: flex;
      flex-direction: column;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
      padding-bottom: 1rem;
    }

    .card-text {
      flex: 1 1 auto;
    }

    .audio-player, .video-iframe {
      width: 100%;
      border-radius: 5px;
    }

    .btn-group .btn.active {
      box-shadow: 0 0 0 0.15rem rgba(255, 193, 7, .15);
      background-color: #ffc107;
      color: #212529;
    }

    .btn-group .btn {
      border-radius: .25rem;
    }

    #modalCarousel img {
      height: 60px;
      object-fit: cover;
      cursor: pointer;
    }

    .pagination {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 2rem;
    }

    .pagination a {
      padding: 8px 16px;
      border: 1px solid #dee2e6;
      border-radius: 5px;
      color: #212529;
      text-decoration: none;
      font-weight: 500;
    }

    .pagination a:hover {
      background-color: #ffc107;
      color: #fff;
    }

    .pagination a.active {
      background-color: #212529;
      color: #fff;
      border-color: #212529;
    }

    .pagination a.disabled {
      color: #6c757d;
      pointer-events: none;
    }

    .church-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #6C757D;
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 2rem;
      }

      .card-img-top {
        height: 180px;
      }

      .church-text {
        font-size: 1rem;
      }
    }

    @media (max-width: 576px) {
      .section-title {
        font-size: 1.75rem;
      }

      .card-img-top {
        height: 160px;
      }

      .church-text {
        font-size: 0.9rem;
      }

      #modalCarousel img {
        height: 50px;
      }
    }
  </style>
</head>

<body>
  <?php renderHeader(); ?>
  <?php renderBanner('Media - Gallery, Watch & Listen'); ?>

  <div class="container church-section">
    <div class="text-center mb-4">
      <div class="btn-group" role="group" aria-label="Toggle media sections">
        <button id="showGalleryBtn" class="btn btn-warning active" aria-label="Show gallery section">Gallery</button>
        <button id="showWatchBtn" class="btn btn-outline-warning" aria-label="Show watch section">Watch</button>
        <button id="showAudioBtn" class="btn btn-outline-warning" aria-label="Show listen section">Listen</button>
      </div>
    </div>

    <!-- Gallery Section -->
    <div id="gallerySection">
      <div class="text-center mb-5">
        <h2 class="section-title mb-2">Explore Our Church Gallery</h2>
        <p class="lead text-secondary church-text">
          Relive memorable moments from our services, children’s programs, and community events.
        </p>
      </div>

      <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 mb-5">
        <div class="position-relative flex-grow-1 w-100 w-md-auto">
          <input type="text" id="searchInput" placeholder="Search events..." class="form-control rounded-pill ps-4 pe-5"
            aria-label="Search gallery events" onkeyup="filterGallery()">
          <i class="fas fa-search text-muted position-absolute top-50 end-0 translate-middle-y me-3"></i>
        </div>
        <select id="monthFilter" class="form-select w-100 w-md-auto rounded-pill" onchange="filterGallery()"
          aria-label="Filter gallery by month">
          <option value="">All Months</option>
        </select>
        <select id="yearFilter" class="form-select w-100 w-md-auto rounded-pill" onchange="filterGallery()"
          aria-label="Filter gallery by year">
          <option value="">All Years</option>
        </select>
        <select id="eventTypeFilter" class="form-select w-100 w-md-auto rounded-pill" onchange="filterGallery()"
          aria-label="Filter gallery by event type">
          <option value="">All Event Types</option>
        </select>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="eventsGallery">
        <div class="col-12 text-center text-muted py-5">
          <p>Loading Gallery...</p>
        </div>
      </div>

      <div class="pagination mt-5" id="galleryPagination"></div>
    </div>

    <!-- Watch Section -->
    <div id="watchSection" class="d-none">
      <div class="text-center mb-5">
        <h2 class="section-title mb-2">Watch Our Services and Events</h2>
        <p class="lead text-secondary church-text">
          Revisit powerful sermons, celebrations, and children’s programs through our video collection.
        </p>
      </div>

      <div class="row justify-content-center mb-4">
        <div class="col-md-6">
          <input type="text" id="videoSearch" class="form-control rounded-pill ps-4"
            placeholder="Search videos..." aria-label="Search video sermons and events" onkeyup="filterVideos()">
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="videoGrid">
        <?php
        $videos = [
          [
            "title" => "Sunday Service - January 2025",
            "date" => "Jan 5, 2025",
            "description" => "A vibrant worship service to start the new year with faith and fellowship.",
            "src" => "https://www.youtube.com/embed/dQw4w9WgXcQ"
          ],
          [
            "title" => "Children’s Bible Storytelling 2024",
            "date" => "Jul 20, 2024",
            "description" => "An engaging session for kids with Bible stories and interactive activities.",
            "src" => "https://www.youtube.com/embed/dQw4w9WgXcQ"
          ],
          [
            "title" => "Children’s Sunday School Event 2024",
            "date" => "Aug 15, 2024",
            "description" => "A joyful event for children with songs, stories, and crafts.",
            "src" => "https://www.youtube.com/embed/dQw4w9WgXcQ"
          ],
          [
            "title" => "Christmas Carol Service 2024",
            "date" => "Dec 20, 2024",
            "description" => "A heartwarming celebration of Christ’s birth with carols and worship.",
            "src" => "https://www.youtube.com/embed/dQw4w9WgXcQ"
          ],
          [
            "title" => "Halleluyah Crossover Service 2024",
            "date" => "Dec 31, 2024",
            "description" => "An inspiring crossover service filled with praise and testimonies.",
            "src" => "https://www.youtube.com/embed/dQw4w9WgXcQ"
          ],
          [
            "title" => "Easter Resurrection Service 2024",
            "date" => "Apr 9, 2024",
            "description" => "Celebrating the resurrection of Jesus Christ with worship and reflection.",
            "src" => "https://www.youtube.com/embed/dQw4w9WgXcQ"
          ],
          [
            "title" => "Kids’ Summer Camp 2024",
            "date" => "Jun 25, 2024",
            "description" => "A fun-filled camp for children with games, worship, and learning.",
            "src" => "https://www.youtube.com/embed/dQw4w9WgXcQ"
          ]
        ];
        foreach (array_slice($videos, 0, 6) as $video):
        ?>
          <div class="col media-card">
            <div class="card h-100 shadow-sm border-0">
              <div class="ratio ratio-16x9">
                <iframe class="video-iframe" src="<?php echo $video['src']; ?>" title="<?php echo $video['title']; ?>" allowfullscreen></iframe>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold"><?php echo $video['title']; ?></h5>
                <p class="text-muted small mb-1">Uploaded: <?php echo $video['date']; ?></p>
                <p class="card-text"><?php echo $video['description']; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="pagination mt-5" id="videoPagination"></div>
    </div>

    <!-- Audio Section -->
    <div id="audioSection" class="d-none">
      <div class="text-center mb-5">
        <h2 class="section-title mb-2">Listen to Our Sermons and Events</h2>
        <p class="lead text-secondary church-text">
          Revisit powerful sermons, worship sessions, and children’s programs to inspire your spiritual journey.
        </p>
      </div>

      <div class="row justify-content-center mb-4">
        <div class="col-md-6">
          <input type="text" id="audioSearch" class="form-control rounded-pill ps-4"
            placeholder="Search sermons and events..." aria-label="Search audio sermons and events"
            onkeyup="filterAudios()">
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="audioGrid">
        <?php
        $audios = [
          [
            "title" => "Sunday Sermon - January 2025",
            "date" => "Jan 5, 2025",
            "description" => "A powerful sermon on faith and renewal to start the new year.",
            "src" => "/audio/sermon-2025-01-05.mp3"
          ],
          [
            "title" => "Children’s Bible Storytelling 2024",
            "date" => "Jul 20, 2024",
            "description" => "An engaging session for kids with Bible stories and songs.",
            "src" => "/audio/kids-storytelling-2024.mp3"
          ],
          [
            "title" => "Children’s Sunday School Session 2024",
            "date" => "Aug 15, 2024",
            "description" => "A fun and educational session for children to learn about God’s love.",
            "src" => "/audio/childrens-session-2024.mp3"
          ],
          [
            "title" => "Christmas Worship Service 2024",
            "date" => "Dec 20, 2024",
            "description" => "A joyful celebration of Christ’s birth with worship and carols.",
            "src" => "/audio/christmas-2024.mp3"
          ],
          [
            "title" => "Halleluyah Crossover Service 2024",
            "date" => "Dec 31, 2024",
            "description" => "An inspiring crossover service filled with praise and testimonies.",
            "src" => "/audio/crossover-2024.mp3"
          ],
          [
            "title" => "Easter Resurrection Service 2024",
            "date" => "Apr 9, 2024",
            "description" => "Celebrating the resurrection of Jesus Christ with worship and reflection.",
            "src" => "/audio/easter-2024.mp3"
          ],
          [
            "title" => "Kids’ Worship Session 2024",
            "date" => "Jun 25, 2024",
            "description" => "A lively worship session designed for children to praise and learn.",
            "src" => "/audio/kids-worship-2024.mp3"
          ]
        ];
        foreach (array_slice($audios, 0, 6) as $audio):
        ?>
          <div class="col media-card">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body">
                <h5 class="card-title fw-bold"><?php echo $audio['title']; ?></h5>
                <p class="text-muted small mb-1">Uploaded: <?php echo $audio['date']; ?></p>
                <p class="card-text"><?php echo $audio['description']; ?></p>
                <audio class="audio-player" controls>
                  <source src="<?php echo $audio['src']; ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="pagination mt-5" id="audioPagination"></div>
    </div>

    <!-- Modal for Gallery Images -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title fw-bold text-dark" id="eventModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <img id="modalMainImage" src="" class="img-fluid rounded-3 mb-3" alt="" />
            <div id="modalCarousel" class="d-flex justify-content-center gap-3 my-3"></div>
            <p id="modalEventType" class="text-muted small mb-1"></p>
            <p id="modalDate" class="text-muted small mb-1"></p>
            <p id="modalDescription" class="lead"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php renderFooter(); ?>

  <script>
    // Data arrays
    const galleryData = [
      {
        title: "January Fellowship Sunday",
        type: "Fellowship Sunday",
        date: "Jan 5, 2025",
        month: "January",
        year: "2025",
        description: "A vibrant fellowship to start the new year with worship and community.",
        images: [
          "https://images.unsplash.com/photo-1518709268805-4e9042af5921",
          "https://images.unsplash.com/photo-1500382017468-9049fed747ef",
          "https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1"
        ]
      },
      {
        title: "Children’s Bible Storytelling 2024",
        type: "Children’s Program",
        date: "Jul 20, 2024",
        month: "July",
        year: "2024",
        description: "An engaging session for kids with Bible stories and interactive activities.",
        images: [
          "https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9",
          "https://images.unsplash.com/photo-1516627145497-ae6968895b74"
        ]
      },
      {
        title: "Children’s Sunday School Celebration 2024",
        type: "Children’s Program",
        date: "Aug 15, 2024",
        month: "August",
        year: "2024",
        description: "A joyful celebration for children with songs, stories, and crafts.",
        images: [
          "https://images.unsplash.com/photo-1537815749002-de6a533c64f2",
          "https://images.unsplash.com/photo-1516627145497-ae6968895b74"
        ]
      },
      {
        title: "Kids’ Summer Camp 2024",
        type: "Children’s Program",
        date: "Jun 25, 2024",
        month: "June",
        year: "2024",
        description: "A fun-filled camp for children with games, worship, and learning.",
        images: [
          "https://images.unsplash.com/photo-1502082553048-f009c37129b9",
          "https://images.unsplash.com/photo-1475736967252-6d86a2f6db92"
        ]
      },
      {
        title: "Christmas Carol Service 2024",
        type: "Christmas Carol",
        date: "Dec 20, 2024",
        month: "December",
        year: "2024",
        description: "A heartwarming evening of carols and worship for all ages.",
        images: [
          "https://images.unsplash.com/photo-1543589077-870d0a84702f",
          "https://images.unsplash.com/photo-1541267220858-3a6a1245c4a8"
        ]
      },
      {
        title: "Halleluyah Party 2024",
        type: "Halleluyah Party",
        date: "Dec 31, 2024",
        month: "December",
        year: "2024",
        description: "An end-of-year celebration filled with praise and testimonies.",
        images: [
          "https://images.unsplash.com/photo-1514525253161-7a46d19cd819"
        ]
      },
      {
        title: "Baby Dedication - Smith Family",
        type: "Baby Dedication",
        date: "Oct 26, 2024",
        month: "October",
        year: "2024",
        description: "A special dedication ceremony for the Smith family’s child.",
        images: [
          "https://images.unsplash.com/photo-1519227355133-7b1b0d05ca5e"
        ]
      }
    ];

    const videos = <?php echo json_encode($videos); ?>;
    const audios = <?php echo json_encode($audios); ?>;
    const itemsPerPage = 6;
    let galleryCurrentPage = 1;
    let videoCurrentPage = 1;
    let audioCurrentPage = 1;

    // Toggle Sections
    const gallerySection = document.getElementById("gallerySection");
    const watchSection = document.getElementById("watchSection");
    const audioSection = document.getElementById("audioSection");
    const showGalleryBtn = document.getElementById("showGalleryBtn");
    const showWatchBtn = document.getElementById("showWatchBtn");
    const showAudioBtn = document.getElementById("showAudioBtn");

    showGalleryBtn.addEventListener("click", () => {
      gallerySection.classList.remove("d-none");
      watchSection.classList.add("d-none");
      audioSection.classList.add("d-none");
      showGalleryBtn.classList.add("btn-warning", "active");
      showGalleryBtn.classList.remove("btn-outline-warning");
      showWatchBtn.classList.remove("btn-warning", "active");
      showWatchBtn.classList.add("btn-outline-warning");
      showAudioBtn.classList.remove("btn-warning", "active");
      showAudioBtn.classList.add("btn-outline-warning");
      filterGallery();
    });

    showWatchBtn.addEventListener("click", () => {
      watchSection.classList.remove("d-none");
      gallerySection.classList.add("d-none");
      audioSection.classList.add("d-none");
      showWatchBtn.classList.add("btn-warning", "active");
      showWatchBtn.classList.remove("btn-outline-warning");
      showGalleryBtn.classList.remove("btn-warning", "active");
      showGalleryBtn.classList.add("btn-outline-warning");
      showAudioBtn.classList.remove("btn-warning", "active");
      showAudioBtn.classList.add("btn-outline-warning");
      filterVideos();
    });

    showAudioBtn.addEventListener("click", () => {
      audioSection.classList.remove("d-none");
      watchSection.classList.add("d-none");
      gallerySection.classList.add("d-none");
      showAudioBtn.classList.add("btn-warning", "active");
      showAudioBtn.classList.remove("btn-outline-warning");
      showGalleryBtn.classList.remove("btn-warning", "active");
      showGalleryBtn.classList.add("btn-outline-warning");
      showWatchBtn.classList.remove("btn-warning", "active");
      showWatchBtn.classList.add("btn-outline-warning");
      filterAudios();
    });

    // Render Gallery
    function renderGallery(data, page = 1) {
      const container = document.getElementById("eventsGallery");
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const paginatedData = data.slice(start, end);
      container.innerHTML = paginatedData.length ? paginatedData.map(event => {
        const ev = JSON.stringify(event).replace(/'/g, "\\'");
        const firstImage = event.images && event.images.length > 0 ? event.images[0] : 'https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0';
        return `
          <div class="col media-card">
            <div class="card h-100 shadow-sm border-0">
              <img src="${firstImage}" class="card-img-top rounded-top" alt="${event.title}" onerror="this.src='https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-bold">${event.title}</h5>
                <p class="text-muted small mb-1">${event.type}</p>
                <p class="text-muted small mb-1">${event.date}</p>
                <p class="card-text">${event.description}</p>
                <div class="mt-auto">
                  <button class="btn btn-warning btn-sm rounded-pill w-100" onclick='openModal(${ev})'>
                    View More
                  </button>
                </div>
              </div>
            </div>
          </div>
        `;
      }).join("") : `<div class="col-12 text-center text-muted py-5"><p>No events found.</p></div>`;
      renderPagination("galleryPagination", data.length, page, changeGalleryPage);
    }

    // Render Videos
    function renderVideos(list, page = 1) {
      const container = document.getElementById("videoGrid");
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const paginatedList = list.slice(start, end);
      container.innerHTML = paginatedList.length ? paginatedList.map(video => `
        <div class="col media-card">
          <div class="card h-100 shadow-sm border-0">
            <div class="ratio ratio-16x9">
              <iframe class="video-iframe" src="${video.src}" title="${video.title}" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold">${video.title}</h5>
              <p class="text-muted small mb-1">Uploaded: ${video.date}</p>
              <p class="card-text">${video.description}</p>
            </div>
          </div>
        </div>
      `).join("") : `<div class="col-12 text-center text-muted">No videos found</div>`;
      renderPagination("videoPagination", list.length, page, changeVideoPage);
    }

    // Render Audios
    function renderAudios(list, page = 1) {
      const container = document.getElementById("audioGrid");
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const paginatedList = list.slice(start, end);
      container.innerHTML = paginatedList.length ? paginatedList.map(audio => `
        <div class="col media-card">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title fw-bold">${audio.title}</h5>
              <p class="text-muted small mb-1">Uploaded: ${audio.date}</p>
              <p class="card-text">${audio.description}</p>
              <audio class="audio-player" controls>
                <source src="${audio.src}" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </div>
          </div>
        </div>
      `).join("") : `<div class="col-12 text-center text-muted">No sermons or events found</div>`;
      renderPagination("audioPagination", list.length, page, changeAudioPage);
    }

    // Render Pagination
    function renderPagination(containerId, totalItems, currentPage, changePageFn) {
      const totalPages = Math.ceil(totalItems / itemsPerPage);
      const pagination = document.getElementById(containerId);
      pagination.innerHTML = "";
      if (totalPages <= 1) return;

      pagination.innerHTML += `
        <a href="#" class="${currentPage === 1 ? 'disabled' : ''}" 
           onclick="${currentPage !== 1 ? `event.preventDefault();${changePageFn.name}(${currentPage - 1})` : ''}" 
           aria-label="Previous ${containerId.includes('gallery') ? 'gallery' : containerId.includes('video') ? 'video' : 'audio'} page">
          <i class="fas fa-chevron-left"></i>
        </a>
      `;

      const maxPagesToShow = 5;
      let startPage = Math.max(1, currentPage - 2);
      let endPage = Math.min(totalPages, startPage + maxPagesToShow - 1);
      if (endPage - startPage + 1 < maxPagesToShow) {
        startPage = Math.max(1, endPage - maxPagesToShow + 1);
      }

      if (startPage > 1) {
        pagination.innerHTML += `<a href="#" onclick="${changePageFn.name}(1)">1</a>`;
        if (startPage > 2) pagination.innerHTML += `<span>...</span>`;
      }

      for (let i = startPage; i <= endPage; i++) {
        pagination.innerHTML += `
          <a href="#" class="${i === currentPage ? 'active' : ''}" 
             onclick="${changePageFn.name}(${i})">${i}</a>
        `;
      }

      if (endPage < totalPages) {
        if (endPage < totalPages - 1) pagination.innerHTML += `<span>...</span>`;
        pagination.innerHTML += `<a href="#" onclick="${changePageFn.name}(${totalPages})">${totalPages}</a>`;
      }

      pagination.innerHTML += `
        <a href="#" class="${currentPage === totalPages ? 'disabled' : ''}" 
           onclick="${currentPage !== totalPages ? `event.preventDefault();${changePageFn.name}(${currentPage + 1})` : ''}" 
           aria-label="Next ${containerId.includes('gallery') ? 'gallery' : containerId.includes('video') ? 'video' : 'audio'} page">
          <i class="fas fa-chevron-right"></i>
        </a>
      `;
    }

    // Change Page Functions
    function changeGalleryPage(page) {
      if (page < 1 || page > Math.ceil(galleryData.length / itemsPerPage)) return;
      galleryCurrentPage = page;
      filterGallery();
    }

    function changeVideoPage(page) {
      if (page < 1 || page > Math.ceil(videos.length / itemsPerPage)) return;
      videoCurrentPage = page;
      filterVideos();
    }

    function changeAudioPage(page) {
      if (page < 1 || page > Math.ceil(audios.length / itemsPerPage)) return;
      audioCurrentPage = page;
      filterAudios();
    }

    // Open Modal for Gallery
    function openModal(event) {
      document.getElementById("eventModalLabel").textContent = event.title;
      const mainImageElement = document.getElementById("modalMainImage");
      if (event.images && event.images.length > 0) {
        mainImageElement.src = event.images[0];
        mainImageElement.alt = event.title;
      } else {
        mainImageElement.src = 'https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0';
        mainImageElement.alt = 'No image available';
      }
      document.getElementById("modalEventType").textContent = event.type;
      document.getElementById("modalDate").textContent = event.date;
      document.getElementById("modalDescription").textContent = event.description;

      const carousel = document.getElementById("modalCarousel");
      carousel.innerHTML = event.images && event.images.length ? event.images.map(img => `
        <img src="${img}" class="img-thumbnail" alt="Thumbnail for ${event.title}" 
             onclick="document.getElementById('modalMainImage').src='${img}'" 
             onerror="this.src='https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0'">
      `).join("") : '<p class="text-muted">No additional images available.</p>';

      new bootstrap.Modal(document.getElementById("eventModal")).show();
    }

    // Filter Functions
    function filterGallery() {
      const search = document.getElementById("searchInput").value.toLowerCase();
      const month = document.getElementById("monthFilter").value;
      const year = document.getElementById("yearFilter").value;
      const type = document.getElementById("eventTypeFilter").value;

      const filtered = galleryData.filter(e =>
        (!search || e.title.toLowerCase().includes(search) || (e.description && e.description.toLowerCase().includes(search))) &&
        (!month || e.month === month) &&
        (!year || e.year === year) &&
        (!type || e.type === type)
      );

      galleryCurrentPage = 1;
      renderGallery(filtered, galleryCurrentPage);
    }

    function filterVideos() {
      const query = document.getElementById("videoSearch").value.toLowerCase();
      videoCurrentPage = 1;
      if (query === "") {
        renderVideos(videos, videoCurrentPage);
      } else {
        const filtered = videos.filter(v =>
          v.title.toLowerCase().includes(query) ||
          v.description.toLowerCase().includes(query) ||
          v.date.toLowerCase().includes(query)
        );
        renderVideos(filtered, videoCurrentPage);
      }
    }

    function filterAudios() {
      const query = document.getElementById("audioSearch").value.toLowerCase();
      audioCurrentPage = 1;
      if (query === "") {
        renderAudios(audios, audioCurrentPage);
      } else {
        const filtered = audios.filter(audio =>
          audio.title.toLowerCase().includes(query) ||
          audio.description.toLowerCase().includes(query) ||
          audio.date.toLowerCase().includes(query)
        );
        renderAudios(filtered, audioCurrentPage);
      }
    }

    // Initialize
    document.addEventListener("DOMContentLoaded", () => {
      renderGallery(galleryData, galleryCurrentPage);
      renderVideos(videos, videoCurrentPage);
      renderAudios(audios, audioCurrentPage);
      window.openModal = openModal;

      // Populate gallery filters
      const months = [...new Set(galleryData.map(e => e.month).filter(Boolean))];
      months.forEach(m => document.getElementById("monthFilter").innerHTML += `<option value="${m}">${m}</option>`);

      const years = [...new Set(galleryData.map(e => e.year).filter(Boolean))].sort((a, b) => b - a);
      years.forEach(y => document.getElementById("yearFilter").innerHTML += `<option value="${y}">${y}</option>`);

      const types = [...new Set(galleryData.map(e => e.type))];
      types.forEach(t => document.getElementById("eventTypeFilter").innerHTML += `<option value="${t}">${t}</option>`);
    });
  </script>
</body>
</html>