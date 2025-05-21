document.getElementById("confirmLogoutBtn").addEventListener("click", function() {
  console.log("Logout button clicked");
  // Clear the client-side state
  Store.setState({ user: null, admin: null });
  // Redirect to the PHP logout script to destroy the session server-side
  window.location.href = "/study-sphere/php/logout.php";
});

document.addEventListener('DOMContentLoaded', () => {
  // Render user info
  const userNameElement = document.getElementById('userName'); // Make sure this element exists in home.html

  function renderUserInfo(state) {
    if (state.user && (state.user.username || state.user.name)) {
      userNameElement.textContent = state.user.username || state.user.name;
    } else {
      userNameElement.textContent = 'Guest';
    }
  }

  // Subscribe to state changes
  Store.subscribe(renderUserInfo);
  // Render the current state on page load
  renderUserInfo(Store.getState());
});

document.addEventListener('DOMContentLoaded', () => {
  // Theme toggle code
  const themeToggleButton = document.getElementById('theme-toggle');

  function toggleTheme() {
      const bodyElement = document.body;
      bodyElement.classList.toggle('dark-theme');
      bodyElement.classList.toggle('light-theme');

      const isDarkTheme = bodyElement.classList.contains('dark-theme');
      localStorage.setItem('theme', isDarkTheme ? 'dark-theme' : 'light-theme');

      // Update the theme icon when the theme is toggled
      updateThemeIcon();
  }

  function updateThemeIcon() {
      const x = document.getElementById('theme-toggle');
      const isDarkTheme = document.body.classList.contains('dark-theme');
      
      if (isDarkTheme) {
          x.textContent = '🌙'; // Moon icon for dark theme
      } else {
          x.textContent = '☀️'; // Sun icon for light theme
      }
  }

  themeToggleButton.addEventListener('click', toggleTheme);

  // Check for the saved theme and apply it on page load
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme) {
      document.body.classList.add(savedTheme);
  } else {
      document.body.classList.add('light-theme'); // Default to light theme
  }

  // Set the correct icon on load
  updateThemeIcon();
});

// Implement the optional search mechanism for courses
document.addEventListener('DOMContentLoaded', () => {
  // Select the search form and input field
  const searchForm = document.querySelector('form');
  const searchInput = document.getElementById('courseSearchInput') ||
                      document.querySelector('input[placeholder="Search courses"]');
  // Select all course links in the course-list sections
  const courseLinks = document.querySelectorAll('.course-list a.btn-course');
  
  if (searchForm && searchInput) {
    searchForm.addEventListener('submit', (event) => {
        event.preventDefault();
        // Get the search query in lowercase
        const query = searchInput.value.trim().toLowerCase();
        
        // Filter each course link based on the query
        courseLinks.forEach((link) => {
            const courseText = link.textContent.toLowerCase();
            if (query === "" || courseText.indexOf(query) !== -1) {
                link.style.display = 'inline-block';
            } else {
                link.style.display = 'none';
            }
        });
        
        // Hide entire categories that have no visible courses
        const categories = document.querySelectorAll('.category');
        categories.forEach((category) => {
            const links = category.querySelectorAll('.course-list a.btn-course');
            // Check if at least one course is visible
            let hasVisible = Array.from(links).some(link => link.style.display !== 'none');
            category.style.display = hasVisible ? '' : 'none';
        });
    });
  }
});
