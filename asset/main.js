var heroSection = document.getElementById('hero-section');

heroSection.addEventListener('mouseenter', function() {
  var image = document.getElementById('item-right-hero');
  image.style.display = 'block';
});

heroSection.addEventListener('mouseleave', function() {
  var image = document.getElementById('item-right-hero');
  image.style.display = 'none';
});
