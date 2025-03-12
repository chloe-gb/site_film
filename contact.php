<?php require "header.php"; ?>
<main class="contact">
    <div class="container_contact">
        <h2>Contactez-nous</h2>
        <form id="contactForm" action="traitement.php" method="POST">
            <input type="text" name="nom" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
        <p id="message" style="display:none; color: green;">Message envoyé !</p>
    </div>
</main>


<?php require "footer.php"; ?>








