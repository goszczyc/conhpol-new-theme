const burgerMenu_init = () => {
    const burger = document.querySelector('#burger') as HTMLButtonElement;

    if(!burger) return;

    import('../handlers/burgerMenu_handler').then(module => {
        const burgerMenu_handler = module.default;

        burgerMenu_handler(burger);
    })
}

export default burgerMenu_init;