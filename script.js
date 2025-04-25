document.getElementById('registrationForm').addEventListener('submit', function(event) {
  event.preventDefault();
  alert('Form pendaftaran telah dikirim!');
  this.reset(); // Reset form setelah pengiriman
});

document.getElementById('contactForm').addEventListener('submit', function(event) {
  event.preventDefault();
  alert('Pesan Anda telah dikirim!');
  this.reset(); // Reset form setelah pengiriman
});