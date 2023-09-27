const animateItemsIn_handler = (items: NodeListOf<HTMLElement>) => {
    const options = {
        threshhold: 0.2,
        rootMargin: "0px",
    };

    const observer = new IntersectionObserver(itemsRemoveClass, options);

    function itemsRemoveClass(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("faded-out");
                observer.unobserve(entry.target);
            }
        });
    }

    items.forEach((item) => {
        observer.observe(item);
    });
};

export default animateItemsIn_handler;
