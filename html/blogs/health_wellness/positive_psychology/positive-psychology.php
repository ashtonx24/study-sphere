<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Positive Psychology</title>
  
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
    <a href="#pillars">Pillars of Positive Psychology</a>
    <a href="#benefits">Benefits & Applications</a>
    <a href="#practices">Common Practices</a>
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
    <a class="active" href="../positive_psychology/positive-psychology.php">Positive Psychology</a>
    <a href="../mindfulness_and_meditation/mindfulness-and-meditation.php">Mindfulness and Meditation</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Positive Psychology</h1>
      <p>Positive Psychology is a branch of psychology that focuses on strengths, well-being, and the factors that allow individuals and communities to thrive. It emphasizes positive emotions, resilience, and meaning.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Founded by Martin Seligman and others in the late 20th century, Positive Psychology aims to complement traditional psychology’s focus on mental illness by investigating what makes life worth living.</p>

      <h2 id="pillars">Pillars of Positive Psychology</h2>
      <ul>
        <li><strong>Positive Emotions:</strong> Cultivating gratitude, joy, and hope.</li>
        <li><strong>Engagement:</strong> Finding “flow” in meaningful activities.</li>
        <li><strong>Relationships:</strong> Building supportive, loving connections.</li>
        <li><strong>Meaning:</strong> Aligning actions with personal values or purpose.</li>
        <li><strong>Accomplishment:</strong> Achieving goals and personal growth.</li>
      </ul>

      <h2 id="benefits">Benefits & Applications</h2>
      <p>Research suggests that practicing Positive Psychology can:</p>
      <ul>
        <li>Increase happiness and life satisfaction</li>
        <li>Reduce stress and symptoms of depression</li>
        <li>Enhance resilience and coping skills</li>
      </ul>

      <h2 id="practices">Common Practices</h2>
      <ul>
        <li><strong>Gratitude Journaling:</strong> Writing down things you’re thankful for daily.</li>
        <li><strong>Strengths Identification:</strong> Focusing on and using personal strengths.</li>
        <li><strong>Acts of Kindness:</strong> Deliberate efforts to help or uplift others.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Books:</strong> “Flourish” by Martin Seligman, “The How of Happiness” by Sonja Lyubomirsky.</li>
        <li><strong>Online Tests:</strong> VIA Character Strengths Survey to discover your core strengths.</li>
        <li><strong>Therapeutic Approaches:</strong> Positive psychotherapy, coaching psychology.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>By emphasizing well-being, resilience, and personal strengths, Positive Psychology provides practical strategies for enhancing life satisfaction and overall mental health.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../stress_management/stress-management.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../mindfulness_and_meditation/mindfulness-and-meditation.php">Next</a></li>
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
