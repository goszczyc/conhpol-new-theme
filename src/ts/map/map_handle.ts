import fetch_init from "../fetch";
import L from "leaflet";
import createMap from "./createMap";
import updateMarkersLayer from "./updadeMarkersLayer";
import handleSearch from "./handleSearch";
import handleFiltersDisplay from "./handleFiltersDisplay";
import addShopsToContainer from "./addShopsToContainer";
import showSearchMobile from "./showSearchMobile";

const map_init = async () => {
    const ajaxData = new FormData();
    ajaxData.append("action", "getLocations");
    try {
        // Fetch shops data
        const shops = await fetch_init(ajaxData);

        // create map to a container
        const map = createMap();

        // create markers layer
        const markersLayer = L.layerGroup();

        // handle filters fieldset displaying/hiding
        handleFiltersDisplay();

        // handle displaying / hiding search menu on mobile
        showSearchMobile();

        // Display fetched shops on a sidebar
        addShopsToContainer(map, markersLayer, shops);

        // Display fetched shops on map
        updateMarkersLayer(map, markersLayer, shops);

        // Watch search/filtrer form for submit and process it
        handleSearch(map, markersLayer, shops);
    } catch (error) {
        console.log(error);
        return error;
    }
};

export default map_init;
