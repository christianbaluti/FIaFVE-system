<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Map</title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
    <div id="mapDiv" style="width: 100%; height: 500px;"></div>

    <script type="text/javascript">
        // Fetch the JSON data from the PHP endpoint
        fetch('data.json')
        .then(response => response.json())
        .then(jsonData => {
            // Since the jsonData is not an array, transform it into an array of objects
            const dataPoints = Object.keys(jsonData.X).map(index => ({
                longitude: jsonData.X[index],
                latitude: jsonData.Y[index]
            }));

            // Extract the latitude and longitude data
            var lats = dataPoints.map(function(d) { return d.latitude; });
            var lons = dataPoints.map(function(d) { return d.longitude; });

            // Create the data object for Plotly
            var data = [{
                type: 'scattergeo',
                locationmode: 'country names',
                lat: lats,
                lon: lons,
                hoverinfo: 'lat+lon+text',
                text: lats.map((lat, idx) => `Lat: ${lat}, Lon: ${lons[idx]}`),
                mode: 'markers',
                marker: {
                    size: 8,
                    color: 'blue',
                    line: {
                        color: 'black',
                        width: 1
                    },
                }
            }];

            // Define the layout for the map
            var layout = {
                title: 'Interactive Map of Malawi',
                geo: {
                    scope: 'africa',
                    showland: true,
                    landcolor: 'rgb(243,243,243)',
                    countrycolor: 'rgb(204,204,204)',
                    center: {
                        lat: -13.2543,  // Latitude for Malawi
                        lon: 34.3015   // Longitude for Malawi
                    },
                    lataxis: {
                        range: [-17, -9]  // Latitude range to cover Malawi
                    },
                    lonaxis: {
                        range: [32, 36]   // Longitude range to cover Malawi
                    }
                },
                showlegend: false
            };


            // Plot the map
            Plotly.newPlot('mapDiv', data, layout);
        })
        .catch(error => {
            console.error('Error loading JSON data:', error);
        });
    </script>
</body>
</html>
