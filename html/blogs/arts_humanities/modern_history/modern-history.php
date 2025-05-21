<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Modern History</title>
  
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
    <a href="#enlightenment">The Enlightenment</a>
    <a href="#industrial-revolution">Industrial Revolution</a>
    <a href="#world-wars">World Wars</a>
    <a href="#globalization">Globalization & Technology</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Arts & Humanities Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Arts & Humanities Topics</h4>
    <a href="../ancient_civilizations/ancient-civilizations.php">Ancient Civilizations</a>
    <a href="../medieval_history/medieval-history.php">Medieval History</a>
    <a class="active" href="../modern_history/modern-history.php">Modern History</a>
    <a href="../english_literature/english-literature.php">English Literature</a>
    <a href="../world_literature/world-literature.php">World Literature</a>
    <a href="../creative_writing/creative-writing.php">Creative Writing</a>
    <a href="../introduction_to_philosophy/introduction-to-philosophy.php">Introduction to Philosophy</a>
    <a href="../ethics/ethics.php">Ethics</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Modern History</h1>
      <p>Modern History typically refers to the period from the late 15th century to the present. It encompasses major shifts like the Enlightenment, Industrial Revolution, and the rise of nation-states, culminating in a highly interconnected global society.</p>

      <h2 id="introduction">Introduction</h2>
      <p>The onset of Modern History is often tied to events such as the fall of Constantinople (1453), the Age of Discovery, and the Protestant Reformation. These events set the stage for profound transformations in politics, economics, and culture.</p>

      <h2 id="enlightenment">The Enlightenment</h2>
      <ul>
        <li><strong>Philosophy & Reason:</strong> Thinkers like Voltaire, Rousseau, and Kant promoted rational thought and individual rights.</li>
        <li><strong>Scientific Revolution:</strong> Advances by Newton, Galileo, and others reshaped our understanding of the universe.</li>
        <li><strong>Political Impact:</strong> Ideas of liberty and democracy influenced revolutions in America (1776) and France (1789).</li>
      </ul>

      <h2 id="industrial-revolution">Industrial Revolution</h2>
      <p>Beginning in the 18th century, the Industrial Revolution dramatically changed production and labor:</p>
      <ul>
        <li><strong>Mechanization:</strong> Invention of the steam engine, spinning jenny, and power loom.</li>
        <li><strong>Urbanization:</strong> Rapid growth of cities, new social classes (working class, industrial capitalists).</li>
        <li><strong>Global Trade:</strong> Mass production and improved transportation expanded international markets.</li>
      </ul>

      <h2 id="world-wars">World Wars</h2>
      <p>The 20th century saw two devastating global conflicts:</p>
      <ul>
        <li><strong>World War I (1914–1918):</strong> Triggered by the assassination of Archduke Franz Ferdinand, leading to unprecedented trench warfare.</li>
        <li><strong>World War II (1939–1945):</strong> Shaped by fascist aggression, culminating in the Holocaust and atomic bombings.</li>
        <li><strong>Aftermath:</strong> Redrawing of borders, establishment of the United Nations, and the Cold War.</li>
      </ul>

      <h2 id="globalization">Globalization & Technology</h2>
      <p>Late 20th and early 21st centuries witnessed accelerated global interconnectedness:</p>
      <ul>
        <li><strong>Information Age:</strong> Internet and digital communication revolutionized commerce and culture.</li>
        <li><strong>Economic Integration:</strong> Global supply chains, multinational corporations, and international trade agreements.</li>
        <li><strong>Social Movements:</strong> Civil rights, feminism, environmental activism shaping modern societies.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “The Penguin History of the World” by J.M. Roberts, “A History of Modern Europe” by John Merriman.</li>
        <li><strong>Online Archives:</strong> World Digital Library, JSTOR for scholarly articles.</li>
        <li><strong>Documentaries:</strong> PBS “The Story of Europe,” BBC “A History of Britain.”</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Modern History captures humanity’s rapid transformation—from feudal societies to industrial and digital civilizations. Understanding these developments is key to grasping contemporary politics, economics, and cultural dynamics.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../medieval_history/medieval-history.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../english_literature/english-literature.php">Next</a></li>
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
