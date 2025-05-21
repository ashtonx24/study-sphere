<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Fundamentals of Nutrition</title>
  
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
    <a href="#macro-micronutrients">Macro & Micronutrients</a>
    <a href="#balanced-diet">Importance of a Balanced Diet</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Health & Wellness Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Health & Wellness Topics</h4>
    <a class="active" href="../fundamentals_of_nutrition/fundamentals-of-nutrition.php">Fundamentals of Nutrition</a>
    <a href="../diet_and_health/diet-and-health.php">Diet and Health</a>
    <a href="../sports_nutrition/sports-nutrition.php">Sports Nutrition</a>
    <a href="../introduction_to_psychology/introduction-to-psychology.php">Introduction to Psychology</a>
    <a href="../cognitive_behavioral_therapy/cognitive-behavioral-therapy.php">Cognitive Behavioral Therapy</a>
    <a href="../stress_management/stress-management.php">Stress Management</a>
    <a href="../positive_psychology/positive-psychology.php">Positive Psychology</a>
    <a href="../mindfulness_and_meditation/mindfulness-and-meditation.php">Mindfulness and Meditation</a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
      <h1>Fundamentals of Nutrition</h1>
      <p>Nutrition is the science of how food affects the body. Understanding nutrients and their roles helps in making healthier dietary choices and preventing diseases.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Good nutrition is vital for energy, growth, and maintaining body functions. It involves the right balance of macronutrients (carbohydrates, proteins, fats) and micronutrients (vitamins, minerals) to support overall health.</p>

      <h2 id="macro-micronutrients">Macro & Micronutrients</h2>
      <ul>
        <li><strong>Carbohydrates:</strong> Primary energy source. Include whole grains, fruits, vegetables.</li>
        <li><strong>Proteins:</strong> Essential for tissue repair and muscle growth. Found in meat, beans, nuts.</li>
        <li><strong>Fats:</strong> Concentrated energy. Unsaturated fats (olive oil, avocados) are healthier choices.</li>
        <li><strong>Vitamins & Minerals:</strong> Support various physiological functions (immune system, bone health).</li>
      </ul>

      <h2 id="balanced-diet">Importance of a Balanced Diet</h2>
      <p>A balanced diet includes a variety of foods that provide all essential nutrients. Over-reliance on processed foods can lead to deficiencies and health issues like obesity, heart disease, and diabetes.</p>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Dietary Guidelines:</strong> MyPlate (USDA), WHO nutrition guidelines.</li>
        <li><strong>Online Trackers:</strong> Apps like MyFitnessPal for calorie and nutrient tracking.</li>
        <li><strong>Reading Material:</strong> “Nutrition for Dummies,” “In Defense of Food” by Michael Pollan.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Understanding the fundamentals of nutrition lays the groundwork for healthier eating habits. By focusing on balanced, nutrient-dense foods, you can optimize health and well-being.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
      <li class="page-item" id="prev-button"><a class="page-link" href="#">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../diet_and_health/diet-and-health.php">Next</a></li>
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
