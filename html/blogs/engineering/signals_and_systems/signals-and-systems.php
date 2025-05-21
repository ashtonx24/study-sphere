<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Signals and Systems</title>
  
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
    <a href="#signal-types">Signal Types</a>
    <a href="#system-characteristics">System Characteristics</a>
    <a href="#transform-methods">Transform Methods</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>
    
    <hr style="margin: 16px 32px;">
    
    <!-- Other Engineering Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Engineering Topics</h4>
    <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
    <a href="../fluid_mechanics/fluid-mechanics.php">Fluid Mechanics</a>
    <a href="../materials_science/materials-science.php">Materials Science</a>
    <a href="../circuit_analysis/circuit-analysis.php">Circuit Analysis</a>
    <a class="active" href="../signals_and_systems/signals-and-systems.php">Signals and Systems</a>
    <a href="../control_systems/control-systems.php">Control Systems</a>
    <a href="../structural_analysis/structural-analysis.php">Structural Analysis</a>
    <a href="../geotechnical_engineering/geotechnical-engineering.php">Geotechnical Engineering</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Signals and Systems</h1>
      <p>Signals and Systems focuses on analyzing how various inputs (signals) interact with physical or digital systems, shaping outputs. It’s central to communication, control, and signal processing.</p>

      <h2 id="introduction">Introduction</h2>
      <p>This field combines mathematics (Fourier transforms, Laplace transforms) and engineering concepts (filters, feedback loops) to understand how signals evolve over time and frequency domains.</p>

      <h2 id="signal-types">Signal Types</h2>
      <ul>
        <li><strong>Continuous-Time Signals:</strong> Defined for every instant (e.g., analog audio).</li>
        <li><strong>Discrete-Time Signals:</strong> Defined at discrete intervals (e.g., digital samples).</li>
        <li><strong>Periodic vs. Aperiodic:</strong> Repeating patterns or no repetition.</li>
      </ul>

      <h2 id="system-characteristics">System Characteristics</h2>
      <ul>
        <li><strong>Linearity:</strong> Superposition holds for linear systems.</li>
        <li><strong>Time-Invariance:</strong> System properties do not change over time.</li>
        <li><strong>Causality:</strong> Output depends only on present and past inputs, not future ones.</li>
      </ul>

      <h2 id="transform-methods">Transform Methods</h2>
      <p>Transform techniques simplify the analysis of signals and systems:</p>
      <ul>
        <li><strong>Fourier Transform:</strong> Converts signals between time and frequency domains.</li>
        <li><strong>Laplace Transform:</strong> Useful for continuous-time system analysis (control theory).</li>
        <li><strong>Z-Transform:</strong> Discrete-time counterpart for analyzing digital systems.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Signals and Systems” by Oppenheim & Willsky.</li>
        <li><strong>Software:</strong> MATLAB, Python (NumPy, SciPy) for signal analysis.</li>
        <li><strong>Online Courses:</strong> edX, Coursera for advanced DSP (Digital Signal Processing).</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Signals and Systems form the backbone of modern electronics and communication. By mastering transforms and system properties, engineers can design efficient filters, communication protocols, and control strategies.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../circuit_analysis/circuit-analysis.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../control_systems/control-systems.php">Next</a></li>
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
