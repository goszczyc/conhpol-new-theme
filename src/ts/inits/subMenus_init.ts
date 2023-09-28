const subMenus_init = () => {
    const subMenus = document.querySelectorAll(".sub-menu");

    if (!subMenus) return;

    import("../handlers/subMenus_handler").then((module) => {
        const subMenus_handler = module.default;

        subMenus_handler();
    });
};

export default subMenus_init;
