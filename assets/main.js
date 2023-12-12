// JavaScript to handle video transitioning
const videos = document.querySelectorAll('#videoContainer video');
let currentVideo = 0;

// Function to change videos
function changeVideo() {
  videos[currentVideo].classList.remove('active');
  currentVideo = (currentVideo + 1) % videos.length;
  videos[currentVideo].classList.add('active');
}

// Start the video change interval
let videoChangeInterval = setInterval(changeVideo, 10000);

// Function to add animation class
const addAnimation = (entries) => {
  entries.forEach(entry => {
    entry.target.classList.toggle('slide-in', entry.isIntersecting);
  });
};

// Create the observer instance with options
const observerOptions = {
  threshold: 0.3 // Adjust to determine when the animation should start
};
const observer = new IntersectionObserver(addAnimation, observerOptions);

// Function to initialize testimonials
function initTestimonials() {
  const testimonials = document.querySelectorAll('.testimonial');

  function showRandomTestimonials() {
    // Hide all testimonials
    testimonials.forEach(testimonial => {
      testimonial.classList.remove('visible');
    });

    // Determine how many testimonials to show 
    const numberOfTestimonialsToShow = 2 + Math.floor(Math.random() * 2);

    // Create an array to track which testimonials are visible
    let visibleTestimonials = [];

    while (visibleTestimonials.length < numberOfTestimonialsToShow) {
      // Get a random index
      const randomIndex = Math.floor(Math.random() * testimonials.length);
      // Check if the index is already used
      if (!visibleTestimonials.includes(randomIndex)) {
        visibleTestimonials.push(randomIndex);
        // Add the 'visible' class to the random testimonial
        testimonials[randomIndex].classList.add('visible');
      }
    }
  }

  // Show the first set of random testimonials
  showRandomTestimonials();

  // Change testimonials 
  setInterval(showRandomTestimonials, 7000);
}

// Observe elements and initialize testimonials on DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
  const elementsToObserve = document.querySelectorAll('.card, .highlight-item, #jewelryCarousel .carousel-caption, .col-lg-6 h2, .col-lg-6 p');
  elementsToObserve.forEach(el => observer.observe(el));

  // Flip card interaction
  document.querySelectorAll('.flip-card').forEach(card => {
    card.addEventListener('click', () => card.classList.toggle('flipped'));
  });

  // Initialize testimonials display
  initTestimonials();
});
