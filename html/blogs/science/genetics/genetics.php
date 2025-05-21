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
  <a href="#dna-structure">DNA Structure</a>
  <a href="#gene-expression">Gene Expression</a>
  <a href="#inheritance-patterns">Inheritance Patterns</a>
  <a href="#mutations">Genetic Mutations</a>
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
  <a href="genetics.php" class="active">Genetics</a>
  <a href="../human_anatomy/human-anatomy.php">Human Anatomy</a>
  <a href="../organic_chemistry/organic-chemistry.php">Organic Chemistry</a>
</div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Genetics</h1>
    <p>Genetics is the branch of biology that studies genes, heredity, and genetic variation in living organisms. By uncovering how traits are passed from one generation to the next, genetics underpins modern medicine, agriculture, and biotechnology. In this guide, we’ll explore DNA structure, gene expression, inheritance patterns, and genetic mutations.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>From Gregor Mendel’s pea plant experiments to the Human Genome Project, genetics has evolved rapidly, revealing the molecular basis of heredity. Today, genetic engineering and CRISPR-based gene editing are transforming fields like medicine and crop science.</p>
    
    <h2 id="dna-structure">DNA Structure</h2>
    <p>Deoxyribonucleic acid (DNA) is the molecule that stores genetic information. Key features include:</p>
    <ul>
      <li><strong>Double Helix:</strong> Two strands wound around each other, with sugar-phosphate backbones on the outside.</li>
      <li><strong>Nitrogenous Bases:</strong> Adenine (A), Thymine (T), Guanine (G), and Cytosine (C). A pairs with T, and G pairs with C.</li>
      <li><strong>Complementary Base Pairing:</strong> Ensures accurate replication and transcription.</li>
    </ul>
    
    <h2 id="gene-expression">Gene Expression</h2>
    <p>Genes encode proteins that perform most cellular functions. The process of gene expression involves:</p>
    <ul>
      <li><strong>Transcription:</strong> DNA is transcribed into messenger RNA (mRNA) in the nucleus.</li>
      <li><strong>Translation:</strong> mRNA is translated into a polypeptide chain (protein) at ribosomes in the cytoplasm.</li>
      <li><strong>Regulation:</strong> Complex control mechanisms (e.g., transcription factors) turn genes on or off.</li>
    </ul>
    
    <h2 id="inheritance-patterns">Inheritance Patterns</h2>
    <p>Mendelian genetics describes how traits follow certain patterns of inheritance:</p>
    <ul>
      <li><strong>Dominant & Recessive Alleles:</strong> Dominant alleles mask recessive ones in heterozygotes.</li>
      <li><strong>Codominance:</strong> Both alleles in a heterozygote are fully expressed (e.g., ABO blood types).</li>
      <li><strong>Incomplete Dominance:</strong> The phenotype is an intermediate of the two alleles.</li>
      <li><strong>Sex-Linked Traits:</strong> Genes located on sex chromosomes (X or Y) show unique patterns of inheritance.</li>
    </ul>
    
    <h2 id="mutations">Genetic Mutations</h2>
    <p>Mutations are changes in the DNA sequence. They can be:</p>
    <ul>
      <li><strong>Point Mutations:</strong> A single base change (e.g., substitution, insertion, or deletion).</li>
      <li><strong>Chromosomal Mutations:</strong> Large-scale changes (e.g., duplications, inversions, translocations).</li>
      <li><strong>Effects:</strong> Mutations can be neutral, beneficial, or harmful, influencing evolution and disease.</li>
    </ul>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>To explore genetics further:</p>
    <ul>
      <li><strong>Textbooks:</strong> “Molecular Biology of the Gene” by Watson et al., “Genetics: A Conceptual Approach” by Pierce.</li>
      <li><strong>Online Platforms:</strong> NCBI, Ensembl, and OMIM for genomic databases and research tools.</li>
      <li><strong>Lab Techniques:</strong> PCR, Gel Electrophoresis, Sequencing, CRISPR for gene editing.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Genetics offers profound insights into how life’s blueprint is encoded, expressed, and inherited. Understanding DNA structure, gene regulation, and inheritance patterns has paved the way for advancements in medicine, agriculture, and evolutionary biology. Next, we’ll explore <strong>Human Anatomy</strong>, examining the structure and function of the human body’s organ systems.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../cell_biology/cell-biology.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../human_anatomy/human-anatomy.php">Next</a></li>
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
