// Smooth scroll to section
function scrollToSection(sectionId) {
  const element = document.getElementById(sectionId);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' });
    // Close mobile menu if open
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
      mobileMenu.classList.add('hidden');
      menuIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
    }
  }
}

// Toggle mobile menu
function toggleMobileMenu() {
  const mobileMenu = document.getElementById('mobileMenu');
  const menuIcon = document.getElementById('menuIcon');
  const closeIcon = document.getElementById('closeIcon');
  
  if (mobileMenu.classList.contains('hidden')) {
    mobileMenu.classList.remove('hidden');
    menuIcon.classList.add('hidden');
    closeIcon.classList.remove('hidden');
  } else {
    mobileMenu.classList.add('hidden');
    menuIcon.classList.remove('hidden');
    closeIcon.classList.add('hidden');
  }
}

// Portfolio filter
function filterPortfolio(category) {
  const items = document.querySelectorAll('.portfolio-item');
  const filters = document.querySelectorAll('.portfolio-filter');
  
  // Update active filter button
  filters.forEach(filter => {
    if (filter.textContent === category) {
      filter.classList.add('active');
      filter.classList.remove('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
      filter.classList.add('bg-emerald-600', 'text-white');
    } else {
      filter.classList.remove('active');
      filter.classList.remove('bg-emerald-600', 'text-white');
      filter.classList.add('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
    }
  });
  
  // Filter items
  items.forEach(item => {
    const itemCategory = item.getAttribute('data-category');
    if (category === '全て' || itemCategory === category) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}

// Contact form submission
document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contactForm');
  
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Show success message
      alert('お問い合わせありがとうございます。2営業日以内に担当者よりご連絡させていただきます。');
      
      // Reset form
      contactForm.reset();
    });
  }
});
