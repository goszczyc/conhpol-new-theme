const checkInput_init = () => {
    const inputs = document.querySelectorAll(".contact-form__input");

    if (inputs.length === 0) return;

    import("../handlers/checkInput_handler").then((module) => {
        const checkInput_handler = module.default;

        checkInput_handler(inputs);
    });
};

export default checkInput_init;
