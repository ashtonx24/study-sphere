<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Materials Science</title>
  
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
    <a href="#material-types">Types of Materials</a>
    <a href="#structure-properties">Structure-Property Relationships</a>
    <a href="#processing">Materials Processing</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>
    
    <hr style="margin: 16px 32px;">
    
    <!-- Other Engineering Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Engineering Topics</h4>
    <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
    <a href="../fluid_mechanics/fluid-mechanics.php">Fluid Mechanics</a>
    <a class="active" href="../materials_science/materials-science.php">Materials Science</a>
    <a href="../circuit_analysis/circuit-analysis.php">Circuit Analysis</a>
    <a href="../signals_and_systems/signals-and-systems.php">Signals and Systems</a>
    <a href="../control_systems/control-systems.php">Control Systems</a>
    <a href="../structural_analysis/structural-analysis.php">Structural Analysis</a>
    <a href="../geotechnical_engineering/geotechnical-engineering.php">Geotechnical Engineering</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Materials Science</h1>
      <p>Materials Science investigates the relationship between the structure of materials at atomic or molecular scales and their macroscopic properties. It’s key to developing new materials with desirable characteristics.</p>

      <h2 id="introduction">Introduction</h2>
      <p>By understanding how composition and processing affect a material’s performance, engineers can select or create substances suited for specific applications, from aerospace alloys to biodegradable plastics.</p>

      <h2 id="material-types">Types of Materials</h2>
      <ul>
        <li><strong>Metals & Alloys:</strong> Conductive, ductile, often strong.</li>
        <li><strong>Ceramics:</strong> Brittle but highly heat-resistant and hard.</li>
        <li><strong>Polymers:</strong> Lightweight, can be flexible or rigid.</li>
        <li><strong>Composites:</strong> Combined materials to achieve superior properties.</li>
      </ul>

      <h2 id="structure-properties">Structure-Property Relationships</h2>
      <p>Material properties like strength, conductivity, or toughness arise from atomic arrangements and bonding:</p>
      <ul>
        <li><strong>Crystalline vs. Amorphous:</strong> Ordered vs. disordered atomic structure.</li>
        <li><strong>Defects:</strong> Dislocations, vacancies, grain boundaries can affect strength.</li>
      </ul>

      <h2 id="processing">Materials Processing</h2>
      <ul>
        <li><strong>Heat Treatment:</strong> Alters microstructure in metals (annealing, quenching, tempering).</li>
        <li><strong>Polymerization:</strong> Controls molecular weight and properties of plastics.</li>
        <li><strong>Sintering:</strong> Fusing powder particles at high temperature (ceramics, powder metallurgy).</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Materials Science and Engineering” by Callister & Rethwisch.</li>
        <li><strong>Characterization Tools:</strong> X-ray diffraction, SEM, TEM.</li>
        <li><strong>Databases:</strong> MatWeb, ASM Handbooks for material properties.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Materials Science enables innovation across industries by revealing how structure and processing govern performance. Engineers leverage these insights to develop advanced, specialized materials.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../fluid_mechanics/fluid-mechanics.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../circuit_analysis/circuit-analysis.php">Next</a></li>
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
