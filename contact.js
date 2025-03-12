document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    let message = document.getElementById('message');
    message.style.display = 'block';
    setTimeout(() => { message.style.display = 'none'; }, 3000);
    this.reset();
});