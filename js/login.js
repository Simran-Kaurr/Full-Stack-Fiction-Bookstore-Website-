function logPage(platform) {
    console.log("Redirecting to " + platform);
    // Implement your redirection logic here
    // For example: window.location.href = "google_login.php" or "facebook_login.php"
}

// Add event listeners to the container elements
document.getElementById('google-container').addEventListener('click', function() {
    logPage('Google');
});

document.getElementById('facebook-container').addEventListener('click', function() {
    logPage('Facebook');
});
