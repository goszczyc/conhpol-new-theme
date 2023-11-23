const handleListeners = (map, layer) => {
    const shops = document.querySelectorAll(".map__search-shop-name");

    if (shops.length === 0) return;

    shops.forEach((shop) => {
        shop.addEventListener("click", (e) => {
            const cTarget = e.currentTarget as HTMLElement;
            const shopId = parseInt(cTarget.dataset.shopId);

            const matchingMarker = layer
                .getLayers()
                .find((marker) => marker.options.id === shopId);

            map.setView(matchingMarker.getLatLng(), map.getZoom());
            matchingMarker.openPopup();
        });
    });
};

export default handleListeners;
