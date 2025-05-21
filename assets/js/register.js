document.getElementById('register-form').addEventListener('submit', async function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    // Quick check for matching passwords
    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        return;
    }

    // Ensure all fields are filled
    if (name && username && email && password && confirmPassword) {
        try {
            const formData = new FormData();
            formData.append('name', name);
            formData.append('username', username);
            formData.append('email', email);
            formData.append('password', password);

            // Send the POST request
            const response = await fetch('../php/register.php', {
                method: 'POST',
                body: formData
            });

            // For debugging: log the raw text
            const responseText = await response.text();
            console.log('Raw response:', responseText);

            // Parse as JSON
            const result = JSON.parse(responseText);

            if (result.success) {
                alert(result.message);
                // Redirect to login page
                window.location.href = 'login.html';
                
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error('Error parsing JSON or fetching data:', error);
            alert('Registration failed. Please try again.');
        }
    } else {
        alert('Please fill in all fields.');
    }
});
