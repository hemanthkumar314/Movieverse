
  const video = document.getElementById("myvideo");
  const volBtn = document.getElementById("volBtn");

  video.play();

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        video.play(); // Pause when in view
      } else {
        video.pause();  // Play when out of view (on top)
      }
    });
  }, {
    threshold: 0.5
  });

  observer.observe(video);

  function toggleVolume() {
    video.muted = !video.muted;
    volBtn.innerHTML = video.muted ? "🔇" : "🔊";
  }

