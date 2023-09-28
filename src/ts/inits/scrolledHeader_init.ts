const scrolledHeader_init = () => {
    const header = document.querySelector(".header");

    if (!header) return;

    import("../handlers/scrolledHeader_handler").then((module) => {
        const scrolledHeader_handler = module.default;

        scrolledHeader_handler(header);
    });
};

export default scrolledHeader_init;
