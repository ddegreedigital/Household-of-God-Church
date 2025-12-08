<?php include '../component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Watch & Listen</title>
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

    .video-card, .audio-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .video-card:hover, .audio-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .audio-player {
      width: 100%;
      border-radius: 5px;
    }

    .church-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #6C757D;
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

    @media (max-width: 768px) {
      .section-title {
        font-size: 2rem;
      }

      .church-text {
        font-size: 1rem;
      }
    }

    @media (max-width: 576px) {
      .section-title {
        font-size: 1.75rem;
      }

      .church-text {
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>
  <?php renderHeader(); ?>
  <?php renderBanner('Watch & Listen'); ?>

  <div class="container church-section">
    <!-- Video Section -->
    <div id="videoSection">
      <div class="text-center mb-5">
        <h2 class="section-title mb-2">Watch Our Services and Events</h2>
        <p class="lead text-secondary church-text">
          Revisit powerful sermons, celebrations, and special events, including programs for children.
        </p>
      </div>

      <div class="row justify-content-center mb-4">
        <div class="col-md-6">
          <input type="text" id="videoSearch" class="form-control rounded-pill ps-4"
            placeholder="Search videos..." aria-label="Search videos" onkeyup="filterVideos()">
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="videoGrid">
        <?php
        // Video array
        $videos = [
          [
            "title" => "Sunday Service - January 2025",
            "date" => "Jan 12, 2025",
            "description" => "A vibrant worship service to start the new year with faith and fellowship.",
            "src" => "https://www.youtube.com/embed/lhfk1X072kc"
          ],
          [
            "title" => "Christmas Carol Service 2024",
            "date" => "Dec 20, 2024",
            "description" => "A heartwarming celebration of Christ’s birth with carols and worship.",
            "src" => "https://www.youtube.com/embed/lhfk1X072kc"
          ],
          [
            "title" => "Halleluyah Crossover Service 2024",
            "date" => "Dec 31, 2024",
            "description" => "An inspiring crossover service filled with praise and testimonies.",
            "src" => "https://www.youtube.com/embed/lhfk1X072kc"
          ],
          [
            "title" => "Children’s Sunday School Event 2024",
            "date" => "Aug 15, 2024",
            "description" => "A joyful event for children with songs, stories, and activities.",
            "src" => "https://www.youtube.com/embed/lhfk1X072kc"
          ],
          [
            "title" => "Easter Resurrection Service 2024",
            "date" => "Apr 9, 2024",
            "description" => "Celebrating the resurrection of Jesus Christ with worship and reflection.",
            "src" => "https://www.youtube.com/embed/lhfk1X072kc"
          ]
        ];
        // Show only first 3 by default
        foreach (array_slice($videos, 0, 3) as $video):
        ?>
          <div class="col video-card">
            <div class="card h-100 shadow-sm border-0">
              <div class="ratio ratio-16x9">
                <iframe src="<?php echo $video['src']; ?>" title="<?php echo $video['title']; ?>" allowfullscreen></iframe>
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
    <div id="audioSection" class="mt-5">
      <div class="text-center mb-5">
        <h2 class="section-title mb-2">Listen to Our Sermons and Events</h2>
        <p class="lead text-secondary church-text">
          Revisit powerful sermons, worship sessions, and special events, including programs for children.
        </p>
      </div>

      <div class="row justify-content-center mb-4">
        <div class="col-md-6">
          <input type="text" id="audioSearch" class="form-control rounded-pill ps-4"
            placeholder="Search sermons and events..." aria-label="Search sermons and events"
            onkeyup="filterAudios()">
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="audioGrid">
        <?php
        // Audio array
        $audios = [
          [
            "title" => "Sunday Sermon - January 2025",
            "date" => "Jan 12, 2025",
            "description" => "A powerful sermon on faith and renewal as we began the new year.",
            "src" => "/audio/sermon-2025-01-12.mp3"
          ],
          [
            "title" => "Christmas Worship Service 2024",
            "date" => "Dec 20, 2024",
            "description" => "A joyful celebration of Christ’s birth with worship and carols.",
            "src" => "/audio/christmas-2024.mp3"
          ],
          [
            "title" => "Crossover Service 2024",
            "date" => "Dec 31, 2024",
            "description" => "An inspiring crossover service filled with praise and testimonies.",
            "src" => "/audio/crossover-2024.mp3"
          ],
          [
            "title" => "Children’s Sunday School Session 2024",
            "date" => "Aug 15, 2024",
            "description" => "An engaging session for children to learn about God’s love.",
            "src" => "/audio/childrens-session-2024.mp3"
          ],
          [
            "title" => "Easter Resurrection Service 2024",
            "date" => "Apr 9, 2024",
            "description" => "Celebrating the resurrection of Jesus Christ with worship and reflection.",
            "src" => "/audio/easter-2024.mp3"
          ]
        ];
        // Show only first 3 by default
        foreach (array_slice($audios, 0, 3) as $audio):
        ?>
          <div class="col audio-card">
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
  </div>

  <?php renderFooter(); ?>

  <script>
    // Full video and audio lists
    const videos = <?php echo json_encode($videos); ?>;
    const audios = <?php echo json_encode($audios); ?>;
    const itemsPerPage = 3;
    let videoCurrentPage = 1;
    let audioCurrentPage = 1;

    // Render Videos
    function renderVideos(list, page = 1) {
      const container = document.getElementById("videoGrid");
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const paginatedList = list.slice(start, end);
      container.innerHTML = paginatedList.length ? paginatedList.map(video => `
        <div class="col video-card">
          <div class="card h-100 shadow-sm border-0">
            <div class="ratio ratio-16x9">
              <iframe src="${video.src}" title="${video.title}" allowfullscreen></iframe>
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
        <div class="col audio-card">
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
           aria-label="Previous page">
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
           aria-label="Next page">
          <i class="fas fa-chevron-right"></i>
        </a>
      `;
    }

    // Change Video Page
    function changeVideoPage(page) {
      if (page < 1 || page > Math.ceil(videos.length / itemsPerPage)) return;
      videoCurrentPage = page;
      filterVideos();
    }

    // Change Audio Page
    function changeAudioPage(page) {
      if (page < 1 || page > Math.ceil(audios.length / itemsPerPage)) return;
      audioCurrentPage = page;
      filterAudios();
    }

    // Filter Videos
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

    // Filter Audios
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

    // Initial render
    document.addEventListener("DOMContentLoaded", () => {
      renderVideos(videos, videoCurrentPage);
      renderAudios(audios, audioCurrentPage);
    });
  </script>
</body>
</html>