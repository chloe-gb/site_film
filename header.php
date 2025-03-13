<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./apropos.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="actualite.css">
    <link rel="stylesheet" href="avis.css" />
    <link rel="stylesheet" href="filmographie.css">
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="contact.css" />
    <script src="contact.js" defer></script>
    <script src="avis.js" defer></script>
    <!-- Leaflet.js pour la carte -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Lien vers le script JS (important pour la gestion de la carte) -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="scriptapropos.js" defer></script>
    <title>Document</title>
</head>

<body>
    <header>
        <div>
            <input id="test" type="checkbox" />
            <label for="test">
                <svg class="burger" width="86" height="60" viewbox="0 0 150 150">
                    <g stroke-width="12">
                        <line x1="6" y1="6" x2="80" y2="6"></line>
                        <line x1="6" y1="28" x2="80" y2="28"></line>
                        <line x1="6" y1="50" x2="80" y2="50"> </line>
                    </g>
                </svg>
            
            </label>

            <div class="menu">
            <svg class="close" width="86" height="60" viewbox="0 0 150 150">
                    <g stroke-width="12">
                        <line x1="42" y1="6" x2="42" y2="80"></line>
                        <line x1="6" y1="42" x2="80" y2="42"></line>
                    </g>
                </svg>
                <h1 class="titre">Aquila</h1>
                <hr style="width:100vw;">
                </hr>

                <div><a class="a" href="accueil.php">Home</a></div>

                <a class="a" href="filmographie.php">
                    <div>Filmographie</div>
                </a>
                <a class="a" href="actualite.php">
                    <div>Actualités</div>
                </a>
                <a class="a" href="apropos.php">
                    <div>A propos</div>
                </a>
                <a class="a" href="avis.php">
                    <div>Avis</div>
                </a>
                <a class="a" href="contact.php">
                    <div>Contact</div>
                </a>
            </div>
        </div>
        <h1 class="page">Aquila</h1>
        <img class="logo" src="./logo.png" alt="logo">
    </header>
    <hr style="width:100vw;">
    </hr>