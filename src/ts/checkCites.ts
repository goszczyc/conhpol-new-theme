import fetch_init from "./fetch";

const sendCites = () => {
    // get form element
    const form = document.querySelector(".cites__form");
    if (!form) return;
    const container = document.querySelector(".cites__message-container");
    const citesSection = document.querySelector(".cites") as HTMLElement;
    const header = document.querySelector(".header") as HTMLElement;

    citesSection.style.minHeight = `calc(100vh - ${header.offsetHeight}px)`;

    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        container.innerHTML = "";
        // get entered code
        const input = document.querySelector("#input") as HTMLInputElement;

        // AJAX function

        const data = new FormData();

        data.append("action", "citesCheck");
        data.append("serialNumber", input.value);

        const res = await fetch_init(data);
        if (res.success) {
            // create Download PDF button
            const link = document.createElement("A");
            link.setAttribute("href", res.url);
            link.setAttribute("class", "cites__btn");
            link.setAttribute("download", "Certyfiakt Cites");
            link.setAttribute("target", "_blank");
            link.innerText = res.message;
            container.appendChild(link);
        } else {
            //  create error message
            const message = document.createElement("P");
            message.setAttribute("class", "cites__message");
            message.innerText = res.message;
            container.appendChild(message);
        }
    });
};

export default sendCites;
