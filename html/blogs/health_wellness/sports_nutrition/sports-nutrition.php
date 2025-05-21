<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Sports Nutrition</title>
  
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
    <a href="#pre-post-workout">Pre & Post-Workout Nutrition</a>
    <a href="#hydration-electrolytes">Hydration & Electrolytes</a>
    <a href="#supplements">Common Supplements</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Health & Wellness Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Health & Wellness Topics</h4>
    <a href="../fundamentals_of_nutrition/fundamentals-of-nutrition.php">Fundamentals of Nutrition</a>
    <a href="../diet_and_health/diet-and-health.php">Diet and Health</a>
    <a class="active" href="../sports_nutrition/sports-nutrition.php">Sports Nutrition</a>
    <a href="../introduction_to_psychology/introduction-to-psychology.php">Introduction to Psychology</a>
    <a href="../cognitive_behavioral_therapy/cognitive-behavioral-therapy.php">Cognitive Behavioral Therapy</a>
    <a href="../stress_management/stress-management.php">Stress Management</a>
    <a href="../positive_psychology/positive-psychology.php">Positive Psychology</a>
    <a href="../mindfulness_and_meditation/mindfulness-and-meditation.php">Mindfulness and Meditation</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Sports Nutrition</h1>
      <p>Sports Nutrition focuses on optimizing dietary intake to enhance athletic performance, speed recovery, and support muscle growth. It tailors nutrition strategies to different sports and training regimens.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Athletes require a balanced diet rich in proteins, carbohydrates, and healthy fats. The timing of meals and hydration strategies also play a significant role in performance.</p>

      <h2 id="pre-post-workout">Pre & Post-Workout Nutrition</h2>
      <ul>
        <li><strong>Pre-Workout:</strong> Carbohydrate-rich meals for energy, moderate protein for muscle support.</li>
        <li><strong>Post-Workout:</strong> Protein to repair muscles, carbs to replenish glycogen stores.</li>
        <li><strong>Timing:</strong> Aim to eat 1–3 hours before exercise and within 30–60 minutes after.</li>
      </ul>

      <h2 id="hydration-electrolytes">Hydration & Electrolytes</h2>
      <p>Adequate fluid intake prevents dehydration and maintains performance:</p>
      <ul>
        <li><strong>Water vs. Sports Drinks:</strong> Choose sports drinks for intense or prolonged exercise to replace electrolytes.</li>
        <li><strong>Sodium, Potassium, Magnesium:</strong> Crucial for muscle function and fluid balance.</li>
      </ul>

      <h2 id="supplements">Common Supplements</h2>
      <ul>
        <li><strong>Protein Powders:</strong> Whey, casein, or plant-based for muscle repair and growth.</li>
        <li><strong>Creatine:</strong> May improve power output and high-intensity performance.</li>
        <li><strong>BCAAs:</strong> Branched-chain amino acids to aid muscle recovery (research is mixed).</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Sports Dietitians:</strong> Professional guidance for individualized plans.</li>
        <li><strong>Educational Sites:</strong> Gatorade Sports Science Institute, ISSN (International Society of Sports Nutrition).</li>
        <li><strong>Performance Tracking:</strong> Wearable devices to monitor hydration and caloric expenditure.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Sports Nutrition is a key component of athletic success. Tailoring meals and hydration strategies to training demands helps athletes reach peak performance and recover effectively.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../diet_and_health/diet-and-health.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../introduction_to_psychology/introduction-to-psychology.php">Next</a></li>
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
