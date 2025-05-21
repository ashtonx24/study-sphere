<?php
// blog1.html is in html/blogs/ca/, so we go up 3 directories to reach the php folder
require_once '../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Study-Sphere</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    
</head>
<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <div class="container-fluid">

            <span class="navbar-text" id="welcomeMessage">Welcome, <span id="userName"><?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'guest'; ?></span></span>
            <div class="right-section ml-3">
                <!-- theme toggle button -->
                <button id="theme-toggle" class="theme-toggle-btn btn">☀️</button>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="form-inline ml-auto">
                    <input class="form-control mr-sm-2" id="courseSearchInput" type="search" placeholder="Search courses" aria-label="Search">
                    <button class="btn btn-outline-custom my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
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
    
    <div class="container">
        <h2 class="mt-4 mb-4">Explore Courses</h2>

        <div class="row">
            <!-- Financial Category -->
<div class="col-md-4 mb-4">
    <div class="category">
        <h3>Financial</h3>
        <div class="course-list">
            <a href="blogs/financial/chartered_accountant/blog1.php" class="btn btn-course">Chartered Accountant</a>
            <a href="blogs/financial/financial_risk_management/financial-risk-management.php" class="btn btn-course">Financial Risk Management</a>
            <a href="blogs/financial/investment_banking/investment-banking.php" class="btn btn-course">Investment Banking</a>
            <a href="blogs/financial/personal_finance_planning/personal-finance-planning.php" class="btn btn-course">Personal Finance Planning</a>
            <a href="blogs/financial/corporate_finance/corporate-finance.php" class="btn btn-course">Corporate Finance</a>
            <a href="blogs/financial/investment_analysis/investment-analysis.php" class="btn btn-course">Investment Analysis</a>
            <a href="blogs/financial/financial_markets/financialmarkets.php" class="btn btn-course">Financial Markets</a>
            <a href="blogs/financial/accounting_basics/accounting-basics.php" class="btn btn-course">Accounting Basics</a>
        </div>
    </div>
</div>

<!-- Technology Category -->
<div class="col-md-4 mb-4">
    <div class="category">
        <h3>Technology</h3>
        <div class="course-list">
            <a href="blogs/technology/html_css/html-css.php" class="btn btn-course">HTML & CSS</a>
            <a href="blogs/technology/javascript_basics/javascript-basics.php" class="btn btn-course">JavaScript Basics</a>
            <a href="blogs/technology/react_js/reactjs.php" class="btn btn-course">React.js</a>
            <a href="blogs/technology/node_js/nodejs.php" class="btn btn-course">Node.js</a>
            <a href="blogs/technology/full_stack_development/full-stack-development.php" class="btn btn-course">Full-Stack Development</a>
            <a href="blogs/technology/python_for_beginners/python-for-beginners.php" class="btn btn-course">Python for Beginners</a>
            <a href="blogs/technology/java_programming/java-programming.php" class="btn btn-course">Java Programming</a>
            <a href="blogs/technology/data_structures_algorithms/data-structures-algorithms.php" class="btn btn-course">Data Structures & Algorithms</a>
        </div>
    </div>
</div>

<!-- Science Category -->
<div class="col-md-4 mb-4">
    <div class="category">
        <h3>Science</h3>
        <div class="course-list">
            <a href="blogs/science/classical_mechanics/classical-mechanics.php" class="btn btn-course">Classical Mechanics</a>
            <a href="blogs/science/quantum_physics/quantum-physics.php" class="btn btn-course">Quantum Physics</a>
            <a href="blogs/science/thermodynamics/thermodynamics.php" class="btn btn-course">Thermodynamics</a>
            <a href="blogs/science/electromagnetism/electromagnetism.php" class="btn btn-course">Electromagnetism</a>
            <a href="blogs/science/cell_biology/cell-biology.php" class="btn btn-course">Cell Biology</a>
            <a href="blogs/science/genetics/genetics.php" class="btn btn-course">Genetics</a>
            <a href="blogs/science/human_anatomy/human-anatomy.php" class="btn btn-course">Human Anatomy</a>
            <a href="blogs/science/organic_chemistry/organic-chemistry.php" class="btn btn-course">Organic Chemistry</a>
        </div>
    </div>
</div>

