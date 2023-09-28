const scrolledHeader_handler = (header) => {
    window.addEventListener("scroll", (e) => {
        if (window.scrollY > 117) {
            header.classList.add("header--scrolled");
        } else {
            header.classList.remove("header--scrolled");
        }
    });
};

export default scrolledHeader_handler;
