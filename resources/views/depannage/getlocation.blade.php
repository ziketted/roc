<!DOCTYPE html>
<html>
<head>
    <title>User Location</title>
</head>
<body>
    <button onclick="getUserLocation()">Get My Location</button>

    <p id="location"></p>
    <script>
        function getUserLocation() {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;

                    // Send the latitude and longitude to your Laravel backend via AJAX
                    fetch('/save-user-location', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token if needed
                        },
                        body: JSON.stringify({ latitude: latitude, longitude: longitude }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        // You can handle the response data here if needed
                    })

                });
            } else {
                console.error('Geolocation is not available in your browser.');
            }
        }
    </script>

    <script>
        getUserLocation();
    </script>
</body>
</html>
