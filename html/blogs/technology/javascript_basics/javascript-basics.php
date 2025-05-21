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
  <a href="#data-types-variables">Data Types & Variables</a>
  <a href="#operators">Operators</a>
  <a href="#conditionals-loops">Conditionals & Loops</a>
  <a href="#functions">Functions</a>
  <a href="#dom-manipulation">DOM Manipulation</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Tech Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Tech Topics</h4>
  <a href="../html_css/html-css.php">HTML & CSS</a>
  <a href="javascript-basics.php" class="active">JavaScript Basics</a>
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
    <h1>JavaScript Basics</h1>
    <p>JavaScript is the programming language of the web, enabling interactive and dynamic content on websites. From simple form validations to complex web applications, JavaScript powers a vast range of front-end functionality. In this guide, we’ll explore the essential building blocks of JavaScript, including data types, variables, operators, and more.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>JavaScript was initially created to add interactivity to static HTML pages. Today, it’s used both on the client side (in browsers) and server side (via Node.js). Mastering JavaScript fundamentals is crucial for any aspiring web developer.</p>
    
    <h2 id="data-types-variables">Data Types & Variables</h2>
    <p>JavaScript supports several data types, including:</p>
    <ul>
      <li><strong>Number:</strong> e.g., <code>42</code>, <code>3.14</code></li>
      <li><strong>String:</strong> Textual data in quotes (single or double), e.g., <code>"Hello World"</code></li>
      <li><strong>Boolean:</strong> <code>true</code> or <code>false</code></li>
      <li><strong>Null:</strong> Represents an intentional absence of a value</li>
      <li><strong>Undefined:</strong> A variable declared but not assigned a value</li>
      <li><strong>Object:</strong> Complex data structures, including arrays, functions, and more</li>
    </ul>
    <p>Variables in JavaScript can be declared using <code>var</code>, <code>let</code>, or <code>const</code>. Best practices recommend <code>let</code> and <code>const</code> for block-scoped declarations.</p>
    
    <h2 id="operators">Operators</h2>
    <p>Operators in JavaScript include:</p>
    <ul>
      <li><strong>Arithmetic:</strong> <code>+ - * / %</code> for basic math operations</li>
      <li><strong>Assignment:</strong> <code>=, +=, -=</code>, etc.</li>
      <li><strong>Comparison:</strong> <code>===, !==, &lt;, &gt;, &lt;=, &gt;=</code> to compare values</li>
      <li><strong>Logical:</strong> <code>&amp;&amp;</code> (AND), <code>||</code> (OR), <code>!</code> (NOT)</li>
    </ul>
    <p>Understanding how these operators work, especially the difference between <code>==</code> and <code>===</code>, is critical for avoiding subtle bugs.</p>
    
    <h2 id="conditionals-loops">Conditionals & Loops</h2>
    <p>JavaScript offers multiple ways to handle conditional logic and iteration:</p>
    <ul>
      <li><strong>Conditionals:</strong> <code>if</code>, <code>else if</code>, <code>else</code>, <code>switch</code></li>
      <li><strong>Loops:</strong> <code>for</code>, <code>while</code>, <code>do...while</code>, and <code>for...of</code> for arrays</li>
    </ul>
    <p>These constructs let you control the flow of your program, execute code blocks repeatedly, and handle different cases based on runtime conditions.</p>
    
    <h2 id="functions">Functions</h2>
    <p>Functions are reusable blocks of code that perform specific tasks:</p>
<pre><code>function greet(name) {
  return "Hello, " + name + "!";
}

// Arrow function
const greetArrow = (name) =&gt; "Hello, " + name + "!";
</code></pre>
    <p>JavaScript supports **function declarations**, **function expressions**, and **arrow functions**, each with its own nuances for <code>this</code> binding and scope.</p>
    
    <h2 id="dom-manipulation">DOM Manipulation</h2>
    <p>The **Document Object Model (DOM)** is an API for HTML documents. JavaScript can dynamically modify page content and style using methods like:</p>
    <ul>
      <li><code>document.getElementById()</code> or <code>document.querySelector()</code> to select elements</li>
      <li><code>element.innerHTML</code> or <code>element.textContent</code> to update text</li>
      <li><code>element.style</code> to change CSS properties</li>
    </ul>
    <p>This interactivity is a major reason JavaScript is ubiquitous on the web.</p>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>Learning JavaScript is easier with the right tools and references:</p>
    <ul>
      <li><strong>Code Editors:</strong> VS Code, Sublime Text, or Atom for IntelliSense and debugging</li>
      <li><strong>DevTools:</strong> Chrome DevTools or Firefox DevTools for in-browser debugging</li>
      <li><strong>Online Tutorials:</strong> MDN Web Docs, freeCodeCamp, and YouTube channels for guided learning</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>JavaScript Basics lay the foundation for front-end web development. By mastering data types, operators, control structures, and DOM manipulation, you’ll be well-prepared to tackle more advanced frameworks and libraries like React.js. Speaking of which, our next topic dives into building dynamic user interfaces with React.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../html_css/html-css.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../react_js/reactjs.php">Next</a></li>
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
