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
  <a href="#why-python">Why Python?</a>
  <a href="#setup-environment">Setting Up the Environment</a>
  <a href="#basic-syntax">Basic Syntax</a>
  <a href="#data-types">Data Types & Structures</a>
  <a href="#control-flow">Control Flow</a>
  <a href="#functions-modules">Functions & Modules</a>
  <a href="#tools-resources">Tools & Resources</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Tech Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Tech Topics</h4>
  <a href="../html_css/html-css.php">HTML & CSS</a>
  <a href="../javascript_basics/javascript-basics.php">JavaScript Basics</a>
  <a href="../react_js/reactjs.php">React.js</a>
  <a href="../node_js/nodejs.php">Node.js</a>
  <a href="../full_stack_development/full-stack-development.php">Full-Stack Development</a>
  <a href="python-for-beginners.php" class="active">Python for Beginners</a>
  <a href="../java_programming/java-programming.php">Java Programming</a>
  <a href="../data_structures_algorithms/data-structures-algorithms.php">Data Structures & Algorithms</a>
</div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Python for Beginners</h1>
    <p>Python is a versatile, high-level programming language known for its readability and broad range of applications—from web development and data science to automation and artificial intelligence. In this guide, we’ll cover the basics of Python, including environment setup, syntax, data types, and more.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Created by Guido van Rossum in the late 1980s, Python emphasizes clear, concise code and rapid development. It’s an excellent choice for beginners due to its simplicity and expansive community support.</p>
    
    <h2 id="why-python">Why Python?</h2>
    <p>Python’s popularity stems from several advantages:</p>
    <ul>
      <li><strong>Easy to Learn:</strong> A simple, English-like syntax that is beginner-friendly.</li>
      <li><strong>Extensive Libraries:</strong> Robust libraries for data analysis, machine learning, and more.</li>
      <li><strong>Community Support:</strong> A large ecosystem of tutorials, forums, and open-source projects.</li>
      <li><strong>Cross-Platform:</strong> Runs on Windows, macOS, Linux, and more.</li>
    </ul>
    
    <h2 id="setup-environment">Setting Up the Environment</h2>
    <p>To get started with Python:</p>
    <ul>
      <li><strong>Install Python:</strong> Download from <a href="https://python.org" target="_blank">python.org</a> or use a package manager like <code>apt</code> on Linux or <code>brew</code> on macOS.</li>
      <li><strong>Check Installation:</strong> Run <code>python --version</code> in your terminal.</li>
      <li><strong>IDE or Text Editor:</strong> Visual Studio Code, PyCharm, or Jupyter Notebook for a smoother development experience.</li>
    </ul>
    
    <h2 id="basic-syntax">Basic Syntax</h2>
    <p>Python uses indentation to define code blocks, instead of braces (<code>{}</code>) or keywords (<code>begin/end</code>). For example:</p>
<pre><code>def greet(name):
    print("Hello, " + name + "!")
</code></pre>
    <p>This focus on indentation promotes clean, readable code.</p>
    
    <h2 id="data-types">Data Types & Structures</h2>
    <p>Python offers a variety of built-in data types and structures:</p>
    <ul>
      <li><strong>Numbers:</strong> <code>int</code>, <code>float</code>, <code>complex</code></li>
      <li><strong>Strings:</strong> Enclosed in single or double quotes (e.g., <code>"Hello"</code>)</li>
      <li><strong>Lists:</strong> Ordered, mutable collections (e.g., <code>[1, 2, 3]</code>)</li>
      <li><strong>Tuples:</strong> Ordered, immutable collections (e.g., <code>(1, 2, 3)</code>)</li>
      <li><strong>Dictionaries:</strong> Key-value pairs (e.g., <code>{"name": "Alice", "age": 30}</code>)</li>
    </ul>
    
    <h2 id="control-flow">Control Flow</h2>
    <p>Control flow in Python is managed through statements like:</p>
    <ul>
      <li><strong>if/elif/else:</strong> Conditional checks</li>
      <li><strong>for loops:</strong> Iterate over sequences (e.g., lists, strings, ranges)</li>
      <li><strong>while loops:</strong> Execute as long as a condition remains true</li>
    </ul>
<pre><code>for i in range(5):
    print(i)
</code></pre>
    
    <h2 id="functions-modules">Functions & Modules</h2>
    <p>Functions are defined with the <code>def</code> keyword:</p>
<pre><code>def add(a, b):
    return a + b
</code></pre>
    <p>Modules let you organize code into separate files. Use <code>import</code> to include them:</p>
<pre><code># my_module.py
def say_hello():
    print("Hello from my_module!")

# main.py
import my_module
my_module.say_hello()
</code></pre>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>Expand your Python knowledge with these resources:</p>
    <ul>
      <li><strong>Official Docs:</strong> <a href="https://docs.python.org/3/" target="_blank">Python 3 Documentation</a></li>
      <li><strong>Online Platforms:</strong> Codecademy, freeCodeCamp, and Coursera</li>
      <li><strong>Libraries & Frameworks:</strong> Django, Flask for web development; NumPy, pandas, Matplotlib for data science</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Python’s simplicity and flexibility make it an excellent language for beginners and seasoned developers alike. Whether you aim to build web applications, delve into data science, or automate tasks, Python provides a solid foundation. Next, we’ll explore <strong>Java Programming</strong>, another highly popular language known for its versatility and extensive enterprise use.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../full_stack_development/full-stack-development.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../java_programming/java-programming.php">Next</a></li>
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
