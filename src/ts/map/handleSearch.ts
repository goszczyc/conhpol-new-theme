import addShopsToContainer from "./addShopsToContainer";
import updateMarkerssLayer from "./updadeMarkersLayer";

const handleSearch = (map, layer, shops) => {
    // Get search form and listem for submit
    const searchForm = document.querySelector("#map-search") as HTMLFormElement;
    searchForm.addEventListener("submit", (e) => {
        e.preventDefault();

        // clear all markers from layer
        layer.clearLayers();

        let filterValues = [];

        // get all checked filters rrom checkbox fieldset
        const checkedFilters = searchForm.querySelectorAll(
            'input[type="checkbox"]:checked'
        ) as NodeListOf<HTMLInputElement>;

        // get select element
        const selectInput = searchForm.querySelector(
            "#region"
        ) as HTMLInputElement;

        // get all checked filters values
        checkedFilters.forEach((checkedFilter) => {
            filterValues.push(checkedFilter.value);
        });

        // get selected value
        let selectedCountry = selectInput.value;

        // filter shops

        console.log(filterValues);
        console.log(selectedCountry);
        shops.forEach((shop) => {
            console.log(shop);
        });
        const newShops = shops.filter((shop) => {
            if (
                filterValues.every((filter) =>
                    shop.avModels.includes(filter)
                ) &&
                selectedCountry === "all"
            ) {
                return shop;
            }

            if (
                filterValues.every((filter) =>
                    shop.avModels.includes(filter)
                ) &&
                selectedCountry === shop.country.toLowerCase()
            ) {
                return shop;
            }
        });

        // Display fetched shops on a sidebar
        addShopsToContainer(map, layer, newShops);

        // Display fetched shops on map
        updateMarkerssLayer(map, layer, newShops);
    });
};

export default handleSearch;
