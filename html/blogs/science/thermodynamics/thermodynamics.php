<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere</title>
  
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
      <button id="theme-toggle" class="theme-toggle-btn btn">☀️</button><!-- Theme Toggle Button -->
      <a href="/study-sphere/html/home.php" class="btn btn-primary mr-2">Home</a>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal">
        Logout
    </button>
    
    </div>
</header>

<!-- Logout Confirmation Modal -->
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
  <a href="#zeroth-law">Zeroth Law</a>
  <a href="#first-law">First Law</a>
  <a href="#second-law">Second Law</a>
  <a href="#third-law">Third Law</a>
  <a href="#applications">Applications</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Science Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Science Topics</h4>
  <a href="../classical_mechanics/classical-mechanics.php">Classical Mechanics</a>
  <a href="../quantum_physics/quantum-physics.php">Quantum Physics</a>
  <a href="thermodynamics.php" class="active">Thermodynamics</a>
  <a href="../electromagnetism/electromagnetism.php">Electromagnetism</a>
  <a href="../cell_biology/cell-biology.php">Cell Biology</a>
  <a href="../genetics/genetics.php">Genetics</a>
  <a href="../human_anatomy/human-anatomy.php">Human Anatomy</a>
  <a href="../organic_chemistry/organic-chemistry.php">Organic Chemistry</a>
</div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Thermodynamics</h1>
    <p>Thermodynamics is the branch of physics that deals with heat, work, temperature, and the statistical behavior of systems with large numbers of particles. It provides insights into how energy is transferred and transformed, guiding everything from engine efficiency to phase changes in materials.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Developed over centuries by scientists like James Prescott Joule, Sadi Carnot, and Lord Kelvin, thermodynamics underpins much of engineering and physical chemistry. It’s built around several laws that describe how energy moves and changes form.</p>
    
    <h2 id="zeroth-law">Zeroth Law of Thermodynamics</h2>
    <p>This law states that if two systems are each in thermal equilibrium with a third system, then they are in thermal equilibrium with each other. Essentially, it defines temperature as a fundamental and measurable property.</p>
    
    <h2 id="first-law">First Law of Thermodynamics</h2>
    <p>Often expressed as <code>&Delta;U = Q - W</code>, the first law is a statement of energy conservation:</p>
    <ul>
      <li><strong>&Delta;U:</strong> Change in internal energy of the system.</li>
      <li><strong>Q:</strong> Heat added to the system.</li>
      <li><strong>W:</strong> Work done by the system.</li>
    </ul>
    <p>It implies that energy can neither be created nor destroyed, only converted between forms.</p>
    
    <h2 id="second-law">Second Law of Thermodynamics</h2>
    <p>The second law addresses entropy, a measure of disorder or randomness. Key statements include:</p>
    <ul>
      <li><strong>Clausius Statement:</strong> Heat cannot spontaneously flow from a colder body to a hotter body.</li>
      <li><strong>Kelvin-Planck Statement:</strong> No process can convert all heat into work without any other effect.</li>
    </ul>
    <p>Overall, entropy of an isolated system tends to increase, explaining why some processes are irreversible.</p>
    
    <h2 id="third-law">Third Law of Thermodynamics</h2>
    <p>This law states that as the temperature of a system approaches absolute zero, the entropy approaches a constant minimum. It’s practically impossible to reach absolute zero, ensuring there’s always some thermal motion.</p>
    
    <h2 id="applications">Applications</h2>
    <p>Thermodynamics has wide-ranging applications:</p>
    <ul>
      <li><strong>Heat Engines:</strong> Power plants and internal combustion engines rely on thermodynamic cycles.</li>
      <li><strong>Refrigeration & Air Conditioning:</strong> Based on vapor-compression cycles and heat transfer.</li>
      <li><strong>Phase Transitions:</strong> Understanding boiling, melting, and sublimation points.</li>
      <li><strong>Material Science:</strong> Thermodynamic properties guide alloy formation and chemical reactions.</li>
    </ul>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>To further explore thermodynamics:</p>
    <ul>
      <li><strong>Textbooks:</strong> “Thermodynamics” by Enrico Fermi, “Fundamentals of Engineering Thermodynamics” by Moran & Shapiro.</li>
      <li><strong>Online Courses:</strong> edX, Coursera, and Khan Academy offer thermodynamics modules.</li>
      <li><strong>Software Tools:</strong> MATLAB, Python libraries (NumPy, SciPy) for simulations and problem solving.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Thermodynamics explains how energy flows and transforms in physical and chemical processes. From everyday phenomena like boiling water to complex industrial applications, its laws provide crucial insights into efficiency, entropy, and the nature of heat. Next, we’ll examine <strong>Electromagnetism</strong>, focusing on electric and magnetic fields and their role in everything from power generation to communication.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../quantum_physics/quantum-physics.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../electromagnetism/electromagnetism.php">Next</a></li>
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
