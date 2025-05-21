<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Fluid Mechanics</title>
  
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
    <a href="#fluid-properties">Properties of Fluids</a>
    <a href="#fluid-statics">Fluid Statics</a>
    <a href="#fluid-dynamics">Fluid Dynamics</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>
    
    <hr style="margin: 16px 32px;">
    
    <!-- Other Engineering Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Engineering Topics</h4>
    <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
    <a class="active" href="../fluid_mechanics/fluid-mechanics.php">Fluid Mechanics</a>
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
      <h1>Fluid Mechanics</h1>
      <p>Fluid Mechanics explores the behavior of fluids (liquids and gases) at rest and in motion. It’s essential for understanding flow in pipelines, aerodynamics, and hydraulic systems.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Engineers apply fluid mechanics principles to design pumps, turbines, aircraft wings, and water distribution networks. Mastering fluid properties and equations of motion is crucial in many engineering fields.</p>

      <h2 id="fluid-properties">Properties of Fluids</h2>
      <ul>
        <li><strong>Density (ρ):</strong> Mass per unit volume.</li>
        <li><strong>Viscosity (μ):</strong> Fluid’s resistance to flow.</li>
        <li><strong>Surface Tension:</strong> Cohesive force at a fluid’s surface.</li>
      </ul>

      <h2 id="fluid-statics">Fluid Statics</h2>
      <p>When fluids are at rest, the primary concern is pressure distribution:</p>
      <ul>
        <li><strong>Hydrostatic Pressure:</strong> Increases with depth (P = ρgh).</li>
        <li><strong>Buoyancy:</strong> Upward force on submerged objects (Archimedes’ principle).</li>
      </ul>

      <h2 id="fluid-dynamics">Fluid Dynamics</h2>
      <ul>
        <li><strong>Bernoulli’s Equation:</strong> Relates pressure, velocity, and elevation.</li>
        <li><strong>Reynolds Number:</strong> Determines laminar vs. turbulent flow.</li>
        <li><strong>Navier-Stokes Equations:</strong> Governing equations for fluid motion.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Fundamentals of Fluid Mechanics” by Munson et al.</li>
        <li><strong>Simulation Software:</strong> ANSYS Fluent, COMSOL for computational fluid dynamics (CFD).</li>
        <li><strong>Online References:</strong> NPTEL, MIT OpenCourseWare for free lectures.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Fluid Mechanics underpins numerous engineering applications, from designing water supply systems to optimizing aircraft aerodynamics. A strong grasp of fluid properties and flow equations is vital for effective design.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../thermodynamics/thermodynamics.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../materials_science/materials-science.php">Next</a></li>
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
