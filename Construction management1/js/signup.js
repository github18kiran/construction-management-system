const signupButton = document.getElementById('signup-button');
signupButton.addEventListener('click', function() {
    const username = document.getElementById('signup-username').value;
    const password = document.getElementById('signup-password').value;
    
    // Perform signup logic (you'd typically make an API request here)
    console.log(`Sign Up with Username: ${username}, Password: ${password}`);
});