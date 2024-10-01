var latest_work = document.getElementById('letest_work');
latest_work.addEventListener('click', function() {
  // Check the viewport width to determine if it's mobile or desktop
  var scrollDistance = window.innerWidth <= 768 ? 400 : 530; // 400px for mobile, 500px for desktop

  window.scrollTo({
    top: scrollDistance, // scroll down based on the viewport size
    left: 0,  // keep horizontal scroll position unchanged
    behavior: "smooth", // smooth scrolling
  });

  console.log('Scroll down smoothly');
});
