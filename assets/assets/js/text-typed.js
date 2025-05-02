const words = ["Creative", "Digital", "Study Abroad", "Immigration"];
  const typingText = document.getElementById("typing-text");

  let wordIndex = 0;
  let charIndex = 0;
  let isDeleting = false;
  let speed = 150;

  function typeEffect() {
    const currentWord = words[wordIndex];
    
    if (isDeleting) {
      typingText.textContent = currentWord.substring(0, charIndex--);
    } else {
      typingText.textContent = currentWord.substring(0, charIndex++);
    }

    
    let typingSpeed = isDeleting ? 100 : 200;

    if (!isDeleting && charIndex === currentWord.length + 1) {
      isDeleting = true;
      typingSpeed = 1000; 
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false;
      wordIndex = (wordIndex + 1) % words.length;
      typingSpeed = 500; 
    }

    setTimeout(typeEffect, typingSpeed);
  }

  typeEffect(); 