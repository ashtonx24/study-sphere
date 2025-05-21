<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Geotechnical Engineering</title>
  
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
    <a href="#soil-properties">Soil Properties</a>
    <a href="#site-investigation">Site Investigation</a>
    <a href="#foundation-design">Foundation Design</a>
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
    <a href="../structural_analysis/structural-analysis.php">Structural Analysis</a>
    <a class="active" href="../geotechnical_engineering/geotechnical-engineering.php">Geotechnical Engineering</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Geotechnical Engineering</h1>
      <p>Geotechnical Engineering deals with the behavior of earth materials and how they interact with foundations, slopes, and retaining structures. It’s crucial for safe, stable construction on or in the ground.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Soil and rock mechanics guide geotechnical decisions, from selecting foundation types to designing earth-retaining walls. Proper analysis prevents catastrophic failures like landslides or foundation collapse.</p>

      <h2 id="soil-properties">Soil Properties</h2>
      <ul>
        <li><strong>Grain Size Distribution:</strong> Sand, silt, clay proportions affect drainage and strength.</li>
        <li><strong>Atterberg Limits:</strong> Liquid and plastic limits for fine-grained soils.</li>
        <li><strong>Shear Strength:</strong> Cohesion and internal friction angle define load-bearing capacity.</li>
      </ul>

      <h2 id="site-investigation">Site Investigation</h2>
      <p>Field and laboratory tests characterize subsurface conditions:</p>
      <ul>
        <li><strong>Boring & Sampling:</strong> Drilling to obtain soil/rock samples.</li>
        <li><strong>Standard Penetration Test (SPT):</strong> Measures soil resistance to penetration.</li>
        <li><strong>Geophysical Surveys:</strong> Seismic refraction, ground-penetrating radar.</li>
      </ul>

      <h2 id="foundation-design">Foundation Design</h2>
      <ul>
        <li><strong>Shallow Foundations:</strong> Spread footings, mat foundations for moderate loads.</li>
        <li><strong>Deep Foundations:</strong> Piles or drilled shafts for higher loads or weak surface soils.</li>
        <li><strong>Retaining Structures:</strong> Walls and slopes designed to resist lateral earth pressure.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Principles of Geotechnical Engineering” by Braja M. Das.</li>
        <li><strong>Software:</strong> PLAXIS, GeoStudio for geotechnical modeling and slope stability.</li>
        <li><strong>Codes & Standards:</strong> AASHTO, ASTM for soil testing and design guidelines.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Geotechnical Engineering ensures that structures are built on solid ground. Through site investigations, soil characterization, and careful foundation design, engineers mitigate risks and enhance structural stability.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../structural_analysis/structural-analysis.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <!-- Last topic in this sequence, so no "Next" -->
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
