async function fetchWaypoints() {
  try {
    const response = await fetch(urlAPI); // Replace with your route
    const data = await response.json();
    return data;
  } catch (error) {
    console.error("Error fetching waypoints:", error);
    return []; // Return an empty array in case of error
  }
}

export async function initializeMap(employeeId) {
  const waypoints = await fetchWaypoints(employeeId);

  const validWaypoints = waypoints
    .filter(point => point && point.coords && point.coords.lat && point.coords.lng)
    .map(point => ({
      coords: L.latLng(point.coords.lat, point.coords.lng),
      name: point.type
    }));


  const map = L.map('map').setView([3.591516, 98.6690], 13);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  const customIcon = L.icon({
    iconUrl: "/assets/img/marker.png",
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    shadowUrl: "/assets/img/marker-shadow.png",
    shadowSize: [41, 41]
  });

  if (validWaypoints.length > 0) {
    const bounds = L.latLngBounds(validWaypoints.map(point => point.coords));
    map.fitBounds(bounds);

    validWaypoints.forEach(point => {
      L.marker(point.coords, { icon: customIcon })
        .addTo(map)
        .bindPopup(`<b>${point.name}</b>`);
    });

    if (validWaypoints.length > 1) {
      L.Routing.control({
        waypoints: validWaypoints.map(point => point.coords),
        routeWhileDragging: false,
        createMarker: (i, waypoint) => L.marker(waypoint.latLng, {
          icon: customIcon,
          draggable: false
        }).bindPopup(`<b>${validWaypoints[i].name}</b>`),
        router: L.Routing.osrmv1({
          serviceUrl: 'https://router.project-osrm.org/route/v1/'
        }),
        show: false
      }).addTo(map);
    }
  } else {
    console.log("No valid waypoints found.");
  }
}