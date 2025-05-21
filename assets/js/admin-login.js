// assets/js/admin-login.js

document.getElementById('admin-login-form').addEventListener('submit', async function(event) {
    event.preventDefault();

    const adminUsername = document.getElementById('admin-username').value;
    const adminPassword = document.getElementById('admin-password').value;

    if (adminUsername && adminPassword) {
        try {
            const formData = new FormData();
            formData.append('adminUsername', adminUsername);
            formData.append('adminPassword', adminPassword);

            const response = await fetch('../php/admin-login.php', {  // Create a separate PHP endpoint if needed
              method: 'POST',
              body: formData,
            });

            const result = await response.json();

            if (result.success) {
              // Optionally set an admin flag in the store
              Store.setState({ admin: result.admin });
              alert('Admin login successful!');
              window.location.href = 'admin-dashboard.html';
            } else {
              alert(result.message || 'Admin login failed. Please try again.');
            }
        } catch (error) {
            console.error('Error during admin login:', error);
            alert('Login failed. Please try again.');
        }
    } else {
        alert('Please fill in all fields.');
    }
});
