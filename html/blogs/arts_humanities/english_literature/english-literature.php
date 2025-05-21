<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – English Literature</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/study-sphere/assets/css/blog.css">
</head>
<body>
  <!-- Header Section -->
  <header class="d-flex justify-content-between align-items-center p-2">
    <div class="d-flex align-items-center">
      <button class="openbtn" onclick="openNav()">☰</button>
    </div>
    <div class="btn-group right-section">
      <button id="theme-toggle" class="theme-toggle-btn btn">☀️</button>
      <a href="/study-sphere/html/home.php" class="btn btn-primary mr-2">Home</a>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal">
        Logout
      </button>
    </div>
  </header>

  <!-- Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Are you sure you want to logout?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-primary yes" id="confirmLogoutBtn">Yes</button>
            </div>
        </div>
    </div>
  </div>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

    <!-- In-Page Navigation -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">On This Page</h4>
    <a href="#introduction">Introduction</a>
    <a href="#medieval-literature">Medieval Literature</a>
    <a href="#renaissance">The Renaissance</a>
    <a href="#romantic-victorian">Romantic & Victorian Eras</a>
    <a href="#modern-postmodern">Modern & Postmodern</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Arts & Humanities Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Arts & Humanities Topics</h4>
    <a href="../ancient_civilizations/ancient-civilizations.php">Ancient Civilizations</a>
    <a href="../medieval_history/medieval-history.php">Medieval History</a>
    <a href="../modern_history/modern-history.php">Modern History</a>
    <a class="active" href="../english_literature/english-literature.php">English Literature</a>
    <a href="../world_literature/world-literature.php">World Literature</a>
    <a href="../creative_writing/creative-writing.php">Creative Writing</a>
    <a href="../introduction_to_philosophy/introduction-to-philosophy.php">Introduction to Philosophy</a>
    <a href="../ethics/ethics.php">Ethics</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>English Literature</h1>
      <p>English Literature spans centuries of rich textual production, from early medieval works to contemporary novels. Exploring its major periods reveals evolving language, cultural influences, and literary styles.</p>

      <h2 id="introduction">Introduction</h2>
      <p>From Old English epics to postmodern novels, English Literature reflects the social, political, and philosophical contexts of each era. Major literary movements often correspond to broader cultural shifts.</p>

      <h2 id="medieval-literature">Medieval Literature</h2>
      <ul>
        <li><strong>Old English:</strong> “Beowulf” stands out as a heroic epic.</li>
        <li><strong>Middle English:</strong> Geoffrey Chaucer’s “The Canterbury Tales” exemplifies narrative verse.</li>
        <li><strong>Religious Texts:</strong> Mystery plays and morality plays teaching Christian values.</li>
      </ul>

      <h2 id="renaissance">The Renaissance</h2>
      <p>The 16th and early 17th centuries saw a flowering of literature under the influence of humanism and royal patronage:</p>
      <ul>
        <li><strong>Shakespeare:</strong> Plays and sonnets that shaped the English language.</li>
        <li><strong>Elizabethan Poetry:</strong> Spenser’s “The Faerie Queene,” sonnet sequences by Sidney.</li>
        <li><strong>Jacobean Drama:</strong> Works by Ben Jonson, John Webster.</li>
      </ul>

      <h2 id="romantic-victorian">Romantic & Victorian Eras</h2>
      <ul>
        <li><strong>Romantics (late 18th–early 19th c.):</strong> Poets like Wordsworth, Coleridge, and Keats emphasized emotion and nature.</li>
        <li><strong>Victorian (1837–1901):</strong> Novelists like Charles Dickens, the Brontë sisters, and Thomas Hardy explored social issues.</li>
        <li><strong>Poetry & Essays:</strong> Tennyson, Browning, and Carlyle reflected the era’s moral and industrial concerns.</li>
      </ul>

      <h2 id="modern-postmodern">Modern & Postmodern</h2>
      <ul>
        <li><strong>Modernism (early 20th c.):</strong> Stream-of-consciousness (James Joyce, Virginia Woolf), experimentation with form (T.S. Eliot).</li>
        <li><strong>Postmodern (mid–late 20th c.):</strong> Playful narratives, metafiction (Salman Rushdie, Angela Carter).</li>
        <li><strong>Contemporary Trends:</strong> Globalized perspectives, diverse voices in British and Commonwealth literature.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Anthologies:</strong> Norton Anthology of English Literature for comprehensive readings.</li>
        <li><strong>Online Libraries:</strong> Project Gutenberg, Internet Archive for public domain texts.</li>
        <li><strong>Critical Studies:</strong> JSTOR, academic journals for literary criticism.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>English Literature provides a lens through which we can observe the evolution of language, societal values, and artistic innovation. Its diverse periods offer endless insights into the human experience.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../modern_history/modern-history.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../world_literature/world-literature.php">Next</a></li>
      </ul>
    </div>
  </div>

  <!-- Scripts -->
  <script src="/study-sphere/assets/js/store.js"></script>
  <script src="/study-sphere/assets/js/blog.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
