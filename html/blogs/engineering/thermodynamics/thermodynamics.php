<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Thermodynamics</title>
  
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
    <a href="#laws">Laws of Thermodynamics</a>
    <a href="#applications">Applications</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>
    
    <hr style="margin: 16px 32px;">
    
    <!-- Other Engineering Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Engineering Topics</h4>
    <a class="active" href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
    <a href="../fluid_mechanics/fluid-mechanics.php">Fluid Mechanics</a>
    <a href="../materials_science/materials-science.php">Materials Science</a>
    <a href="../circuit_analysis/circuit-analysis.php">Circuit Analysis</a>
    <a href="../signals_and_systems/signals-and-systems.php">Signals and Systems</a>
    <a href="../control_systems/control-systems.php">Control Systems</a>
    <a href="../structural_analysis/structural-analysis.php">Structural Analysis</a>
    <a href="../geotechnical_engineering/geotechnical-engineering.php">Geotechnical Engineering</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Thermodynamics</h1>
      <p>Thermodynamics deals with heat, work, and energy transfer. It’s fundamental in designing engines, refrigerators, and understanding chemical processes.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Thermodynamics studies the relationships among various forms of energy, focusing on how thermal energy is converted to and from other energy forms. It underpins many engineering disciplines, including mechanical, chemical, and aerospace engineering.</p>

      <h2 id="laws">Laws of Thermodynamics</h2>
      <ul>
        <li><strong>Zeroeth Law:</strong> Defines temperature equilibrium.</li>
        <li><strong>First Law (Conservation of Energy):</strong> Energy cannot be created or destroyed, only transformed.</li>
        <li><strong>Second Law:</strong> Entropy of an isolated system always increases.</li>
        <li><strong>Third Law:</strong> Entropy approaches zero as temperature approaches absolute zero.</li>
      </ul>

      <h2 id="applications">Applications</h2>
      <p>From power plants and combustion engines to refrigeration and HVAC systems, thermodynamics guides the design of processes that involve heat and work exchange. It also plays a key role in material phase changes and chemical reactions.</p>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Fundamentals of Thermodynamics” by Borgnakke & Sonntag.</li>
        <li><strong>Software:</strong> MATLAB, EES (Engineering Equation Solver) for thermodynamic calculations.</li>
        <li><strong>Online Courses:</strong> MIT OpenCourseWare, Coursera for introductory thermodynamics.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Thermodynamics is a cornerstone of engineering, dictating how energy flows and transforms in systems. Mastering these principles is crucial for designing efficient and sustainable solutions.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
      <li class="page-item" id="prev-button"><a class="page-link" href="#">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../fluid_mechanics/fluid-mechanics.php">Next</a></li>
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
