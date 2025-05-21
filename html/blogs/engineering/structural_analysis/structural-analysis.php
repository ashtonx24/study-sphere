<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Structural Analysis</title>
  
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
    <a href="#analysis-methods">Analysis Methods</a>
    <a href="#load-types">Load Types</a>
    <a href="#failure-modes">Failure Modes</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>
    
    <hr style="margin: 16px 32px;">
    
    <!-- Other Engineering Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Engineering Topics</h4>
    <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
    <a href="../fluid_mechanics/fluid-mechanics.php">Fluid Mechanics</a>
    <a href="../materials_science/materials-science.php">Materials Science</a>
    <a href="../circuit_analysis/circuit-analysis.php">Circuit Analysis</a>
    <a href="../signals_and_systems/signals-and-systems.php">Signals and Systems</a>
    <a href="../control_systems/control-systems.php">Control Systems</a>
    <a class="active" href="../structural_analysis/structural-analysis.php">Structural Analysis</a>
    <a href="../geotechnical_engineering/geotechnical-engineering.php">Geotechnical Engineering</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Structural Analysis</h1>
      <p>Structural Analysis evaluates how structures (bridges, buildings, etc.) behave under loads. It ensures safety and performance by predicting stresses, deformations, and potential failure points.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Engineers use mathematical models and computational tools to design structures that withstand forces such as gravity, wind, and seismic activity. Material properties and geometric considerations are key factors.</p>

      <h2 id="analysis-methods">Analysis Methods</h2>
      <ul>
        <li><strong>Classical Methods:</strong> Truss analysis, beam bending equations, moment distribution.</li>
        <li><strong>Finite Element Analysis (FEA):</strong> Breaks structures into small elements for detailed stress/strain calculations.</li>
      </ul>

      <h2 id="load-types">Load Types</h2>
      <ul>
        <li><strong>Dead Loads:</strong> Permanent (self-weight, fixed installations).</li>
        <li><strong>Live Loads:</strong> Variable (occupants, furniture, vehicles).</li>
        <li><strong>Environmental Loads:</strong> Wind, earthquake, snow, temperature changes.</li>
      </ul>

      <h2 id="failure-modes">Failure Modes</h2>
      <p>Understanding how structures can fail is essential for robust design:</p>
      <ul>
        <li><strong>Buckling:</strong> Sudden deformation under compressive stress.</li>
        <li><strong>Fracture:</strong> Crack propagation in brittle materials.</li>
        <li><strong>Fatigue:</strong> Cumulative damage under repeated loading cycles.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Mechanics of Materials” by Beer & Johnston, “Structural Analysis” by Hibbeler.</li>
        <li><strong>Software:</strong> SAP2000, ETABS, ANSYS for FEA and structural modeling.</li>
        <li><strong>Design Codes:</strong> AISC, Eurocode, and local building codes for guidelines.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Structural Analysis ensures the integrity and longevity of engineered structures. By accurately predicting how materials and geometries respond to loads, engineers create safe, efficient designs.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../control_systems/control-systems.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../geotechnical_engineering/geotechnical-engineering.php">Next</a></li>
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
