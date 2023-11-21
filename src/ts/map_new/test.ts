import fetch_init from "../fetch";
import L from "leaflet";
import map_handle from "./map_handle";
import addTagsToLayer from "./addTagsToLayer";

const getTags = async () => {
    const ajaxData = new FormData();
    ajaxData.append("action", "getLocations");
    try {
        const tags = await fetch_init(ajaxData);
        const container = document.querySelector(".map__search-shops");

        const map = map_handle();
        const markersLayer = L.layerGroup();
        addTagsToLayer(map, markersLayer, tags);


        
        // updateList(tags, container);
    } catch (error) {
        console.log(error);
        return error;
    }
};

export default getTags;
