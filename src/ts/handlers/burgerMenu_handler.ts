const burgerMenuHandler = (burger: HTMLButtonElement) => {
    const menu = document.querySelector("#menu") as HTMLElement;
    const body = document.querySelector("body");
    let isMenuShown = false;

    if (!menu) return;

    burger.addEventListener("click", (e) => {
        e.preventDefault();
        changeMenuDisplay(menu);
        isMenuShown = !isMenuShown;

        blockScroll(body, isMenuShown);

        burger.classList.toggle("burger--active");
    });

    function changeMenuDisplay(menu: HTMLElement) {
        if (menu.style.display === "flex") {
            menu.style.display = "none";
            return false;
        }
        menu.style.display = "flex";
        return;
    }

    function blockScroll(body, isMenuShown) {
        if (isMenuShown) {
            body.style.height = "100vh";
            body.style.overflow = "hidden";
            return;
        }
        body.style.height = "unset";
        body.style.overflow = "unset";
    }
};

export default burgerMenuHandler;
