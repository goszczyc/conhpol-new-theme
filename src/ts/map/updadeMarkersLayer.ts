import L from "leaflet";

export default (map, layer, shops) => {
    shops.forEach((shop) => {
        // Create marker icon
        let theIcon = L.icon({
            iconUrl: shop.icon,
            iconSize: [28],
            iconAnchor: [14, 28],
        });
        // Create marker and popup with shop info
        let marker = L.marker(
            [shop.coordinates.longitude, shop.coordinates.lattitude],
            { id: shop.shopId, icon: theIcon }
        ).bindPopup(
            `
			<div style="max-height: 350px; overflow-y:auto">
				<div>
				<img style="width:100%;height:auto" src="${
                    shop.thumbnail
                }" style="display:block;">
				</div>
				<div class="map__popup-name">
				<h3>${shop.name}</h3>
				<h4>${shop.type}</h4>
				</div>
				<div class="map__popup-text">
				${shop.data.address}
				</div>
				<div class="map__popup-text">
				${shop.data.phone}
				</div>
				<div class="map__popup-text">${shop.data.email}</div>
				<div class="map__popup-text map__popup-text--av">${shop.avModels.map(
                    (model) => " " + model
                )} </div>
				<div class="map__popup-text map__popup-text--gm">${shop.gMapLink}</div>
			</div>
			`,
            {
                maxWidth: 260,
            }
        );
        // Add marker to layer group
        marker.addTo(layer);
    });

    // Add layer to map
    layer.addTo(map);

    // Get bounds of layer view
    let groupBounds = L.latLngBounds();
    layer.eachLayer((lay) => {
        groupBounds.extend(lay.getLatLng());
    });

    // Adjust map view to bounds of tags layer
    map.fitBounds(groupBounds);
};
