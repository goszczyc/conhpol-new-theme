import fetch_init from "../fetch";
import L from "leaflet";
import map_handle from "./map_handle";
import updateMarkersLayer from "./updadeMarkersLayer";
import handleSearch from "./handleSearch";
import mapFiltersToggle from "./mapFiltersToggle";
import addShopsToContainer from "./addShopsToContainer";

const map_init = async () => {
    const ajaxData = new FormData();
    ajaxData.append("action", "getLocations");
    try {
        const tags = await fetch_init(ajaxData);
        const shopListContainer = document.querySelector(".map__search-shops");

        // init map
        const map = map_handle();

        // create markers layer
        const markersLayer = L.layerGroup();
        mapFiltersToggle();

        updateMarkersLayer(map, markersLayer, tags);
        handleSearch(map, markersLayer, tags, shopListContainer);

        addShopsToContainer(map, tags, shopListContainer, markersLayer);
    } catch (error) {
        console.log(error);
        return error;
    }
};

export default map_init;
