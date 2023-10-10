const historySlider_init = () => {
    const historySlider = document.querySelector(".history-slider");

    if (!historySlider) return;

    import("../handlers/historySlider_handler").then((module) => {
        const historySlider_handle = module.default;
        historySlider_handle();
    });
};

export default historySlider_init;
