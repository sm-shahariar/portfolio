const wrapper = document.querySelector('.profile-wrapper');
let angle = 0;

function rotateGradient() {
  angle = (angle + 1) % 360;
  wrapper.style.background = `conic-gradient(
    from ${angle}deg,
    blue 0%,
    purple 25%,
    skyblue 50%,
    blue 75%,
    purple 100%
  )`;
  requestAnimationFrame(rotateGradient);
}

rotateGradient();


const hiddenElements = document.querySelectorAll('.hidden');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show');
    }
  });
}, { threshold: 0.2 });

hiddenElements.forEach(el => observer.observe(el));
