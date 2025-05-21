<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Medieval History</title>
  
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
    <a href="#feudal-system">The Feudal System</a>
    <a href="#church-influence">Influence of the Church</a>
    <a href="#crusades">The Crusades</a>
    <a href="#cultural-developments">Cultural Developments</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Arts & Humanities Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Arts & Humanities Topics</h4>
    <a href="../ancient_civilizations/ancient-civilizations.php">Ancient Civilizations</a>
    <a class="active" href="../medieval_history/medieval-history.php">Medieval History</a>
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
      <h1>Medieval History</h1>
      <p>The Medieval Period (approximately 5th to 15th century) was a transformative era in Europe, marked by feudalism, religious influence, and cultural blossoming. This guide explores the feudal system, the Church’s role, and key cultural developments.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Often referred to as the “Middle Ages,” this period followed the fall of the Western Roman Empire. It saw the rise of localized power structures, monastic scholarship, and eventual transitions toward the Renaissance.</p>

      <h2 id="feudal-system">The Feudal System</h2>
      <p>Feudalism shaped social, economic, and political life in medieval Europe:</p>
      <ul>
        <li><strong>Lords & Vassals:</strong> Nobles granted land (fiefs) in return for military service.</li>
        <li><strong>Serfs & Peasants:</strong> Worked the land under feudal obligations, rarely able to move freely.</li>
        <li><strong>Manorialism:</strong> The economic system supporting feudal relationships.</li>
      </ul>

      <h2 id="church-influence">Influence of the Church</h2>
      <p>The Catholic Church was a central institution, guiding moral, spiritual, and political life:</p>
      <ul>
        <li><strong>Monasteries:</strong> Centers of learning and manuscript preservation.</li>
        <li><strong>Papal Authority:</strong> Popes wielded significant power over kings and emperors.</li>
        <li><strong>Religious Orders:</strong> Groups like the Benedictines and Franciscans shaped spirituality and charity.</li>
      </ul>

      <h2 id="crusades">The Crusades</h2>
      <p>These were a series of religious wars primarily aimed at reclaiming the Holy Land:</p>
      <ul>
        <li><strong>First Crusade (1096–1099):</strong> Captured Jerusalem.</li>
        <li><strong>Subsequent Crusades:</strong> Mixed outcomes, with lasting cultural and economic impacts.</li>
        <li><strong>Legacy:</strong> Opened trade routes and influenced relations between Europe and the Middle East.</li>
      </ul>

      <h2 id="cultural-developments">Cultural Developments</h2>
      <ul>
        <li><strong>Gothic Architecture:</strong> Cathedrals with pointed arches, stained glass, and flying buttresses.</li>
        <li><strong>Literature & Art:</strong> Epic poetry (e.g., “The Song of Roland”), illuminated manuscripts.</li>
        <li><strong>Universities:</strong> Centers of higher learning began to form (e.g., Bologna, Oxford).</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “The Civilization of the Middle Ages” by Norman F. Cantor, “A Distant Mirror” by Barbara Tuchman.</li>
        <li><strong>Online Platforms:</strong> The British Library’s Digitized Medieval Manuscripts, The Metropolitan Museum of Art’s Heilbrunn Timeline of Art History.</li>
        <li><strong>Documentaries:</strong> BBC’s “Medieval Lives,” “Secrets of the Castle.”</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>The Medieval Era laid essential groundwork for modern Europe through the evolution of governance, religion, and education. The Church’s central role and feudal structures set the stage for social and political transformations leading into the Renaissance.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../ancient_civilizations/ancient-civilizations.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../modern_history/modern-history.php">Next</a></li>
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
