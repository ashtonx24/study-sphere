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
  <a href="#setup">Setup & Environment</a>
  <a href="#core-modules">Core Modules</a>
  <a href="#npm-packages">NPM & Packages</a>
  <a href="#async">Asynchronous JavaScript</a>
  <a href="#express">Express.js</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Tech Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Tech Topics</h4>
  <a href="../html_css/html-css.php">HTML & CSS</a>
  <a href="../javascript_basics/javascript-basics.php">JavaScript Basics</a>
  <a href="../react_js/reactjs.php">React.js</a>
  <a href="nodejs.php" class="active">Node.js</a>
  <a href="../full_stack_development/full-stack-development.php">Full-Stack Development</a>
  <a href="../python_for_beginners/python-for-beginners.php">Python for Beginners</a>
  <a href="../java_programming/java-programming.php">Java Programming</a>
  <a href="../data_structures_algorithms/data-structures-algorithms.php">Data Structures & Algorithms</a>
</div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Node.js</h1>
    <p>Node.js is a runtime environment that allows developers to run JavaScript on the server side. Built on Chrome’s V8 JavaScript engine, Node.js has gained popularity for its non-blocking, event-driven architecture, making it ideal for scalable network applications. In this guide, we’ll explore Node.js fundamentals, from setup to building a basic server with Express.js.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Node.js revolutionized JavaScript by extending its use beyond the browser. Developers can now build full-stack applications using a single language across both client and server, streamlining development workflows and code sharing.</p>
    
    <h2 id="setup">Setup & Environment</h2>
    <p>To start using Node.js:</p>
    <ul>
      <li><strong>Installation:</strong> Download from <a href="https://nodejs.org" target="_blank">nodejs.org</a> or use a version manager like <code>nvm</code>.</li>
      <li><strong>Node REPL:</strong> Quickly test code snippets by typing <code>node</code> in your terminal.</li>
      <li><strong>Project Structure:</strong> Create a folder for your project, then initialize with <code>npm init</code> or <code>npm init -y</code>.</li>
    </ul>
    
    <h2 id="core-modules">Core Modules</h2>
    <p>Node.js includes built-in modules that provide essential functionality:</p>
    <ul>
      <li><strong>fs:</strong> Interacts with the file system for reading/writing files.</li>
      <li><strong>http:</strong> Creates servers and handles HTTP requests/responses.</li>
      <li><strong>path:</strong> Helps manage file and directory paths.</li>
      <li><strong>os:</strong> Provides operating system-related utility methods.</li>
    </ul>
<pre><code>// Example: Creating a basic server
const http = require('http');
const server = http.createServer((req, res) =&gt; {
  res.write('Hello from Node.js server!');
  res.end();
});
server.listen(3000, () =&gt; console.log('Server running on port 3000'));
</code></pre>
    
    <h2 id="npm-packages">NPM & Packages</h2>
    <p>Node Package Manager (NPM) is bundled with Node.js. It provides access to thousands of libraries:</p>
    <ul>
      <li><strong>Install Packages:</strong> <code>npm install express</code> adds the Express.js framework to your project.</li>
      <li><strong>Versioning:</strong> <code>package.json</code> keeps track of dependencies and their versions.</li>
      <li><strong>Scripts:</strong> Automate tasks with custom scripts, e.g., <code>"start": "node app.js"</code>.</li>
    </ul>
    
    <h2 id="async">Asynchronous JavaScript</h2>
    <p>Node.js leverages non-blocking I/O, allowing a single thread to handle multiple requests concurrently. Common async patterns include:</p>
    <ul>
      <li><strong>Callbacks:</strong> Traditional approach, can lead to “callback hell.”</li>
      <li><strong>Promises:</strong> More readable chaining and error handling.</li>
      <li><strong>Async/Await:</strong> Syntactic sugar over promises for cleaner asynchronous code.</li>
    </ul>
    
    <h2 id="express">Express.js</h2>
    <p>Express.js is a popular minimal framework for building web applications and APIs with Node.js:</p>
<pre><code>// Example: Basic Express server
const express = require('express');
const app = express();

app.get('/', (req, res) =&gt; {
  res.send('Hello from Express!');
});

app.listen(3000, () =&gt; {
  console.log('Express server running on port 3000');
});
</code></pre>
    <p>Express simplifies routing, middleware management, and request handling, making it a go-to choice for server-side JavaScript development.</p>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Node.js brings JavaScript to the server, enabling a unified language across the full stack. By understanding core modules, asynchronous patterns, and popular frameworks like Express.js, you can build fast, scalable network applications. Next, we’ll look at Full-Stack Development, where Node.js often plays a critical role in the back-end of modern web apps.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../react_js/reactjs.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../full_stack_development/full-stack-development.php">Next</a></li>
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
