<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Control Systems</title>
  
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
    <a href="#open-closed-loop">Open & Closed-Loop Systems</a>
    <a href="#control-strategies">Control Strategies</a>
    <a href="#stability-analysis">Stability Analysis</a>
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
    <a class="active" href="../control_systems/control-systems.php">Control Systems</a>
    <a href="../structural_analysis/structural-analysis.php">Structural Analysis</a>
    <a href="../geotechnical_engineering/geotechnical-engineering.php">Geotechnical Engineering</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Control Systems</h1>
      <p>Control Systems ensure processes behave in a desired manner, whether it’s maintaining a specific speed in a car or stabilizing an aircraft. They’re pivotal in automation and robotics.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Engineers use control theory to design controllers that manipulate system inputs based on feedback, achieving stable and accurate performance in mechanical, electrical, and chemical processes.</p>

      <h2 id="open-closed-loop">Open & Closed-Loop Systems</h2>
      <ul>
        <li><strong>Open-Loop:</strong> No feedback, the controller doesn’t adjust based on output.</li>
        <li><strong>Closed-Loop (Feedback Control):</strong> System output is measured and used to correct the input.</li>
      </ul>

      <h2 id="control-strategies">Control Strategies</h2>
      <ul>
        <li><strong>PID Control:</strong> Proportional, Integral, Derivative terms to minimize error.</li>
        <li><strong>State-Space Control:</strong> Uses matrices to represent multi-variable systems.</li>
        <li><strong>Adaptive & Robust Control:</strong> Adjusts parameters to handle uncertainties or changing conditions.</li>
      </ul>

      <h2 id="stability-analysis">Stability Analysis</h2>
      <p>Stability ensures the system returns to equilibrium after a disturbance:</p>
      <ul>
        <li><strong>Routh-Hurwitz Criterion:</strong> Determines stability from polynomial coefficients.</li>
        <li><strong>Root Locus & Bode Plots:</strong> Graphical methods to design and tune controllers.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Modern Control Engineering” by Ogata.</li>
        <li><strong>Simulation:</strong> MATLAB/Simulink, LabVIEW for modeling and testing control loops.</li>
        <li><strong>Online Courses:</strong> edX, Coursera for Control Systems fundamentals.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Control Systems form the backbone of automation, ensuring processes operate smoothly and efficiently. A solid grasp of feedback mechanisms and stability analysis is crucial for modern engineering.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../signals_and_systems/signals-and-systems.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../structural_analysis/structural-analysis.php">Next</a></li>
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
