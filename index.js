function startHome() {
    console.log("Start Home");
    // Add a class to the body that triggers the fade-out transition effect
    document.body.classList.add("fade-out");

    setTimeout(function() {
        window.location.href = "./home/home.php";
    }, 500); // The timeout duration should match the transition duration in CSS (0.5s in this case)
};