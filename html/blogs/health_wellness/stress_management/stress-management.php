<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Stress Management</title>
  
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
    <a href="#causes-stress">Common Causes of Stress</a>
    <a href="#stress-response">Physiological Stress Response</a>
    <a href="#management-techniques">Management Techniques</a>
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
    <a class="active" href="../stress_management/stress-management.php">Stress Management</a>
    <a href="../positive_psychology/positive-psychology.php">Positive Psychology</a>
    <a href="../mindfulness_and_meditation/mindfulness-and-meditation.php">Mindfulness and Meditation</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Stress Management</h1>
      <p>Stress management involves recognizing the sources of stress and developing strategies to cope effectively. Chronic stress can impact physical and mental health, making management essential.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Stress is a natural response to challenging or threatening situations. While some stress can be motivating, excessive or prolonged stress can lead to anxiety, depression, and physical health problems.</p>

      <h2 id="causes-stress">Common Causes of Stress</h2>
      <ul>
        <li><strong>Work & Deadlines:</strong> High job demands or tight schedules.</li>
        <li><strong>Relationships:</strong> Conflicts or lack of support.</li>
        <li><strong>Financial Pressures:</strong> Debt, unexpected expenses.</li>
        <li><strong>Life Changes:</strong> Moving, illness, or major transitions.</li>
      </ul>

      <h2 id="stress-response">Physiological Stress Response</h2>
      <p>When stressed, the body releases hormones like cortisol and adrenaline, triggering the “fight-or-flight” response. Over time, chronic elevation of these hormones can harm cardiovascular, immune, and mental health.</p>

      <h2 id="management-techniques">Management Techniques</h2>
      <ul>
        <li><strong>Relaxation Exercises:</strong> Deep breathing, progressive muscle relaxation.</li>
        <li><strong>Time Management:</strong> Prioritizing tasks and setting realistic goals.</li>
        <li><strong>Physical Activity:</strong> Exercise helps reduce stress hormones and improves mood.</li>
        <li><strong>Social Support:</strong> Talking with friends, family, or a counselor.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Stress-Tracking Apps:</strong> StressCheck, Calm for daily stress monitoring.</li>
        <li><strong>Online Programs:</strong> MindTools for time management, coping strategies.</li>
        <li><strong>Therapy & Support Groups:</strong> Professional guidance for chronic stress.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Effective stress management is vital for maintaining mental and physical health. By identifying stressors and practicing healthy coping techniques, individuals can better navigate life’s challenges.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../cognitive_behavioral_therapy/cognitive-behavioral-therapy.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../positive_psychology/positive-psychology.php">Next</a></li>
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
