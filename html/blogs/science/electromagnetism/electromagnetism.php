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
  <a href="#electric-fields">Electric Fields</a>
  <a href="#magnetic-fields">Magnetic Fields</a>
  <a href="#maxwells-equations">Maxwell’s Equations</a>
  <a href="#electromagnetic-induction">Electromagnetic Induction</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Science Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Science Topics</h4>
  <a href="../classical_mechanics/classical-mechanics.php">Classical Mechanics</a>
  <a href="../quantum_physics/quantum-physics.php">Quantum Physics</a>
  <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
  <a href="electromagnetism.php" class="active">Electromagnetism</a>
  <a href="../cell_biology/cell-biology.php">Cell Biology</a>
  <a href="../genetics/genetics.php">Genetics</a>
  <a href="../human_anatomy/human-anatomy.php">Human Anatomy</a>
  <a href="../organic_chemistry/organic-chemistry.php">Organic Chemistry</a>
</div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Electromagnetism</h1>
    <p>Electromagnetism is the branch of physics that studies electric and magnetic fields, their interactions, and how they combine to form electromagnetic waves. It underpins a vast array of modern technology, from electric motors to radio communications, and is governed by Maxwell’s Equations—one of the great unifications in science.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Early observations of static electricity and magnetism date back to ancient times, but the formal theory of electromagnetism was developed in the 19th century by scientists such as Michael Faraday and James Clerk Maxwell. Their work showed that electricity and magnetism are facets of the same fundamental force.</p>
    
    <h2 id="electric-fields">Electric Fields</h2>
    <p>An electric field (<code>E</code>) describes the force exerted on a charge in space. Key concepts include:</p>
    <ul>
      <li><strong>Coulomb’s Law:</strong> The force between two charges is proportional to the product of the charges and inversely proportional to the square of the distance between them.</li>
      <li><strong>Electric Potential (Voltage):</strong> Work needed to move a unit charge from one point to another.</li>
      <li><strong>Field Lines:</strong> Visual representation of field strength and direction.</li>
    </ul>
    
    <h2 id="magnetic-fields">Magnetic Fields</h2>
    <p>Magnetic fields (<code>B</code>) arise from moving electric charges or intrinsic magnetic moments (like those in electrons). Key ideas include:</p>
    <ul>
      <li><strong>Biot-Savart Law:</strong> Relates currents to the magnetic field they produce.</li>
      <li><strong>Magnetic Poles:</strong> North and south poles always exist in pairs; you can’t isolate a single pole.</li>
      <li><strong>Lorentz Force:</strong> A moving charge in a magnetic field experiences a force perpendicular to both its velocity and the field.</li>
    </ul>
    
    <h2 id="maxwells-equations">Maxwell’s Equations</h2>
    <p>James Clerk Maxwell consolidated electricity and magnetism into four elegant equations:</p>
    <ul>
      <li><strong>Gauss’s Law (Electric):</strong> Relates electric charges to electric flux.</li>
      <li><strong>Gauss’s Law (Magnetic):</strong> States there are no “magnetic charges” (monopoles).</li>
      <li><strong>Faraday’s Law of Induction:</strong> A changing magnetic field induces an electric field.</li>
      <li><strong>Ampère’s Law (with Maxwell’s correction):</strong> Magnetic fields are generated by electric currents and changing electric fields.</li>
    </ul>
    <p>These equations show that electric and magnetic fields propagate as electromagnetic waves at the speed of light.</p>
    
    <h2 id="electromagnetic-induction">Electromagnetic Induction</h2>
    <p>Faraday’s Law states that a time-varying magnetic field induces an electric field (emf). This principle underlies:</p>
    <ul>
      <li><strong>Generators:</strong> Converting mechanical energy into electrical energy.</li>
      <li><strong>Transformers:</strong> Changing voltage levels in AC circuits.</li>
      <li><strong>Inductors:</strong> Storing energy in a magnetic field when current flows.</li>
    </ul>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>To delve deeper into electromagnetism:</p>
    <ul>
      <li><strong>Textbooks:</strong> “Introduction to Electrodynamics” by David J. Griffiths, “Classical Electrodynamics” by Jackson.</li>
      <li><strong>Online Courses:</strong> MIT OpenCourseWare, Khan Academy, and edX for foundational and advanced EM theory.</li>
      <li><strong>Simulation Tools:</strong> COMSOL Multiphysics, MATLAB, Python libraries for electromagnetic modeling.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Electromagnetism unifies electricity, magnetism, and light into a single framework. Its principles drive much of modern technology, from power generation to wireless communication. Next, we’ll transition to the realm of <strong>Cell Biology</strong> to explore the building blocks of life at the cellular level.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../thermodynamics/thermodynamics.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../cell_biology/cell-biology.php">Next</a></li>
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
