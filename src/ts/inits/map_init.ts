const map_init = () => {
    const mapContainer = document.querySelector("#map");

    if (!mapContainer) return;

    import("../map/map_handle").then((module) => {
        const map_handle = module.default;

        map_handle();
    });
};

export default map_init;
