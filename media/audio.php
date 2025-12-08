<?php
// Audio array
$audios = [
    [
        "title" => "Sunday Fellowship - January 2025",
        "date" => "Jan 12, 2025",
        "description" => "Join us for worship, word, and celebration as we began the new year.",
        "src" => "https://music.youtube.com/watch?v=deB1qCBoU8I&si=SzKKzo8vM-5LAg4H"
    ],
    [
        "title" => "Christmas Carol 2024",
        "date" => "Dec 20, 2024",
        "description" => "A night of joyful carols, praise and worship as we celebrated Christmas together.",
        "src" => "https://music.youtube.com/watch?v=deB1qCBoU8I&si=SzKKzo8vM-5LAg4H"
    ],
    [
        "title" => "Halleluyah Party 2024",
        "date" => "Dec 31, 2024",
        "description" => "An electrifying crossover service filled with music, joy and testimonies.",
        "src" => "https://music.youtube.com/watch?v=deB1qCBoU8I&si=SzKKzo8vM-5LAg4H"
    ],
    [
        "title" => "Youth Conference 2024",
        "date" => "Aug 15, 2024",
        "description" => "Empowering the youth with purpose and vision.",
        "src" => "https://music.youtube.com/watch?v=deB1qCBoU8I&si=SzKKzo8vM-5LAg4H"
    ],
    [
        "title" => "Easter Service 2024",
        "date" => "Apr 9, 2024",
        "description" => "Celebrating the resurrection of our Lord and Savior.",
        "src" => "https://music.youtube.com/watch?v=deB1qCBoU8I&si=SzKKzo8vM-5LAg4H"
    ]
];
?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-warning mb-2">Listen Our Services</h2>
        <p class="lead text-secondary">
            Revisit powerful sermons, celebrations, and special events.
        </p>
    </div>

    <!-- Search Bar -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <input type="text" id="audioSearch" class="form-control rounded-pill ps-4"
                placeholder="Search audios..." onkeyup="filterAudios()">
        </div>
    </div>

    <!-- Video Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="videoGrid">
        <?php
        // show only first 3 by default
        foreach ($audios as $index => $audio):
            if ($index >= 3) break;
        ?>
            <div class="col video-card">
                <div class="card h-100 shadow-sm border-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="<?php echo $audio['src']; ?>" title="<?php echo $audio['title']; ?>" allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?php echo $audio['title']; ?></h5>
                        <p class="text-muted small mb-1">Uploaded: <?php echo $audio['date']; ?></p>
                        <p class="card-text"><?php echo $audio['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="pagination mt-5">
        <a href="#"><i class="fas fa-chevron-left"></i></a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <span>...</span>
        <a href="#">14</a>
        <a href="#">15</a>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>
</div>

<script>
    // Full audio list (same as PHP array for client-side search)
    const audios = <?php echo json_encode($audios); ?>;

    // Render audio cards dynamically
    function renderAudios(list) {
        const container = document.getElementById("audioGrid");
        container.innerHTML = "";
        if (list.length === 0) {
            container.innerHTML = `<div class="col-12 text-center text-muted">No audios found</div>`;
            return;
        }
        list.forEach(audio => {
            container.innerHTML += `
      <div class="col video-card">
        <div class="card h-100 shadow-sm border-0">
          <div class="ratio ratio-16x9">
            <iframe src="${audio.src}" title="${audio.title}" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold">${audio.title}</h5>
            <p class="text-muted small mb-1">Uploaded: ${audio.date}</p>
            <p class="card-text">${audio.description}</p>
          </div>
        </div>
      </div>
    `;
        });
    }

    // Filter function
    function filterAudios() {
        const query = document.getElementById("audioSearch").value.toLowerCase();
        if (query === "") {
            renderAudios(audios.slice(0, 3)); // show only first 3 again
        } else {
            const filtered = audios.filter(v =>
                v.title.toLowerCase().includes(query) ||
                v.description.toLowerCase().includes(query) ||
                v.date.toLowerCase().includes(query)
            );
            renderAudios(filtered);
        }
    }
</script>