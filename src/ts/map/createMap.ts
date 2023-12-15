import L, { marker } from "leaflet";
import "leaflet/dist/leaflet.css";
import "leaflet-gesture-handling";

export default () => {
    // showFilters();
    // mapShowSearch();
    // Add MAP
    let map = L.map("map-container", {
        scrollWheelZoom: false,
        gestureHandling: true,
        zoomControl: false,
    }).setView([50, 50], 4);
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        maxZoom: 14,
        minZoom: 1,
        attribution: "© OpenStreetMap",
    }).addTo(map);
    L.control
        .zoom({
            position: "topleft",
        })
        .addTo(map);
    map.on("popupopen", function (e) {

        // Set view and zoom on popup open
        map.setView(e.target._popup._latlng, 11, { animate: true });

        // Fix view to fit popup
        let px = map.project(e.target._popup._latlng); // find the pixel location on the map where the popup anchor is
        px.y -= e.target._popup._container.clientHeight / 2; // find the height of the popup container, divide by 2, subtract from the Y axis of marker location
        map.panTo(map.unproject(px), { animate: true }); // pan to new center
    });

    return map;
};
