// Initialisation de la carte avec Leaflet
const map = L.map('map-container').setView([43.552847, 7.017369], 12); // Coordonnées de Cannes

// Ajouter une couche de tuiles OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Marqueur pour Cannes
L.marker([43.552847, 7.017369]).addTo(map)
    .bindPopup("<b>Nous sommes à Cannes !</b><br>Découvrez notre engagement en streaming responsable.")
    .openPopup();
