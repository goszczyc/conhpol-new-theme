const checkInput_handler = (inputs) => {
    inputs.forEach((input) => {
        input.addEventListener("change", (e) => {
            const currentInput = e.currentTarget as HTMLInputElement;

            currentInput.dataset.isFilled =
                currentInput.value === "" ? "false" : "true";
        });
    });

    const form = document.querySelector("#contact-form form");

    form.addEventListener("wpcf7mailsent", (e) => {
        inputs.forEach((input) => {
            input.dataset.isFilled = "false";
        });
    });
};

export default checkInput_handler;
