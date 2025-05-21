<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Cognitive Behavioral Therapy</title>
  
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
    <a href="#core-principles">Core Principles</a>
    <a href="#common-techniques">Common Techniques</a>
    <a href="#applications">Applications</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Health & Wellness Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Health & Wellness Topics</h4>
    <a href="../fundamentals_of_nutrition/fundamentals-of-nutrition.php">Fundamentals of Nutrition</a>
    <a href="../diet_and_health/diet-and-health.php">Diet and Health</a>
    <a href="../sports_nutrition/sports-nutrition.php">Sports Nutrition</a>
    <a href="../introduction_to_psychology/introduction-to-psychology.php">Introduction to Psychology</a>
    <a class="active" href="../cognitive_behavioral_therapy/cognitive-behavioral-therapy.php">Cognitive Behavioral Therapy</a>
    <a href="../stress_management/stress-management.php">Stress Management</a>
    <a href="../positive_psychology/positive-psychology.php">Positive Psychology</a>
    <a href="../mindfulness_and_meditation/mindfulness-and-meditation.php">Mindfulness and Meditation</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Cognitive Behavioral Therapy</h1>
      <p>Cognitive Behavioral Therapy (CBT) is a structured, short-term form of psychotherapy that focuses on the relationship between thoughts, feelings, and behaviors. It helps individuals develop healthier patterns of thinking.</p>

      <h2 id="introduction">Introduction</h2>
      <p>CBT is grounded in the idea that negative thought patterns can contribute to emotional distress and maladaptive behaviors. By challenging and replacing these thoughts, people can improve their mental well-being.</p>

      <h2 id="core-principles">Core Principles</h2>
      <ul>
        <li><strong>Cognitive Restructuring:</strong> Identifying and disputing irrational or negative thoughts.</li>
        <li><strong>Behavioral Activation:</strong> Encouraging activities that promote positive feelings.</li>
        <li><strong>Skill Building:</strong> Learning coping strategies, problem-solving, and stress management.</li>
      </ul>

      <h2 id="common-techniques">Common Techniques</h2>
      <ul>
        <li><strong>Journaling:</strong> Tracking thoughts, emotions, and behaviors to identify patterns.</li>
        <li><strong>Exposure Therapy:</strong> Gradual exposure to feared situations to reduce anxiety.</li>
        <li><strong>Role-Playing:</strong> Practicing new behaviors or social skills in a safe setting.</li>
      </ul>

      <h2 id="applications">Applications</h2>
      <p>CBT is widely used for conditions such as:</p>
      <ul>
        <li><strong>Depression & Anxiety Disorders</strong></li>
        <li><strong>Phobias & PTSD</strong></li>
        <li><strong>Eating Disorders & Substance Abuse</strong></li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Self-Help Books:</strong> “Feeling Good” by David Burns.</li>
        <li><strong>Therapy Apps:</strong> CBT-based apps like Woebot, Moodfit.</li>
        <li><strong>Professional Help:</strong> Licensed therapists specializing in CBT.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>CBT empowers individuals to take control of their mental health by challenging unhelpful thought patterns. With consistent practice, it can lead to lasting improvements in mood and behavior.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../introduction_to_psychology/introduction-to-psychology.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../stress_management/stress-management.php">Next</a></li>
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
