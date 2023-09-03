const bannerSlider_init = () => {
    const bannerSlider = document.querySelector(".banner");

    if (!bannerSlider) return;

    import("../handlers/bannerSlider_handler").then((module) => {
        const bannerSlider_handle = module.default;
        bannerSlider_handle();
    });
};

export default bannerSlider_init;
