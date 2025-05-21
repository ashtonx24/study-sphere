<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Circuit Analysis</title>
  
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
    <a href="#basic-laws">Basic Laws & Theorems</a>
    <a href="#ac-analysis">AC Circuit Analysis</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>
    
    <hr style="margin: 16px 32px;">
    
    <!-- Other Engineering Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Engineering Topics</h4>
    <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
    <a href="../fluid_mechanics/fluid-mechanics.php">Fluid Mechanics</a>
    <a href="../materials_science/materials-science.php">Materials Science</a>
    <a class="active" href="../circuit_analysis/circuit-analysis.php">Circuit Analysis</a>
    <a href="../signals_and_systems/signals-and-systems.php">Signals and Systems</a>
    <a href="../control_systems/control-systems.php">Control Systems</a>
    <a href="../structural_analysis/structural-analysis.php">Structural Analysis</a>
    <a href="../geotechnical_engineering/geotechnical-engineering.php">Geotechnical Engineering</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Circuit Analysis</h1>
      <p>Circuit Analysis involves examining electrical circuits to determine voltage, current, and power. It’s foundational in electrical and electronics engineering.</p>

      <h2 id="introduction">Introduction</h2>
      <p>From simple resistive networks to complex AC circuits, understanding circuit behavior is crucial for designing everything from household appliances to advanced communication systems.</p>

      <h2 id="basic-laws">Basic Laws & Theorems</h2>
      <ul>
        <li><strong>Ohm’s Law:</strong> V = IR, relating voltage, current, and resistance.</li>
        <li><strong>Kirchhoff’s Laws:</strong> KCL (current in = current out), KVL (voltage rises = voltage drops).</li>
        <li><strong>Thevenin & Norton Theorems:</strong> Simplify complex circuits into equivalent models.</li>
      </ul>

      <h2 id="ac-analysis">AC Circuit Analysis</h2>
      <ul>
        <li><strong>Phasors:</strong> Represent sinusoidal voltages/currents in complex form.</li>
        <li><strong>Reactance & Impedance:</strong> Inductive and capacitive components affect phase relationships.</li>
        <li><strong>Resonance:</strong> Circuit frequencies where inductive and capacitive reactances cancel out.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Engineering Circuit Analysis” by Hayt, Kemmerly & Durbin.</li>
        <li><strong>Simulation Software:</strong> SPICE, Multisim for virtual circuit testing.</li>
        <li><strong>Online Tutorials:</strong> All About Circuits, Khan Academy (electronics section).</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Circuit Analysis provides the backbone for all electronic design, enabling engineers to predict circuit performance and troubleshoot effectively. Mastering these techniques is essential in electrical engineering.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../materials_science/materials-science.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../signals_and_systems/signals-and-systems.php">Next</a></li>
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
