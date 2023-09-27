const animateItemsIn_init = () => {
    const items = document.querySelectorAll(
        ".decor"
    ) as NodeListOf<HTMLElement>;

    if (items.length === 0) return;

    console.log(items);

    import("../handlers/animateItemsIn_handler").then((module) => {
        const animateItemsIn_handler = module.default;

        animateItemsIn_handler(items);
    });
};

export default animateItemsIn_init;
