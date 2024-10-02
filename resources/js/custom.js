// Calll window scroll down fun 
windowScrollDown();
function windowScrollDown(){
  var latest_work = document.getElementById('letest_work');
  latest_work.addEventListener('click', function() {

    var scrollDistance = window.innerWidth <= 768 ? 400 : 600; // 400px for mobile, 500px for desktop
    window.scrollTo({
      top: scrollDistance, 
      left: 0,  
      behavior: "smooth", 
    });
    
    console.log('Scroll down smoothly');
  });
}

// Window Dark Light Mode
windowDarkLightMode();

function windowDarkLightMode() {
  var lightModeButton = document.getElementById('light_mode');
  lightModeButton.addEventListener('click', function() {
    // Toggle dark mode class on the body element
    document.body.classList.toggle('dark-mode');

    // Log to confirm the change
    console.log('Dark mode toggled');
  });
}

