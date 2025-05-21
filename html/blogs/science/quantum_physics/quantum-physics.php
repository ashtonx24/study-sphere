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
  <a href="#wave-particle">Wave-Particle Duality</a>
  <a href="#uncertainty-principle">Heisenberg's Uncertainty Principle</a>
  <a href="#quantum-mechanics">Quantum Mechanics Formalism</a>
  <a href="#quantum-entanglement">Quantum Entanglement</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Science Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Science Topics</h4>
  <a href="../classical_mechanics/classical-mechanics.php">Classical Mechanics</a>
  <a href="quantum-physics.php" class="active">Quantum Physics</a>
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
    <h1>Quantum Physics</h1>
    <p>Quantum Physics, also known as Quantum Mechanics, explores the behavior of matter and energy at the smallest scales. It challenges classical notions of determinism and continuity, introducing principles like wave-particle duality and uncertainty. In this guide, we’ll discuss the fundamental concepts that shaped modern physics and technology.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Developed in the early 20th century by pioneers such as Max Planck, Albert Einstein, Niels Bohr, and Werner Heisenberg, quantum physics revolutionized our understanding of atoms, molecules, and subatomic particles. It has since led to advancements like semiconductors, lasers, and quantum computing.</p>
    
    <h2 id="wave-particle">Wave-Particle Duality</h2>
    <p>One of the cornerstone ideas in quantum physics is the dual nature of light and matter. Experiments such as the double-slit experiment reveal that particles (like electrons or photons) can exhibit both wave-like interference and particle-like behavior, depending on how they are observed.</p>
    
    <h2 id="uncertainty-principle">Heisenberg’s Uncertainty Principle</h2>
    <p>Heisenberg’s principle states that one cannot simultaneously know a particle’s exact position and momentum with perfect precision. The more precisely you measure one quantity, the less precisely you can measure the other. This isn’t just a limitation of measurement—it’s a fundamental property of quantum systems.</p>
    
    <h2 id="quantum-mechanics">Quantum Mechanics Formalism</h2>
    <p>Quantum mechanics uses complex mathematical frameworks like wave functions (<code>&psi;</code>) and operators to describe the probabilistic nature of particles. Key concepts include:</p>
    <ul>
      <li><strong>Schrödinger Equation:</strong> Governs the time evolution of the wave function.</li>
      <li><strong>Eigenstates & Eigenvalues:</strong> Observable quantities (e.g., energy levels) arise from solving the equation.</li>
      <li><strong>Probability Amplitudes:</strong> The square of the wave function’s magnitude gives the probability of finding a particle in a given state.</li>
    </ul>
    
    <h2 id="quantum-entanglement">Quantum Entanglement</h2>
    <p>Entanglement is a phenomenon where two or more particles share a quantum state such that measuring one immediately affects the state of the other(s), regardless of distance. Albert Einstein famously called it “spooky action at a distance,” but it’s a verified aspect of quantum theory, integral to quantum computing and cryptography.</p>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>To further explore quantum physics, consider:</p>
    <ul>
      <li><strong>Textbooks:</strong> “Introduction to Quantum Mechanics” by Griffiths, “Modern Quantum Mechanics” by Sakurai.</li>
      <li><strong>Online Courses:</strong> MIT OpenCourseWare, Coursera, edX offer free/paid quantum courses.</li>
      <li><strong>Simulation Tools:</strong> QuTiP (Quantum Toolbox in Python), IBM Quantum Experience for hands-on quantum computing.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Quantum Physics has reshaped our understanding of the universe, revealing a reality governed by probabilities and fundamental limits on measurement. Its principles underpin many modern technologies, from transistors to quantum encryption. Next, we’ll dive into <strong>Thermodynamics</strong> to examine how energy, heat, and work govern physical systems on a macroscopic scale.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../classical_mechanics/classical-mechanics.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../thermodynamics/thermodynamics.php">Next</a></li>
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
