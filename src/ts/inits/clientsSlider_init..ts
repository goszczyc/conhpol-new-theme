const clientsSldier_init = () => {
    const clientsSldier = document.querySelector(".clients-slider");

    if (!clientsSldier) return;

    import("../handlers/clientsSlider_handler").then((module) => {
        const clientsSldier_handle = module.default;
        clientsSldier_handle();
    });
};

export default clientsSldier_init;
