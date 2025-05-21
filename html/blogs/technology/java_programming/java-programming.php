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
  <a href="#syntax-basics">Syntax Basics</a>
  <a href="#oop">Object-Oriented Programming</a>
  <a href="#collections">Collections Framework</a>
  <a href="#exception-handling">Exception Handling</a>
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
  <a href="../python_for_beginners/python-for-beginners.php">Python for Beginners</a>
  <a href="java-programming.php" class="active">Java Programming</a>
  <a href="../data_structures_algorithms/data-structures-algorithms.php">Data Structures & Algorithms</a>
</div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Java Programming</h1>
    <p>Java is a versatile, high-level programming language widely used for building enterprise applications, Android apps, and large-scale systems. Known for its “write once, run anywhere” philosophy, Java code can run on multiple platforms without modification. In this guide, we’ll explore the basics of Java, including setup, syntax, object-oriented programming, and key frameworks.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Developed by Sun Microsystems (now Oracle) in the mid-1990s, Java has become one of the most popular languages for its robustness, security features, and extensive ecosystem. Whether you’re aiming to create desktop applications or massive enterprise solutions, Java has a place in nearly every corner of software development.</p>
    
    <h2 id="setup">Setup & Environment</h2>
    <p>Getting started with Java involves installing the Java Development Kit (JDK):</p>
    <ul>
      <li><strong>Download JDK:</strong> Obtain the latest version from <a href="https://www.oracle.com/java/technologies/downloads/" target="_blank">Oracle’s website</a> or use an open-source distribution like <code>OpenJDK</code>.</li>
      <li><strong>Check Installation:</strong> Run <code>java --version</code> and <code>javac --version</code> in your terminal.</li>
      <li><strong>IDE Options:</strong> Eclipse, IntelliJ IDEA, or NetBeans for comprehensive development tools.</li>
    </ul>
    
    <h2 id="syntax-basics">Syntax Basics</h2>
    <p>Java code is organized into classes, and every executable program has a <code>main</code> method. For example:</p>
<pre><code>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, Java!");
    }
}
</code></pre>
    <p>Key features include strong typing, semicolon line termination, and curly brace <code>{}</code> block structure.</p>
    
    <h2 id="oop">Object-Oriented Programming</h2>
    <p>Java is an OOP language, focusing on classes and objects:</p>
    <ul>
      <li><strong>Encapsulation:</strong> Bundling data and methods within a class.</li>
      <li><strong>Inheritance:</strong> Reusing code by extending classes.</li>
      <li><strong>Polymorphism:</strong> Overriding methods to perform different behaviors.</li>
      <li><strong>Abstraction:</strong> Hiding complex implementation details behind simple interfaces.</li>
    </ul>
<pre><code>// Example of a simple class
public class Car {
    private String model;

    public Car(String model) {
        this.model = model;
    }

    public void drive() {
        System.out.println("Driving " + model);
    }
}
</code></pre>
    
    <h2 id="collections">Collections Framework</h2>
    <p>Java’s Collections Framework provides data structures like <code>ArrayList</code>, <code>HashMap</code>, and <code>HashSet</code>:</p>
    <ul>
      <li><strong>List:</strong> An ordered collection (e.g., <code>ArrayList&lt;String&gt;</code>).</li>
      <li><strong>Set:</strong> A collection of unique elements (e.g., <code>HashSet&lt;Integer&gt;</code>).</li>
      <li><strong>Map:</strong> Key-value pairs (e.g., <code>HashMap&lt;String, Integer&gt;</code>).</li>
    </ul>
<pre><code>List&lt;String&gt; fruits = new ArrayList&lt;&gt;();
fruits.add("Apple");
fruits.add("Banana");
System.out.println(fruits.get(0)); // Apple
</code></pre>
    
    <h2 id="exception-handling">Exception Handling</h2>
    <p>Java uses <code>try</code>, <code>catch</code>, and <code>finally</code> blocks to manage runtime errors:</p>
<pre><code>try {
    int result = 10 / 0;
} catch (ArithmeticException e) {
    System.out.println("Cannot divide by zero.");
} finally {
    System.out.println("Cleanup code runs here.");
}
</code></pre>
    <p>Custom exceptions can also be created by extending <code>Exception</code> or <code>RuntimeException</code>.</p>
    
    <h2 id="tools-resources">Tools & Resources</h2>
    <p>Java’s ecosystem is vast. Some key tools include:</p>
    <ul>
      <li><strong>Maven & Gradle:</strong> Build automation and dependency management.</li>
      <li><strong>Spring Framework:</strong> A powerful framework for enterprise applications.</li>
      <li><strong>JUnit:</strong> A popular testing framework for unit tests.</li>
      <li><strong>Android Studio:</strong> Official IDE for Android development using Java or Kotlin.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Java remains a cornerstone of modern software development, offering strong typing, robust libraries, and cross-platform support. Mastering Java opens doors to building enterprise systems, Android apps, and beyond. Next, we’ll wrap up the Technology category by exploring <strong>Data Structures & Algorithms</strong>, a fundamental topic for efficient coding and problem-solving.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../python_for_beginners/python-for-beginners.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../data_structures_algorithms/data-structures-algorithms.php">Next</a></li>
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
