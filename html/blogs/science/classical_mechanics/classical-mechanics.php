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
  <a href="#laws-motion">Newton's Laws of Motion</a>
  <a href="#energy">Energy & Work</a>
  <a href="#momentum">Momentum & Collisions</a>
  <a href="#rotational-dynamics">Rotational Dynamics</a>
  <a href="#gravitational-forces">Gravitational Forces</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Science Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Science Topics</h4>
  <a href="classical-mechanics.php" class="active">Classical Mechanics</a>
  <a href="../quantum_physics/quantum-physics.php">Quantum Physics</a>
  <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
  <a href="../electromagnetism/electromagnetism.php">Electromagnetism</a>
  <a href="../cell_biology/cell-biology.php">Cell Biology</a>
  <a href="../genetics/genetics.php">Genetics</a>
  <a href="../human_anatomy/human-anatomy.php">Human Anatomy</a>
  <a href="../organic_chemistry/organic-chemistry.php">Organic Chemistry</a>
</div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Classical Mechanics</h1>
    <p>Classical Mechanics is a branch of physics that deals with the motion of bodies under the influence of forces. Developed from the work of scientists like Galileo, Kepler, and most notably Isaac Newton, it forms the foundation for understanding a wide range of physical phenomena, from planetary motion to everyday objects in motion.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Classical Mechanics encompasses Newton’s Laws of Motion, the concepts of energy, work, and momentum, as well as rotational dynamics and gravitational forces. Although modern physics (like quantum mechanics and relativity) has expanded our understanding, classical mechanics remains highly relevant for macroscopic objects moving at speeds much slower than the speed of light.</p>
    
    <h2 id="laws-motion">Newton’s Laws of Motion</h2>
    <p>Newton’s three laws provide the foundation of classical mechanics:</p>
    <ul>
      <li><strong>First Law (Inertia):</strong> An object remains at rest or in uniform motion unless acted upon by a net external force.</li>
      <li><strong>Second Law (F = ma):</strong> The acceleration of an object is proportional to the net force applied and inversely proportional to its mass.</li>
      <li><strong>Third Law (Action-Reaction):</strong> For every action, there is an equal and opposite reaction.</li>
    </ul>
    
    <h2 id="energy">Energy & Work</h2>
    <p>Energy in classical mechanics can take various forms—kinetic, potential, thermal, etc. Work is the transfer of energy through force acting over a distance. Key principles include:</p>
    <ul>
      <li><strong>Kinetic Energy (KE):</strong> Energy of motion, given by <code>(1/2)mv<sup>2</sup></code>.</li>
      <li><strong>Potential Energy (PE):</strong> Energy stored by position (e.g., gravitational potential <code>mgh</code>).</li>
      <li><strong>Conservation of Energy:</strong> In a closed system, the total energy remains constant.</li>
    </ul>
    
    <h2 id="momentum">Momentum & Collisions</h2>
    <p>Momentum (<code>p = mv</code>) is a measure of an object’s motion. Key collision types:</p>
    <ul>
      <li><strong>Elastic Collisions:</strong> Total kinetic energy and momentum are conserved.</li>
      <li><strong>Inelastic Collisions:</strong> Momentum is conserved, but some kinetic energy is lost.</li>
      <li><strong>Perfectly Inelastic:</strong> Objects stick together, moving as one mass after collision.</li>
    </ul>
    
    <h2 id="rotational-dynamics">Rotational Dynamics</h2>
    <p>When objects rotate, we use concepts like torque, angular momentum, and rotational inertia:</p>
    <ul>
      <li><strong>Torque (&tau;):</strong> Measures how a force causes rotational acceleration (<code>&tau; = rF sin &theta;</code>).</li>
      <li><strong>Angular Momentum (L):</strong> The rotational analog of linear momentum (<code>L = I&omega;</code>).</li>
      <li><strong>Moment of Inertia (I):</strong> A measure of an object’s resistance to change in rotation.</li>
    </ul>
    
    <h2 id="gravitational-forces">Gravitational Forces</h2>
    <p>Newton’s Law of Universal Gravitation describes the attractive force between two masses (<code>F = G (m<sub>1</sub>m<sub>2</sub>)/r<sup>2</sup></code>), explaining planetary orbits, tides, and more. Kepler’s laws further detail orbital motion in a central gravitational field.</p>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>To deepen your understanding of classical mechanics, consider:</p>
    <ul>
      <li><strong>Textbooks:</strong> “Classical Mechanics” by John R. Taylor, “Fundamentals of Physics” by Halliday, Resnick, and Walker.</li>
      <li><strong>Online Courses:</strong> Coursera, edX, and Khan Academy offer free/paid physics courses.</li>
      <li><strong>Simulation Tools:</strong> PhET Interactive Simulations, MATLAB, or Python libraries (e.g., NumPy, Matplotlib) for modeling motion.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Classical Mechanics provides the groundwork for much of physics and engineering. By mastering Newton’s Laws, energy, momentum, and rotational dynamics, you’ll have a solid foundation to explore more advanced topics in science and beyond. Next, we’ll explore <strong>Quantum Physics</strong>, delving into the behavior of matter and energy at the smallest scales.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="#">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../quantum_physics/quantum-physics.php">Next</a></li>
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
