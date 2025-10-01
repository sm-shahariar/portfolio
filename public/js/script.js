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

// Amination in letter

const element = document.querySelector("#job_title");
const words = ["Jr. PHP & Laravel Developer"];
let charIndex = 0;
let wordIndex = 0;
let forward = true;

function type(){

  let currentWord = words[wordIndex];

    if(forward){
      if(charIndex < currentWord.length){
        element.textContent += currentWord.charAt(charIndex);
        charIndex++;
        setTimeout(type, 100); // Adjust the speed of the typing effect
      }else{
        forward = false;
        setTimeout(type, 2000); // Pause before starting to delete
      }
    }else{
      if(charIndex > 0){
        element.textContent = currentWord.substring(0, charIndex - 1);
        charIndex--;
        setTimeout(type, 50); // Adjust the speed of the deleting effect
      }else{
        forward = true;
        setTimeout(type, 500); // Pause before starting to type the next word
      }
    }
}

type();