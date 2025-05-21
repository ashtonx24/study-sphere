<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Mindfulness and Meditation</title>
  
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
    <a href="#benefits">Benefits of Mindfulness</a>
    <a href="#types-meditation">Types of Meditation</a>
    <a href="#getting-started">Getting Started</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Health & Wellness Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Health & Wellness Topics</h4>
    <a href="../fundamentals_of_nutrition/fundamentals-of-nutrition.php">Fundamentals of Nutrition</a>
    <a href="../diet_and_health/diet-and-health.php">Diet and Health</a>
    <a href="../sports_nutrition/sports-nutrition.php">Sports Nutrition</a>
    <a href="../introduction_to_psychology/introduction-to-psychology.php">Introduction to Psychology</a>
    <a href="../cognitive_behavioral_therapy/cognitive-behavioral-therapy.php">Cognitive Behavioral Therapy</a>
    <a href="../stress_management/stress-management.php">Stress Management</a>
    <a href="../positive_psychology/positive-psychology.php">Positive Psychology</a>
    <a class="active" href="../mindfulness_and_meditation/mindfulness-and-meditation.php">Mindfulness and Meditation</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Mindfulness and Meditation</h1>
      <p>Mindfulness and meditation practices encourage being present in the moment and cultivating a calm, focused mind. They are used worldwide to reduce stress, enhance mental clarity, and promote emotional well-being.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Rooted in ancient traditions, mindfulness involves nonjudgmental awareness of one’s thoughts, feelings, and environment. Meditation is a broader practice encompassing various techniques to train attention and awareness.</p>

      <h2 id="benefits">Benefits of Mindfulness</h2>
      <ul>
        <li><strong>Stress Reduction:</strong> Lower cortisol levels and anxiety.</li>
        <li><strong>Improved Focus:</strong> Enhanced attention and concentration.</li>
        <li><strong>Emotional Regulation:</strong> Better control over reactions to challenging situations.</li>
      </ul>

      <h2 id="types-meditation">Types of Meditation</h2>
      <ul>
        <li><strong>Mindfulness Meditation:</strong> Observing thoughts and sensations without judgment.</li>
        <li><strong>Loving-Kindness (Metta):</strong> Cultivating compassion and empathy.</li>
        <li><strong>Guided Visualization:</strong> Using mental imagery to relax and focus the mind.</li>
      </ul>

      <h2 id="getting-started">Getting Started</h2>
      <p>Begin with short sessions (5–10 minutes) in a quiet environment. Focus on your breath or a chosen mantra. Gradually increase session length as you become more comfortable.</p>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Meditation Apps:</strong> Headspace, Calm, Insight Timer for guided sessions.</li>
        <li><strong>Online Courses:</strong> Mindful-based stress reduction (MBSR) programs.</li>
        <li><strong>Books:</strong> “Wherever You Go, There You Are” by Jon Kabat-Zinn.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>By integrating mindfulness and meditation into daily routines, individuals can cultivate greater mental resilience, emotional balance, and overall well-being.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../positive_psychology/positive-psychology.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <!-- Last topic in this sequence, so no "Next" or link to an overview -->
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
