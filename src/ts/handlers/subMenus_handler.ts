const subMenus_handler = () => {
    const parents = document.querySelectorAll(".has-sub");
    const burger = document.querySelector("#burger");

    // handle opening sub-menu
    parents.forEach((parent) => {
        parent.addEventListener("click", (e) => {
            e.preventDefault();

            const currentItem = e.currentTarget as HTMLAnchorElement;

            const sub = currentItem.nextElementSibling;

            sub.classList.add("sub-menu--active");
            sub.setAttribute("aria-hidden", "false");
            burger.classList.add("hidden");
        });
    });

    // handle closing sub-menu

    const closeButtons = document.querySelectorAll(".sub-close");

    closeButtons.forEach((closeBtn) => {
        closeBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const currentItem = e.currentTarget as HTMLButtonElement;
            const parent = currentItem.closest(".sub-menu");

            parent.classList.remove("sub-menu--active");
            parent.setAttribute("aria-hidden", "true");
            burger.classList.remove("hidden");
        });
    });
};

export default subMenus_handler;
