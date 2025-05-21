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
  <a href="#organ-systems">Organ Systems</a>
  <a href="#skeletal-system">Skeletal System</a>
  <a href="#muscular-system">Muscular System</a>
  <a href="#circulatory-system">Circulatory System</a>
  <a href="#nervous-system">Nervous System</a>
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
  <a href="human-anatomy.php" class="active">Human Anatomy</a>
  <a href="../organic_chemistry/organic-chemistry.php">Organic Chemistry</a>
</div>


  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Human Anatomy</h1>
    <p>Human Anatomy is the study of the structure of the human body, from its tissues and organs down to cellular components. By understanding how organ systems work together, we gain insights into health, disease, and medical interventions. In this guide, we’ll explore the major organ systems and how they interact.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Anatomy has ancient roots, with early dissections providing the first detailed maps of the human body. Today, modern imaging techniques (like MRI and CT scans) have revolutionized our ability to visualize anatomy in living individuals. Combined with physiology, anatomy forms the basis of clinical medicine.</p>
    
    <h2 id="organ-systems">Organ Systems Overview</h2>
    <p>The human body is often divided into organ systems, each with specific functions. Some major systems include:</p>
    <ul>
      <li><strong>Skeletal System:</strong> Bones and joints for support and protection.</li>
      <li><strong>Muscular System:</strong> Muscles enabling movement.</li>
      <li><strong>Circulatory System:</strong> Heart and blood vessels transporting nutrients and oxygen.</li>
      <li><strong>Nervous System:</strong> Brain, spinal cord, and nerves for communication and control.</li>
      <li><strong>Respiratory, Digestive, Endocrine, and more:</strong> Each dedicated to specific vital functions.</li>
    </ul>
    
    <h2 id="skeletal-system">Skeletal System</h2>
    <p>The skeletal system provides structural support, protection for vital organs, and serves as an anchor for muscles. Key components:</p>
    <ul>
      <li><strong>Bones:</strong> Dynamic tissues that store minerals (like calcium) and house bone marrow for blood cell production.</li>
      <li><strong>Joints:</strong> Connections between bones allowing varying degrees of movement.</li>
      <li><strong>Ligaments & Cartilage:</strong> Provide stability and cushioning in joints.</li>
    </ul>
    
    <h2 id="muscular-system">Muscular System</h2>
    <p>Composed of skeletal, smooth, and cardiac muscle, this system enables movement and posture. Key points:</p>
    <ul>
      <li><strong>Skeletal Muscle:</strong> Voluntary muscles attached to bones by tendons.</li>
      <li><strong>Cardiac Muscle:</strong> Involuntary muscle in the heart, pumping blood.</li>
      <li><strong>Smooth Muscle:</strong> Lines organs and vessels, controlling involuntary movements (e.g., peristalsis).</li>
    </ul>
    
    <h2 id="circulatory-system">Circulatory System</h2>
    <p>The circulatory system transports oxygen, nutrients, hormones, and waste products throughout the body. Main components:</p>
    <ul>
      <li><strong>Heart:</strong> A muscular pump driving blood flow.</li>
      <li><strong>Blood Vessels:</strong> Arteries, veins, and capillaries forming a network for distribution.</li>
      <li><strong>Blood:</strong> Plasma, red blood cells, white blood cells, and platelets.</li>
    </ul>
    
    <h2 id="nervous-system">Nervous System</h2>
    <p>This system coordinates body activities and responds to internal and external stimuli. Key parts:</p>
    <ul>
      <li><strong>Central Nervous System (CNS):</strong> Brain and spinal cord, integrating and processing information.</li>
      <li><strong>Peripheral Nervous System (PNS):</strong> Nerves extending throughout the body, relaying signals to and from the CNS.</li>
      <li><strong>Neurons:</strong> Specialized cells transmitting electrical and chemical signals.</li>
    </ul>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>To explore human anatomy further:</p>
    <ul>
      <li><strong>Textbooks:</strong> “Gray’s Anatomy,” “Clinically Oriented Anatomy” by Moore, Dalley & Agur.</li>
      <li><strong>Anatomy Atlases:</strong> Netter’s Atlas of Human Anatomy for detailed illustrations.</li>
      <li><strong>Online Platforms:</strong> Visible Body, Kenhub, and 3D anatomy apps for interactive learning.</li>
      <li><strong>Imaging Techniques:</strong> MRI, CT, Ultrasound for real-time internal visualization.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Human Anatomy provides a roadmap of the body’s complex structures and how they work together to maintain life. From the skeletal framework to the intricate nervous system, each organ system plays a vital role in health and function. Next, we’ll look at <strong>Organic Chemistry</strong>, examining the chemistry of carbon-based compounds essential to life and many industries.</p>
  
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../genetics/genetics.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../organic_chemistry/organic-chemistry.php">Next</a></li>
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
