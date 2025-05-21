// assets/js/login.js
console.log('login.js loaded');
console.log(document.getElementById('login-form'));
document.getElementById('login-form').addEventListener('submit', async function (event) {
    event.preventDefault();
  
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    if (username && password) {
      try {
        // Create a FormData object to send credentials
        const formData = new FormData();
        formData.append('username', username);
        formData.append('password', password);
  
        // Send credentials to the PHP login endpoint
        const response = await fetch('../php/login.php', {
          method: 'POST',
          body: formData,
        });
  
        // Expecting a JSON response indicating success or failure
        const result = await response.json();
  
        if (result.success) {
          // Update the client-side store with the returned user data
          Store.setState({ user: result.user });
          alert('Login successful!');
          window.location.href = '/study-sphere/html/home.php';  // Or wherever your protected home page is
        } else {
          alert(result.message || 'Login failed. Please try again.');
        }
      } catch (error) {
        console.error('Login error:', error);
        alert('Login failed. Please try again.');
      }
    } else {
      alert('Please fill in all fields.');
    }
  });  