<!-- Arts & Humanities Category -->
<div class="col-md-4 mb-4">
    <div class="category">
        <h3>Arts & Humanities</h3>
        <div class="course-list">
            <a href="blogs/arts_humanities/ancient_civilizations/ancient-civilizations.php" class="btn btn-course">Ancient Civilizations</a>
            <a href="blogs/arts_humanities/medieval_history/medieval-history.php" class="btn btn-course">Medieval History</a>
            <a href="blogs/arts_humanities/modern_history/modern-history.php" class="btn btn-course">Modern History</a>
            <a href="blogs/arts_humanities/english_literature/english-literature.php" class="btn btn-course">English Literature</a>
            <a href="blogs/arts_humanities/world_literature/world-literature.php" class="btn btn-course">World Literature</a>
            <a href="blogs/arts_humanities/creative_writing/creative-writing.php" class="btn btn-course">Creative Writing</a>
            <a href="blogs/arts_humanities/introduction_to_philosophy/introduction-to-philosophy.php" class="btn btn-course">Introduction to Philosophy</a>
            <a href="blogs/arts_humanities/ethics/ethics.php" class="btn btn-course">Ethics</a>
        </div>
    </div>
</div>

<!-- Health & Wellness Category -->
<div class="col-md-4 mb-4">
    <div class="category">
        <h3>Health & Wellness</h3>
        <div class="course-list">
            <a href="blogs/health_wellness/fundamentals_of_nutrition/fundamentals-of-nutrition.php" class="btn btn-course">Fundamentals of Nutrition</a>
            <a href="blogs/health_wellness/diet_and_health/diet-and-health.php" class="btn btn-course">Diet and Health</a>
            <a href="blogs/health_wellness/sports_nutrition/sports-nutrition.php" class="btn btn-course">Sports Nutrition</a>
            <a href="blogs/health_wellness/introduction_to_psychology/introduction-to-psychology.php" class="btn btn-course">Introduction to Psychology</a>
            <a href="blogs/health_wellness/cognitive_behavioral_therapy/cognitive-behavioral-therapy.php" class="btn btn-course">Cognitive Behavioral Therapy</a>
            <a href="blogs/health_wellness/stress_management/stress-management.php" class="btn btn-course">Stress Management</a>
            <a href="blogs/health_wellness/positive_psychology/positive-psychology.php" class="btn btn-course">Positive Psychology</a>
            <a href="blogs/health_wellness/mindfulness_and_meditation/mindfulness-and-meditation.php" class="btn btn-course">Mindfulness and Meditation</a>
        </div>
    </div>
</div>

<!-- Engineering Category -->
<div class="col-md-4 mb-4">
    <div class="category">
        <h3>Engineering</h3>
        <div class="course-list">
            <a href="blogs/engineering/thermodynamics/thermodynamics.php" class="btn btn-course">Thermodynamics</a>
            <a href="blogs/engineering/fluid_mechanics/fluid-mechanics.php" class="btn btn-course">Fluid Mechanics</a>
            <a href="blogs/engineering/materials_science/materials-science.php" class="btn btn-course">Materials Science</a>
            <a href="blogs/engineering/circuit_analysis/circuit-analysis.php" class="btn btn-course">Circuit Analysis</a>
            <a href="blogs/engineering/signals_and_systems/signals-and-systems.php" class="btn btn-course">Signals and Systems</a>
            <a href="blogs/engineering/control_systems/control-systems.php" class="btn btn-course">Control Systems</a>
            <a href="blogs/engineering/structural_analysis/structural-analysis.php" class="btn btn-course">Structural Analysis</a>
            <a href="blogs/engineering/geotechnical_engineering/geotechnical-engineering.php" class="btn btn-course">Geotechnical Engineering</a>
        </div>
    </div>
</div>


            <!-- Add more categories as needed -->
        </div>
    </div>
    <script src="../assets/js/store.js"></script><!-- Load the store -->
    <!-- Inject PHP session data into JS -->
<script>
  const userFromPHP = <?php echo json_encode([
    'id' => $_SESSION['user_id'] ?? null,
    'username' => $_SESSION['username'] ?? 'Guest'
  ]); ?>;

  console.log("User from PHP session:", userFromPHP);
  Store.setState({ user: userFromPHP });
  console.log("Store state after setting:", Store.getState());
</script>

    <script src="../assets/js/home.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>