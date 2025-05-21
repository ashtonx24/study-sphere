<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere – Diet and Health</title>
  
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
    <a href="#weight-management">Weight Management</a>
    <a href="#chronic-diseases">Diet & Chronic Diseases</a>
    <a href="#diet-patterns">Common Diet Patterns</a>
    <a href="#tools-resources">Tools & Resources</a>
    <a href="#conclusion">Conclusion</a>

    <hr style="margin: 16px 32px;">

    <!-- Other Health & Wellness Topics -->
    <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Health & Wellness Topics</h4>
    <a href="../fundamentals_of_nutrition/fundamentals-of-nutrition.php">Fundamentals of Nutrition</a>
    <a class="active" href="../diet_and_health/diet-and-health.php">Diet and Health</a>
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
      <h1>Diet and Health</h1>
      <p>Diet plays a crucial role in maintaining overall health. From weight management to disease prevention, dietary choices have long-term impacts on our well-being.</p>

      <h2 id="introduction">Introduction</h2>
      <p>Healthy eating patterns help regulate body weight, reduce the risk of chronic diseases, and boost energy levels. Conversely, poor dietary habits can lead to obesity, diabetes, and cardiovascular problems.</p>

      <h2 id="weight-management">Weight Management</h2>
      <p>Balancing calorie intake with physical activity is key:</p>
      <ul>
        <li><strong>Calorie Deficit:</strong> For weight loss, burn more calories than you consume.</li>
        <li><strong>Calorie Surplus:</strong> For weight gain or muscle building, consume more than you burn.</li>
        <li><strong>Metabolism:</strong> Individual metabolic rates affect how the body uses energy.</li>
      </ul>

      <h2 id="chronic-diseases">Diet & Chronic Diseases</h2>
      <ul>
        <li><strong>Heart Disease:</strong> High intake of saturated fats and sugars increases risk.</li>
        <li><strong>Type 2 Diabetes:</strong> Excess weight and refined carbohydrates can contribute to insulin resistance.</li>
        <li><strong>Hypertension:</strong> Excessive sodium intake often linked to high blood pressure.</li>
      </ul>

      <h2 id="diet-patterns">Common Diet Patterns</h2>
      <ul>
        <li><strong>Mediterranean Diet:</strong> Emphasizes fruits, vegetables, whole grains, and healthy fats.</li>
        <li><strong>Vegetarian/Vegan:</strong> Excludes meat (and possibly all animal products), focusing on plant-based foods.</li>
        <li><strong>Low-Carb/Keto:</strong> Reduces carbohydrates to promote fat-burning metabolism.</li>
      </ul>

      <h2 id="tools-resources">Tools & Resources</h2>
      <ul>
        <li><strong>Professional Guidance:</strong> Registered dietitians for personalized plans.</li>
        <li><strong>Meal Planning Apps:</strong> PlateJoy, Mealime for balanced recipes.</li>
        <li><strong>Research & Articles:</strong> American Heart Association, American Diabetes Association websites.</li>
      </ul>

      <h2 id="conclusion">Conclusion</h2>
      <p>Diet and health are deeply interconnected. By making informed choices and staying mindful of individual needs, you can protect against chronic conditions and maintain a healthy weight.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../fundamentals_of_nutrition/fundamentals-of-nutrition.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../sports_nutrition/sports-nutrition.php">Next</a></li>
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
