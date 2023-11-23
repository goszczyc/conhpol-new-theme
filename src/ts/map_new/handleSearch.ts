import addShopsToContainer from "./addShopsToContainer";
import updateMarkerssLayer from "./updadeMarkersLayer";

const handleSearch = (map, layer, tags, container) => {
    const searchForm = document.querySelector("#map-search") as HTMLFormElement;
    searchForm.addEventListener("submit", (e) => {
        e.preventDefault();
        layer.clearLayers();

        let filterValues = [];

        const checkedFilters = searchForm.querySelectorAll(
            'input[type="checkbox"]:checked'
        ) as NodeListOf<HTMLInputElement>;

        const selectInput = searchForm.querySelector(
            "#region"
        ) as HTMLInputElement;

        checkedFilters.forEach((checkedFilter) => {
            filterValues.push(checkedFilter.value);
        });

        let selectedCountry = selectInput.value;

        const newTags = tags.filter((tag) => {
            if (
                filterValues.every((filter) => tag.avModels.includes(filter)) &&
                selectedCountry === "all"
            ) {
                return tag;
            }

            if (
                filterValues.every((filter) => tag.avModels.includes(filter)) &&
                selectedCountry === tag.country.toLowerCase()
            ) {
                return tag;
            }
        });
        updateMarkerssLayer(map, layer, newTags);
        addShopsToContainer(map, newTags, container, layer);
    });
};

export default handleSearch;
