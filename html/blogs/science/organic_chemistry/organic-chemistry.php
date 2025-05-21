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
  <a href="#bonding-structure">Bonding & Structure</a>
  <a href="#functional-groups">Functional Groups</a>
  <a href="#reaction-mechanisms">Reaction Mechanisms</a>
  <a href="#stereochemistry">Stereochemistry</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Science Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Science Topics</h4>
  <a href="../classical_mechanics/classical-mechanics.php">Classical Mechanics</a>
  <a href="../quantum_physics/quantum-physics.php">Quantum Physics</a>
  <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
  <a href="../electromagnetism/electromagnetism.php">Electromagnetism</a>
  <a href="../cell_biology/cell-biology.php">Cell Biology</a>
  <a href="../genetics/genetics.php">Genetics</a>
  <a href="../human_anatomy/human-anatomy.php">Human Anatomy</a>
  <a href="organic-chemistry.php" class="active">Organic Chemistry</a>
</div>



  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Organic Chemistry</h1>
    <p>Organic Chemistry is the study of carbon-based compounds, which form the basis of all known life. From simple molecules like methane to complex biomolecules like proteins and DNA, organic chemistry explores structure, bonding, reactions, and synthesis of organic substances. In this guide, we’ll discuss bonding, functional groups, reaction mechanisms, and stereochemistry.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Initially thought to be the “chemistry of living organisms,” organic chemistry now encompasses a vast array of compounds, both natural and synthetic. Modern organic chemistry underlies fields like pharmaceuticals, petrochemicals, polymers, and materials science.</p>
    
    <h2 id="bonding-structure">Bonding & Structure</h2>
    <p>Carbon’s ability to form four covalent bonds in various configurations is central to organic chemistry. Key concepts include:</p>
    <ul>
      <li><strong>Hybridization:</strong> <code>sp</code>, <code>sp<sup>2</sup></code>, <code>sp<sup>3</sup></code> orbitals shape molecular geometry.</li>
      <li><strong>Alkanes, Alkenes, Alkynes:</strong> Single, double, and triple carbon-carbon bonds, respectively.</li>
      <li><strong>Aromaticity:</strong> Delocalized &pi; electrons in ring structures like benzene.</li>
    </ul>
    
    <h2 id="functional-groups">Functional Groups</h2>
    <p>Functional groups determine the reactivity and properties of organic molecules. Examples include:</p>
    <ul>
      <li><strong>Hydroxyl (–OH):</strong> Found in alcohols.</li>
      <li><strong>Carbonyl (C=O):</strong> Present in aldehydes, ketones, carboxylic acids, and more.</li>
      <li><strong>Amino (–NH<sub>2</sub>):</strong> Characteristic of amines and amino acids.</li>
      <li><strong>Carboxyl (–COOH):</strong> Defines carboxylic acids.</li>
      <li><strong>Halogens (–X):</strong> Substitution of hydrogen with F, Cl, Br, or I leads to halides.</li>
    </ul>
    
    <h2 id="reaction-mechanisms">Reaction Mechanisms</h2>
    <p>Organic reactions often follow specific mechanisms describing bond breaking and bond forming steps. Common mechanism types include:</p>
    <ul>
      <li><strong>Substitution (S<sub>N</sub>1, S<sub>N</sub>2):</strong> Nucleophiles replace leaving groups.</li>
      <li><strong>Elimination (E1, E2):</strong> Formation of double bonds by removing substituents.</li>
      <li><strong>Addition:</strong> Double or triple bonds break to attach new atoms/groups.</li>
      <li><strong>Rearrangements:</strong> Skeletal or positional changes within the molecule.</li>
    </ul>
    
    <h2 id="stereochemistry">Stereochemistry</h2>
    <p>Stereochemistry deals with the spatial arrangement of atoms in molecules. Key points include:</p>
    <ul>
      <li><strong>Chirality:</strong> Molecules that are non-superimposable mirror images (enantiomers).</li>
      <li><strong>Cis/Trans (E/Z) Isomerism:</strong> Geometry of substituents around double bonds or rings.</li>
      <li><strong>Optical Activity:</strong> Chiral molecules rotate plane-polarized light.</li>
    </ul>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>To delve deeper into organic chemistry:</p>
    <ul>
      <li><strong>Textbooks:</strong> “Organic Chemistry” by Clayden et al., “Organic Chemistry” by Wade, “March’s Advanced Organic Chemistry.”</li>
      <li><strong>Online Platforms:</strong> Khan Academy, Coursera, and MIT OpenCourseWare for lectures and practice problems.</li>
      <li><strong>Lab Techniques:</strong> Chromatography, Spectroscopy (NMR, IR, Mass Spec), Distillation for analyzing and purifying compounds.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Organic Chemistry underpins countless aspects of modern life—from the synthesis of new materials to understanding biological processes. By mastering functional groups, reaction mechanisms, and stereochemistry, chemists can innovate in pharmaceuticals, energy, agriculture, and more. This concludes our Science category series, but the journey of discovery in each of these topics continues!</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../human_anatomy/human-anatomy.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
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
