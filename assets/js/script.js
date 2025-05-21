document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const adminLoginForm = document.getElementById('adminLoginForm');

    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Implement login logic here (e.g., API call)
            console.log('User logging in:', username);
        });
    }

    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Implement registration logic here (e.g., API call)
            console.log('User registering:', username);
        });
    }

    if (adminLoginForm) {
        adminLoginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const username = document.getElementById('adminUsername').value;
            const password = document.getElementById('adminPassword').value;

            // Implement admin login logic here (e.g., API call)
            console.log('Admin logging in:', username);
        });
    }

// Show the popup modal
function showPopup() {
    $('#popupModal').modal('show');
}

// Redirect to the specified page
function redirectTo(page) {
    window.location.href = page;
}

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
