const stars = document.querySelectorAll('.star');
        const noteInput = document.getElementById('note');
        const avisList = document.getElementById('avisList');

        stars.forEach(star => {
            star.addEventListener('mouseover', function() {
                let value = this.getAttribute('data-value');
                highlightStars(value);
            });
            star.addEventListener('click', function() {
                let value = this.getAttribute('data-value');
                noteInput.value = value;
            });
        });

        function highlightStars(value) {
            stars.forEach(star => {
                star.classList.remove('active');
            });
            for (let i = 0; i < value; i++) {
                stars[i].classList.add('active');
            }
        }

        document.getElementById('avisForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let message = document.getElementById('message');
            message.style.display = 'block';
            setTimeout(() => { message.style.display = 'none'; }, 3000);
            
            let avisText = this.avis.value;
            let avisNote = noteInput.value;
            if (avisText) {
                let newAvis = document.createElement('p');
                newAvis.innerHTML = `<strong>Note : ${avisNote} étoiles</strong> - ${avisText}`;
                avisList.appendChild(newAvis);
            }
            this.reset();
        });