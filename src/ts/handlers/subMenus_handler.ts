const subMenus_handler = () => {
    const parents = document.querySelectorAll(".has-sub");
    const burger = document.querySelector("#burger");

    document.addEventListener("click", (e) => {
        const activeSubMenu = document.querySelector(".sub-menu--active");
        const menuItems = Array.from(parents);
        const eTarget = e.target as HTMLElement;

        if (!activeSubMenu) return;

        if (e.target != activeSubMenu && !menuItems.includes(eTarget)) {
            activeSubMenu.classList.remove("sub-menu--active");
        }
    });

    // handle opening sub-menu
    parents.forEach((parent) => {
        parent.addEventListener("click", (e) => {
            e.preventDefault();

            const currentItem = e.currentTarget as HTMLAnchorElement;

            const sub = currentItem.nextElementSibling;

            const activeSubMenu = document.querySelector(".sub-menu--active");
            if (activeSubMenu && sub !== activeSubMenu) activeSubMenu.classList.remove("sub-menu--active");
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
