<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere</title>
  
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
  <a href="#basic-structure">Basic Structure</a>
  <a href="#css-fundamentals">CSS Fundamentals</a>
  <a href="#layout-techniques">Layout Techniques</a>
  <a href="#responsive-design">Responsive Design</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Technology Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Tech Topics</h4>
  <a href="html-css.php" class="active">HTML & CSS</a>
  <a href="../javascript_basics/javascript-basics.php">JavaScript Basics</a>
  <a href="../react_js/reactjs.php">React.js</a>
  <a href="../node_js/nodejs.php">Node.js</a>
  <a href="../full_stack_development/full-stack-development.php">Full-Stack Development</a>
  <a href="../python_for_beginners/python-for-beginners.php">Python for Beginners</a>
  <a href="../java_programming/java-programming.php">Java Programming</a>
  <a href="../data_structures_algorithms/data-structures-algorithms.php">Data Structures & Algorithms</a>
</div>



  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>HTML & CSS</h1>
    <p>HTML (HyperText Markup Language) and CSS (Cascading Style Sheets) form the backbone of web development. HTML structures the content on a page, while CSS styles and visually enhances that content. Understanding these core technologies is essential for anyone aspiring to create modern, responsive websites.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>HTML and CSS work together to define the layout, appearance, and structure of a web page. HTML uses tags to organize content into elements like paragraphs, headings, and images, while CSS targets those elements to apply styling, positioning, and more.</p>
    
    <h2 id="basic-structure">Basic Structure of an HTML Document</h2>
    <p>A simple HTML document includes a doctype declaration, `<html>` root, `<head>` section for metadata, and a `<body>` section for visible content. For example:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;title&gt;My Webpage&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;h1&gt;Hello World!&lt;/h1&gt;
  &lt;p&gt;Welcome to my webpage.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
    <p>This boilerplate sets the stage for everything else in your web project.</p>
    
    <h2 id="css-fundamentals">CSS Fundamentals</h2>
    <p>CSS allows you to separate content from presentation, enabling cleaner code and easier maintenance. Key concepts include:</p>
    <ul>
      <li><strong>Selectors:</strong> Targeting specific HTML elements (e.g., <code>p</code>, <code>.class</code>, <code>#id</code>).</li>
      <li><strong>Properties & Values:</strong> Defining style rules (e.g., <code>color: blue;</code>, <code>font-size: 16px;</code>).</li>
      <li><strong>Cascade & Specificity:</strong> Handling conflicts when multiple rules target the same element.</li>
      <li><strong>Box Model:</strong> Understanding how padding, margin, and border affect layout.</li>
    </ul>
    
    <h2 id="layout-techniques">Layout Techniques</h2>
    <p>Modern CSS provides powerful layout modules:</p>
    <ul>
      <li><strong>Flexbox:</strong> Simplifies vertical and horizontal alignment, distributing space among items.</li>
      <li><strong>CSS Grid:</strong> Offers two-dimensional control over rows and columns for complex layouts.</li>
      <li><strong>Positioning:</strong> Allows elements to be placed relative, absolute, or fixed in the viewport.</li>
    </ul>
    
    <h2 id="responsive-design">Responsive Design</h2>
    <p>Ensuring a website looks good on all devices is critical. Key approaches include:</p>
    <ul>
      <li><strong>Media Queries:</strong> Applying different CSS rules based on screen size, orientation, or resolution.</li>
      <li><strong>Fluid Layouts:</strong> Using percentages and relative units (e.g., <code>em</code>, <code>rem</code>) to scale elements.</li>
      <li><strong>Mobile-First:</strong> Designing for smaller screens first, then adding complexity for larger screens.</li>
    </ul>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>There are countless resources to help you learn HTML & CSS more effectively:</p>
    <ul>
      <li><strong>Code Editors:</strong> Visual Studio Code, Sublime Text, or Atom for syntax highlighting and extensions.</li>
      <li><strong>Online Tutorials:</strong> MDN Web Docs, W3Schools, and free courses on platforms like freeCodeCamp.</li>
      <li><strong>CSS Frameworks:</strong> Bootstrap, Tailwind CSS, and Foundation for rapid UI development.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>HTML & CSS are the building blocks of the web, allowing developers to structure and style content in endless ways. Mastering these core technologies is the first step toward creating engaging, responsive, and visually appealing websites. Next, we’ll dive into JavaScript, which adds interactivity and dynamic functionality to your pages.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="#">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../javascript_basics/javascript-basics.php">Next</a></li>
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
