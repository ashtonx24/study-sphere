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
  <a href="#cell-theory">Cell Theory</a>
  <a href="#cell-structure">Cell Structure</a>
  <a href="#cell-organelles">Key Organelles</a>
  <a href="#cell-cycle">Cell Cycle & Division</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Science Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Science Topics</h4>
  <a href="../classical_mechanics/classical-mechanics.php">Classical Mechanics</a>
  <a href="../quantum_physics/quantum-physics.php">Quantum Physics</a>
  <a href="../thermodynamics/thermodynamics.php">Thermodynamics</a>
  <a href="../electromagnetism/electromagnetism.php">Electromagnetism</a>
  <a href="cell-biology.php" class="active">Cell Biology</a>
  <a href="../genetics/genetics.php">Genetics</a>
  <a href="../human_anatomy/human-anatomy.php">Human Anatomy</a>
  <a href="../organic_chemistry/organic-chemistry.php">Organic Chemistry</a>
</div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Cell Biology</h1>
    <p>Cell Biology is the study of cells—the basic structural and functional units of life. By examining how cells grow, divide, and interact, we gain insights into the fundamental processes that govern all living organisms. In this guide, we’ll explore cell theory, key organelles, and the cell cycle.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Cells are often called the “building blocks of life.” They come in various forms—prokaryotic cells (like bacteria) lack a nucleus, while eukaryotic cells (found in plants, animals, fungi, and protists) contain membrane-bound organelles. Studying cells helps us understand everything from disease mechanisms to developmental biology.</p>
    
    <h2 id="cell-theory">Cell Theory</h2>
    <p>Proposed by Schleiden, Schwann, and Virchow in the 19th century, cell theory states that:</p>
    <ul>
      <li><strong>All living organisms are composed of one or more cells.</strong></li>
      <li><strong>The cell is the basic unit of life.</strong></li>
      <li><strong>All cells arise from pre-existing cells.</strong></li>
    </ul>
    
    <h2 id="cell-structure">Cell Structure</h2>
    <p>Although cells can vary greatly, most eukaryotic cells share common structures:</p>
    <ul>
      <li><strong>Plasma Membrane:</strong> A phospholipid bilayer that regulates what enters and leaves the cell.</li>
      <li><strong>Cytoplasm:</strong> The gel-like substance containing organelles and cytosol.</li>
      <li><strong>Nucleus:</strong> Houses genetic material (DNA) and controls cellular activities.</li>
    </ul>
    
    <h2 id="cell-organelles">Key Organelles</h2>
    <p>Eukaryotic cells contain specialized compartments (organelles) with specific functions:</p>
    <ul>
      <li><strong>Mitochondria:</strong> Powerhouses of the cell, generating ATP through cellular respiration.</li>
      <li><strong>Endoplasmic Reticulum (ER):</strong> Rough ER synthesizes proteins; Smooth ER synthesizes lipids and detoxifies chemicals.</li>
      <li><strong>Golgi Apparatus:</strong> Modifies, sorts, and packages proteins for transport.</li>
      <li><strong>Lysosomes:</strong> Contain digestive enzymes to break down waste and cellular debris.</li>
      <li><strong>Chloroplasts (in plant cells):</strong> Carry out photosynthesis, converting sunlight into chemical energy.</li>
    </ul>
    
    <h2 id="cell-cycle">Cell Cycle & Division</h2>
    <p>The cell cycle is the process by which cells grow and divide. Key stages include:</p>
    <ul>
      <li><strong>Interphase:</strong> Cell grows, performs its functions, and duplicates DNA.</li>
      <li><strong>Mitosis:</strong> Division of the nucleus into two genetically identical daughter nuclei.</li>
      <li><strong>Cytokinesis:</strong> Division of the cytoplasm, resulting in two separate daughter cells.</li>
    </ul>
    <p>In contrast, <strong>meiosis</strong> produces gametes (sex cells) with half the chromosome number of the parent cell, ensuring genetic diversity in offspring.</p>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>To explore cell biology further:</p>
    <ul>
      <li><strong>Textbooks:</strong> “Molecular Biology of the Cell” by Alberts et al., “Essential Cell Biology” by Alberts et al.</li>
      <li><strong>Microscopy:</strong> Light and electron microscopes are crucial for visualizing cell structures.</li>
      <li><strong>Online Courses:</strong> Platforms like Khan Academy, Coursera, and edX offer cell biology modules.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Cell Biology forms the cornerstone of modern life sciences, explaining how organisms develop, maintain homeostasis, and reproduce. By understanding cell structure and function, researchers can tackle diseases, engineer new therapies, and unravel the complexities of life. Next, we’ll delve into <strong>Genetics</strong>, examining how traits are inherited and expressed at the molecular level.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../electromagnetism/electromagnetism.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../genetics/genetics.php">Next</a></li>
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
