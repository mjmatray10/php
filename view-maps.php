<?php
$pageTitle = "Dealer Locations";
?>
<body>
    <div class="content-container">
        <h1>Dealer Locations</h1>
        
        <div id="map-container" style="display: flex; flex-direction: column; align-items: center; margin-top: 20px;">
            <div id="map" style="height: 400px; width: 100%; border: 1px solid #ddd; border-radius: 8px;"></div>
        </div>
        
    </div>
    
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

        let delay = 0;

        dealers.forEach((dealer) => {
            fetch(`https://nominatim.openstreetmap.org/search?q=${dealer.location}&format=json`)
                .then(response => response.json())
                .then(data => {
                    if (data[0]) {
                        const lat = data[0].lat;
                        const lon = data[0].lon;

                        setTimeout(() => {
                            L.marker([lat, lon]).addTo(map)
                                .bindPopup(`<b>${dealer.name}</b><br>${dealer.location}`)
                                .openPopup();
                        }, delay);

                        delay += 2000;
                    }
                });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-vkFHwyxEd+fNItuOe6fEpGpdfH1A1Zgq3RRD+x4+2l6Cqf5rAxfjqPEH/hdbIWLn" crossorigin="anonymous"></script>
</body>
