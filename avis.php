<?php require "header.php" ?>
<main class="avis">
    <h1>Bienvenue sur la page d'avis de Aquila Streaming</h1>
    <p>Nous apprécions vos retours pour améliorer votre expérience sur notre plateforme de streaming.</p>
    <div class="container">
        <h2>Donnez votre avis</h2>
        <p>Comment trouvez-vous notre service ? Notez-le ci-dessous :</p>
        <div class="stars" id="stars">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
        </div>
        <form id="avisForm" action="avis_traitement.php" method="POST">
            <input type="hidden" name="note" id="note" value="0">
            <textarea name="avis" placeholder="Votre avis" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
        <p id="message" style="display:none; color: green;">Avis envoyé ! Merci pour votre retour.</p>
    </div>
    <h3>Avis des utilisateurs :</h3>
    <div class="container" id="avisList">
        <p>Aucun avis pour le moment. Soyez le premier à donner votre avis !</p>
    </div>
</main>
<?php require "footer.php" ?>