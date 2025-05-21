<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Introduction to Psychology</title>
  
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
    <a href="#major-perspectives">Major Perspectives</a>
    <a href="#research-methods">Research Methods</a>
    <a href="#key-topics">Key Topics in Psychology</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Health & Wellness Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Health & Wellness Topics</h4>
    <a href="../fundamentals_of_nutrition/fundamentals-of-nutrition.php">Fundamentals of Nutrition</a>
    <a href="../diet_and_health/diet-and-health.php">Diet and Health</a>
    <a href="../sports_nutrition/sports-nutrition.php">Sports Nutrition</a>
    <a class="active" href="../introduction_to_psychology/introduction-to-psychology.php">Introduction to Psychology</a>
    <a href="../cognitive_behavioral_therapy/cognitive-behavioral-therapy.php">Cognitive Behavioral Therapy</a>
    <a href="../stress_management/stress-management.php">Stress Management</a>
    <a href="../positive_psychology/positive-psychology.php">Positive Psychology</a>
    <a href="../mindfulness_and_meditation/mindfulness-and-meditation.php">Mindfulness and Meditation</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Introduction to Psychology</h1>
      <p>Psychology is the scientific study of the mind and behavior. It aims to understand mental processes, emotions, and actions, helping us improve well-being and interpersonal relationships.</p>

      <h2 id="introduction">Introduction</h2>
      <p>From early philosophical questions to modern empirical research, psychology has evolved into a multifaceted discipline. It intersects with fields like neuroscience, sociology, and education.</p>

      <h2 id="major-perspectives">Major Perspectives</h2>
      <ul>
        <li><strong>Behaviorism:</strong> Focuses on observable behavior and external stimuli.</li>
        <li><strong>Cognitive:</strong> Emphasizes mental processes like memory and perception.</li>
        <li><strong>Psychoanalytic:</strong> Explores the unconscious mind (Freud, Jung).</li>
        <li><strong>Humanistic:</strong> Stresses free will and personal growth (Rogers, Maslow).</li>
      </ul>

      <h2 id="research-methods">Research Methods</h2>
      <ul>
        <li><strong>Experiments:</strong> Controlled studies to determine cause and effect.</li>
        <li><strong>Observational Studies:</strong> Naturalistic or structured observation in real-world settings.</li>
        <li><strong>Surveys & Interviews:</strong> Collecting self-reported data on attitudes and behaviors.</li>
      </ul>

      <h2 id="key-topics">Key Topics in Psychology</h2>
      <ul>
        <li><strong>Developmental Psychology:</strong> How people grow and change over time.</li>
        <li><strong>Social Psychology:</strong> How individuals interact and influence each other.</li>
        <li><strong>Clinical Psychology:</strong> Assessment and treatment of mental health issues.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Textbooks:</strong> “Psychology” by David Myers, “The Science of Psychology” by Laura King.</li>
        <li><strong>Online Courses:</strong> Coursera, edX for introductory psychology lectures.</li>
        <li><strong>Professional Associations:</strong> American Psychological Association (APA), British Psychological Society (BPS).</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Psychology offers insights into human behavior, emotion, and thought. Understanding these principles can improve mental health, relationships, and decision-making in everyday life.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../sports_nutrition/sports-nutrition.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../cognitive_behavioral_therapy/cognitive-behavioral-therapy.php">Next</a></li>
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
