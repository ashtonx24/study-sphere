<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – World Literature</title>
  
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
    <a href="#epics-and-classics">Epics & Classics</a>
    <a href="#east-west-canon">Eastern & Western Canon</a>
    <a href="#postcolonial-voices">Postcolonial Voices</a>
    <a href="#contemporary-authors">Contemporary Authors</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Arts & Humanities Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Arts & Humanities Topics</h4>
    <a href="../ancient_civilizations/ancient-civilizations.php">Ancient Civilizations</a>
    <a href="../medieval_history/medieval-history.php">Medieval History</a>
    <a href="../modern_history/modern-history.php">Modern History</a>
    <a href="../english_literature/english-literature.php">English Literature</a>
    <a class="active" href="../world_literature/world-literature.php">World Literature</a>
    <a href="../creative_writing/creative-writing.php">Creative Writing</a>
    <a href="../introduction_to_philosophy/introduction-to-philosophy.php">Introduction to Philosophy</a>
    <a href="../ethics/ethics.php">Ethics</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>World Literature</h1>
      <p>World Literature encompasses literary works from diverse cultures and languages, highlighting universal themes and cultural specificities. From ancient epics to contemporary global voices, it broadens perspectives and fosters cross-cultural understanding.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Exploring World Literature means stepping beyond national or linguistic boundaries to discover how different societies articulate their stories, values, and histories. This global view reveals shared human experiences as well as unique cultural expressions.</p>

      <h2 id="epics-and-classics">Epics & Classics</h2>
      <ul>
        <li><strong>Greek & Roman Epics:</strong> “The Iliad,” “The Odyssey,” “The Aeneid.”</li>
        <li><strong>Indian Epics:</strong> “The Mahabharata,” “The Ramayana.”</li>
        <li><strong>Chinese Classics:</strong> “Journey to the West,” “Romance of the Three Kingdoms.”</li>
      </ul>

      <h2 id="east-west-canon">Eastern & Western Canon</h2>
      <p>Over centuries, each region developed a literary canon shaping national identity:</p>
      <ul>
        <li><strong>Western Canon:</strong> European and North American works (Dante, Goethe, Dostoevsky).</li>
        <li><strong>Eastern Canon:</strong> Persian poetry (Rumi, Hafez), Japanese literature (Murasaki Shikibu), Chinese poetry (Li Bai).</li>
      </ul>

      <h2 id="postcolonial-voices">Postcolonial Voices</h2>
      <p>Postcolonial literature gives voice to previously marginalized cultures:</p>
      <ul>
        <li><strong>Africa:</strong> Chinua Achebe’s “Things Fall Apart,” Ngũgĩ wa Thiong’o.</li>
        <li><strong>Caribbean:</strong> Derek Walcott, Jean Rhys.</li>
        <li><strong>South Asia:</strong> Salman Rushdie, Arundhati Roy.</li>
      </ul>

      <h2 id="contemporary-authors">Contemporary Authors</h2>
      <p>In the 21st century, global connectivity fosters cross-cultural exchange:</p>
      <ul>
        <li><strong>Translations:</strong> Greater availability of works by international authors in multiple languages.</li>
        <li><strong>Literary Prizes:</strong> Nobel Prize, Man Booker International, and more spotlight global talent.</li>
        <li><strong>Genres & Themes:</strong> Blending of traditions, diaspora narratives, climate fiction, etc.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Anthologies:</strong> “The Norton Anthology of World Literature.”</li>
        <li><strong>Online Platforms:</strong> Words Without Borders, Asymptote Journal for translations.</li>
        <li><strong>Libraries & Book Clubs:</strong> Explore local and online communities discussing world literature.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>World Literature offers a panoramic view of human storytelling, from ancient epics to contemporary global narratives. It enriches cultural literacy and empathy by showcasing both universal human themes and unique local identities.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../english_literature/english-literature.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../creative_writing/creative-writing.php">Next</a></li>
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
