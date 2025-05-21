<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Ethics</title>
  
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
    <a href="#ethical-theories">Ethical Theories</a>
    <a href="#applied-ethics">Applied Ethics</a>
    <a href="#moral-dilemmas">Moral Dilemmas</a>
    <a href="#global-issues">Global Ethical Issues</a>
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
    <a href="../introduction_to_philosophy/introduction-to-philosophy.php">Introduction to Philosophy</a>
    <a class="active" href="../ethics/ethics.php">Ethics</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Ethics</h1>
      <p>Ethics is the philosophical study of moral principles that govern behavior. It helps us discern right from wrong and guides individual and collective decision-making.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Ethics examines questions of duty, virtue, and justice. It asks how we should live, what values matter, and how moral rules are justified.</p>

      <h2 id="ethical-theories">Ethical Theories</h2>
      <ul>
        <li><strong>Utilitarianism:</strong> Maximizing overall happiness (Bentham, Mill).</li>
        <li><strong>Deontology:</strong> Duty-based ethics (Kant), focusing on universal moral laws.</li>
        <li><strong>Virtue Ethics:</strong> Cultivating character traits (Aristotle) for moral living.</li>
        <li><strong>Care Ethics:</strong> Emphasizing empathy and relationships (Gilligan, Noddings).</li>
      </ul>

      <h2 id="applied-ethics">Applied Ethics</h2>
      <p>Applying ethical theories to real-world contexts:</p>
      <ul>
        <li><strong>Bioethics:</strong> Medical decisions, genetic engineering, end-of-life care.</li>
        <li><strong>Business Ethics:</strong> Corporate social responsibility, fair labor practices.</li>
        <li><strong>Environmental Ethics:</strong> Sustainability, climate change, and conservation.</li>
      </ul>

      <h2 id="moral-dilemmas">Moral Dilemmas</h2>
      <p>Ethical reasoning is often tested by dilemmas with no perfect solution:</p>
      <ul>
        <li><strong>Trolley Problem:</strong> Choosing to save more lives at the cost of sacrificing one.</li>
        <li><strong>Privacy vs. Security:</strong> Balancing individual rights with collective safety.</li>
      </ul>

      <h2 id="global-issues">Global Ethical Issues</h2>
      <ul>
        <li><strong>Human Rights:</strong> Universal declarations vs. cultural relativism.</li>
        <li><strong>Poverty & Inequality:</strong> Distributive justice, charity, and systemic change.</li>
        <li><strong>Technological Advancements:</strong> AI ethics, data privacy, transhumanism.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Philosophy Texts:</strong> “Groundwork of the Metaphysics of Morals” by Kant, “Nicomachean Ethics” by Aristotle.</li>
        <li><strong>Case Studies:</strong> Harvard Business Review for applied ethics in organizations.</li>
        <li><strong>Ethics Centers:</strong> The Hastings Center, UNESCO’s Bioethics programs.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Ethics provides a framework for evaluating moral questions and shaping compassionate, responsible societies. By studying various ethical theories and their applications, we can make more informed, principled decisions.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../introduction_to_philosophy/introduction-to-philosophy.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <!-- Last topic in this sequence, so no "Next" or link to an overview -->
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
