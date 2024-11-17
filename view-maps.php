<h1>Dealer Locations</h1>

<div id="map" style="height: 400px;"></div>

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
const map = L.map('map').setView([37.8, -96], 4);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

const dealers = [
<?php
while ($location = $locations->fetch_assoc()) {
    echo "{ name: '" . $location['dealer_name'] . "', location: '" . $location['dealer_location'] . "' },";
}
?>
];

dealers.forEach(dealer => {
    fetch(`https://nominatim.openstreetmap.org/search?q=${dealer.location}&format=json`)
    .then(response => response.json())
    .then(data => {
        if (data[0]) {
            const lat = data[0].lat;
            const lon = data[0].lon;
            L.marker([lat, lon]).addTo(map)
                .bindPopup(`<b>${dealer.name}</b><br>${dealer.location}`)
                .openPopup();
        }
    });
});
</script>
