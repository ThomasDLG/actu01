export const toggleMenu = (
    button,
    menu,
    showClass,
    hideClass,
    activeClass,
    close
) => {
    const burgerOpen = document.querySelector(button);
    const burgerMenu = document.querySelector(menu);
    const burgerClose = document.querySelector(close);

    if (burgerOpen && burgerMenu && burgerClose) {
        burgerOpen.addEventListener("click", () => {
            burgerMenu.classList.add(showClass);
            burgerOpen.classList.add(hideClass);
            burgerClose.classList.add(activeClass);
        });

        burgerClose.addEventListener("click", () => {
            burgerMenu.classList.remove(showClass);
            burgerClose.classList.remove(activeClass);
            burgerOpen.classList.remove(hideClass);
        });
    }
};

export const dropdownMenuToggle = (button, menu, activeClass) => {
    const dropdownToggle = document.querySelectorAll(button)[4];
    const dropdownMenu = document.querySelector(menu);

    // if (dropdownToggle && dropdownMenu) {
    dropdownToggle.addEventListener("click", () => {
        console.log("click");
        dropdownMenu.classList.toggle(activeClass);
    });
    // }
};

export const openSearchBar = (button, searchbar, activeClass, close) => {
    const searchbarToggle = document.querySelector(button);
    const searchbarBlock = document.querySelector(searchbar);
    const searchbarClose = document.querySelector(close);

    // if (dropdownToggle && dropdownMenu) {
    searchbarToggle.addEventListener("click", () => {
        console.log("click");
        searchbarBlock.classList.add(activeClass);
    });
    searchbarClose.addEventListener("click", () => {
        searchbarBlock.classList.remove(activeClass);
    });
    // }
};
