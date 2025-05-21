<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Introduction to Philosophy</title>
  
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
    <a href="#branches">Branches of Philosophy</a>
    <a href="#major-philosophers">Major Philosophers</a>
    <a href="#critical-thinking">Critical Thinking & Logic</a>
    <a href="#applications">Applications of Philosophy</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Arts & Humanities Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Arts & Humanities Topics</h4>
    <a href="../ancient_civilizations/ancient-civilizations.php">Ancient Civilizations</a>
    <a href="../medieval_history/medieval-history.php">Medieval History</a>
    <a href="../modern_history/modern-history.php">Modern History</a>
    <a href="../english_literature/english-literature.php">English Literature</a>
    <a href="../world_literature/world-literature.php">World Literature</a>
    <a href="../creative_writing/creative-writing.php">Creative Writing</a>
    <a class="active" href="../introduction_to_philosophy/introduction-to-philosophy.php">Introduction to Philosophy</a>
    <a href="../ethics/ethics.php">Ethics</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Introduction to Philosophy</h1>
      <p>Philosophy examines fundamental questions about existence, knowledge, morality, and reason. It challenges us to think critically and explore the underpinnings of our beliefs.</p>

      <h2 id="introduction">Introduction</h2>
      <p>The term “philosophy” derives from Greek, meaning “love of wisdom.” Philosophers seek to clarify concepts and solve problems related to reality, ethics, and the human condition.</p>

      <h2 id="branches">Branches of Philosophy</h2>
      <ul>
        <li><strong>Metaphysics:</strong> The study of being, reality, and existence.</li>
        <li><strong>Epistemology:</strong> The nature of knowledge and belief.</li>
        <li><strong>Ethics:</strong> Moral principles and how we should live.</li>
        <li><strong>Logic:</strong> The structure of arguments and reasoning.</li>
        <li><strong>Aesthetics:</strong> The philosophy of art, beauty, and taste.</li>
      </ul>

      <h2 id="major-philosophers">Major Philosophers</h2>
      <ul>
        <li><strong>Ancient:</strong> Socrates, Plato, Aristotle.</li>
        <li><strong>Medieval:</strong> Augustine, Aquinas, Avicenna.</li>
        <li><strong>Modern:</strong> Descartes, Kant, Hume.</li>
        <li><strong>Contemporary:</strong> Sartre, Wittgenstein, Simone de Beauvoir.</li>
      </ul>

      <h2 id="critical-thinking">Critical Thinking & Logic</h2>
      <p>Philosophy teaches rigorous analysis of arguments:</p>
      <ul>
        <li><strong>Logical Fallacies:</strong> Recognizing errors like ad hominem or straw man arguments.</li>
        <li><strong>Syllogisms & Propositional Logic:</strong> Formal systems for structuring valid reasoning.</li>
        <li><strong>Dialectical Method:</strong> Dialogues that test ideas through question and answer.</li>
      </ul>

      <h2 id="applications">Applications of Philosophy</h2>
      <p>Philosophy’s impact is felt across disciplines:</p>
      <ul>
        <li><strong>Science:</strong> Foundations of the scientific method and ethics in research.</li>
        <li><strong>Politics & Law:</strong> Concepts of justice, rights, and governance.</li>
        <li><strong>Personal Life:</strong> Reflection on purpose, values, and meaning.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Primary Texts:</strong> Plato’s “Republic,” Kant’s “Critique of Pure Reason.”</li>
        <li><strong>Secondary Sources:</strong> Stanford Encyclopedia of Philosophy, Internet Encyclopedia of Philosophy.</li>
        <li><strong>Courses & Lectures:</strong> Open Yale Courses (Philosophy), edX, Coursera.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Philosophy invites us to question assumptions, evaluate evidence, and cultivate reasoned perspectives on life’s most profound issues. Engaging with philosophical thought enriches critical thinking skills and ethical understanding.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../creative_writing/creative-writing.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../ethics/ethics.php">Next</a></li>
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
