<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Creative Writing</title>
  
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
    <a href="#genres-forms">Genres & Forms</a>
    <a href="#elements-style">Elements & Style</a>
    <a href="#writing-process">The Writing Process</a>
    <a href="#workshopping">Workshopping & Feedback</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Arts & Humanities Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Arts & Humanities Topics</h4>
    <a href="../ancient_civilizations/ancient-civilizations.php">Ancient Civilizations</a>
    <a href="../medieval_history/medieval-history.php">Medieval History</a>
    <a href="../modern_history/modern-history.php">Modern History</a>
    <a href="../english_literature/english-literature.php">English Literature</a>
    <a href="../world_literature/world-literature.php">World Literature</a>
    <a class="active" href="../creative_writing/creative-writing.php">Creative Writing</a>
    <a href="../introduction_to_philosophy/introduction-to-philosophy.php">Introduction to Philosophy</a>
    <a href="../ethics/ethics.php">Ethics</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Creative Writing</h1>
      <p>Creative Writing encompasses fiction, poetry, creative nonfiction, and other imaginative forms. It emphasizes original expression, storytelling techniques, and literary style.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Whether you’re writing a novel or a personal essay, creative writing seeks to captivate readers through compelling narratives and unique voices. It merges creativity with craftsmanship.</p>

      <h2 id="genres-forms">Genres & Forms</h2>
      <ul>
        <li><strong>Fiction:</strong> Novels, short stories, flash fiction.</li>
        <li><strong>Poetry:</strong> Free verse, sonnets, haiku, spoken word.</li>
        <li><strong>Creative Nonfiction:</strong> Memoir, personal essays, narrative journalism.</li>
      </ul>

      <h2 id="elements-style">Elements & Style</h2>
      <p>Key components of strong creative writing include:</p>
      <ul>
        <li><strong>Characterization:</strong> Developing believable, relatable characters.</li>
        <li><strong>Setting:</strong> Creating vivid environments that influence the story.</li>
        <li><strong>Plot & Structure:</strong> Building tension, pacing, and resolution.</li>
        <li><strong>Voice & Tone:</strong> Reflecting the narrator’s or poet’s perspective.</li>
      </ul>

      <h2 id="writing-process">The Writing Process</h2>
      <ul>
        <li><strong>Prewriting:</strong> Brainstorming, outlining, or freewriting ideas.</li>
        <li><strong>Drafting:</strong> Committing ideas to paper without overthinking.</li>
        <li><strong>Revising & Editing:</strong> Refining structure, style, and language.</li>
      </ul>

      <h2 id="workshopping">Workshopping & Feedback</h2>
      <p>Sharing work with peers or mentors is crucial:</p>
      <ul>
        <li><strong>Constructive Critique:</strong> Identifying strengths and areas for improvement.</li>
        <li><strong>Revision Strategies:</strong> Implementing feedback to enhance clarity and impact.</li>
        <li><strong>Community:</strong> Writers’ groups, online forums, and workshops foster growth.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Writing Software:</strong> Scrivener, Google Docs, or Microsoft Word for drafting and organization.</li>
        <li><strong>Workshops & Courses:</strong> Creative Writing MFA programs, online courses (Coursera, edX).</li>
        <li><strong>Books on Craft:</strong> “On Writing” by Stephen King, “Bird by Bird” by Anne Lamott.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Creative Writing allows for limitless exploration of human experience through words. By mastering elements of craft and seeking feedback, writers can develop impactful, resonant works across multiple genres.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../world_literature/world-literature.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../introduction_to_philosophy/introduction-to-philosophy.php">Next</a></li>
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
