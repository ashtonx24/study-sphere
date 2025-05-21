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
  <a href="#components">Components</a>
  <a href="#props-state">Props & State</a>
  <a href="#lifecycle-hooks">Lifecycle & Hooks</a>
  <a href="#data-fetching">Data Fetching</a>
  <a href="#tooling">Tooling & Ecosystem</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Tech Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Tech Topics</h4>
  <a href="../html_css/html-css.php">HTML & CSS</a>
  <a href="../javascript_basics/javascript-basics.php">JavaScript Basics</a>
  <a href="reactjs.php" class="active">React.js</a>
  <a href="../node_js/nodejs.php">Node.js</a>
  <a href="../full_stack_development/full-stack-development.php">Full-Stack Development</a>
  <a href="../python_for_beginners/python-for-beginners.php">Python for Beginners</a>
  <a href="../java_programming/java-programming.php">Java Programming</a>
  <a href="../data_structures_algorithms/data-structures-algorithms.php">Data Structures & Algorithms</a>
</div>


  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>React.js</h1>
    <p>React.js, commonly referred to as React, is a powerful JavaScript library for building user interfaces. Developed by Facebook, React emphasizes a component-based architecture and a declarative programming style, making it easier to manage complex UI states. In this guide, we’ll explore React’s core concepts, including components, props, state, and hooks.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>React uses a virtual DOM to optimize rendering performance. Rather than updating the entire page, React only re-renders components that change. This approach provides a smoother user experience and makes complex UIs more manageable.</p>
    
    <h2 id="components">Components</h2>
    <p>React applications are built using reusable components. Each component can be a class-based component or a functional component:</p>
    <ul>
      <li><strong>Functional Components:</strong> A simple JavaScript function returning JSX.</li>
      <li><strong>Class Components:</strong> ES6 classes extending <code>React.Component</code> with lifecycle methods.</li>
    </ul>
<pre><code>// Example of a functional component
function Greeting(props) {
  return &lt;h1&gt;Hello, {props.name}!&lt;/h1&gt;;
}
</code></pre>
    
    <h2 id="props-state">Props & State</h2>
    <p>Props (short for “properties”) are read-only data passed from a parent to a child component. State, on the other hand, is data managed within a component itself.</p>
    <ul>
      <li><strong>Props:</strong> Immutable; used to configure a component’s initial state or behavior.</li>
      <li><strong>State:</strong> Mutable data that triggers a re-render when updated.</li>
    </ul>
<pre><code>// Example of using props and state
function Counter({ initialCount }) {
  const [count, setCount] = useState(initialCount);

  return (
    &lt;div&gt;
      &lt;p&gt;You clicked {count} times&lt;/p&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;Increment&lt;/button&gt;
    &lt;/div&gt;
  );
}
</code></pre>
    
    <h2 id="lifecycle-hooks">Lifecycle & Hooks</h2>
    <p>Before Hooks, class components relied on lifecycle methods like <code>componentDidMount</code> and <code>componentWillUnmount</code>. With Hooks, functional components can now use features like state and lifecycle without classes. Key Hooks include:</p>
    <ul>
      <li><code>useState</code>: Manages local state.</li>
      <li><code>useEffect</code>: Handles side effects such as data fetching or subscriptions.</li>
      <li><code>useContext</code>: Shares data without prop drilling.</li>
    </ul>
    
    <h2 id="data-fetching">Data Fetching</h2>
    <p>React doesn’t enforce a specific data fetching strategy, but common approaches include:</p>
    <ul>
      <li><strong>Fetch API or Axios:</strong> Use <code>useEffect</code> to fetch data on mount.</li>
      <li><strong>Custom Hooks:</strong> Encapsulate data-fetching logic into reusable hooks.</li>
      <li><strong>State Management:</strong> Tools like Redux or React Query for complex or global state.</li>
    </ul>
    
    <h2 id="tooling">Tooling & Ecosystem</h2>
    <p>The React ecosystem includes:</p>
    <ul>
      <li><strong>Create React App (CRA):</strong> Zero-config CLI to bootstrap new React projects.</li>
      <li><strong>Next.js:</strong> A framework for server-side rendering and static site generation.</li>
      <li><strong>React Router:</strong> Routing library for managing multiple views.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>React.js revolutionized how developers build interactive UIs by emphasizing a declarative, component-based approach. By mastering components, props, state, and Hooks, you’ll be well on your way to creating performant, scalable web applications. Next, we’ll explore Node.js to see how JavaScript powers the server side as well.</p>
    
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../javascript_basics/javascript-basics.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../node_js/nodejs.php">Next</a></li>
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
