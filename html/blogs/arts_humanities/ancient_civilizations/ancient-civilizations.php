<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Ancient Civilizations</title>
  
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
      <button id="theme-toggle" class="theme-toggle-btn btn">☀️</button><!-- Theme Toggle Button -->
      <a href="/study-sphere/html/home.php" class="btn btn-primary mr-2">Home</a>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal">
        Logout
      </button>
    </div>
  </header>

  <!-- Logout Confirmation Modal -->
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
    <a href="#major-civilizations">Major Civilizations</a>
    <a href="#cultural-impact">Cultural Impact</a>
    <a href="#notable-contributions">Notable Contributions</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Arts & Humanities Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Arts & Humanities Topics</h4>
    <a class="active" href="../ancient_civilizations/ancient-civilizations.php">Ancient Civilizations</a>
    <a href="../medieval_history/medieval-history.php">Medieval History</a>
    <a href="../modern_history/modern-history.php">Modern History</a>
    <a href="../english_literature/english-literature.php">English Literature</a>
    <a href="../world_literature/world-literature.php">World Literature</a>
    <a href="../creative_writing/creative-writing.php">Creative Writing</a>
    <a href="../introduction_to_philosophy/introduction-to-philosophy.php">Introduction to Philosophy</a>
    <a href="../ethics/ethics.php">Ethics</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Ancient Civilizations</h1>
      <p>Ancient Civilizations laid the foundation for modern society through innovations in writing, governance, religion, and more. From Mesopotamia and Egypt to the Indus Valley and China, these cultures shaped art, architecture, and scientific thought.</p>

      <h2 id="introduction">Introduction</h2>
      <p>The study of Ancient Civilizations involves understanding how early societies organized themselves, managed resources, and developed culture. Many aspects of modern life—such as legal codes, mathematics, and architectural design—trace back to these early periods.</p>

      <h2 id="major-civilizations">Major Civilizations</h2>
      <ul>
        <li><strong>Mesopotamia (Sumer, Babylon, Assyria):</strong> Often called the “Cradle of Civilization.”</li>
        <li><strong>Ancient Egypt:</strong> Renowned for pyramids, hieroglyphics, and a sophisticated bureaucracy.</li>
        <li><strong>Indus Valley:</strong> Urban planning, drainage systems, and standardized weights.</li>
        <li><strong>Ancient China:</strong> Dynasties that contributed writing, philosophy, and technological inventions.</li>
      </ul>

      <h2 id="cultural-impact">Cultural Impact</h2>
      <p>These civilizations influenced language, religion, and governance systems. Many of their myths and legends persist in modern storytelling, while religious practices evolved into today’s faiths. Architectural feats like ziggurats, pyramids, and early city planning still inspire architects.</p>

      <h2 id="notable-contributions">Notable Contributions</h2>
      <ul>
        <li><strong>Writing Systems:</strong> Cuneiform, hieroglyphics, and early alphabets.</li>
        <li><strong>Mathematics & Astronomy:</strong> Base-60 number system, early calendars, star charts.</li>
        <li><strong>Law Codes:</strong> Hammurabi’s Code introduced standardized justice.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “The Ancient Near East” by Amélie Kuhrt, “A History of Ancient Egypt” by Nicolas Grimal.</li>
        <li><strong>Online Platforms:</strong> Khan Academy’s world history courses, BBC’s Ancient History section.</li>
        <li><strong>Archaeological Journals:</strong> Publications such as the Journal of Near Eastern Studies.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Ancient Civilizations offer a glimpse into humanity’s earliest innovations and societal structures. Their legacy remains in modern language, law, and culture, underscoring the importance of studying these foundational periods in history.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
      <li class="page-item" id="prev-button"><a class="page-link" href="#">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../medieval_history/medieval-history.php">Next</a></li>
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
