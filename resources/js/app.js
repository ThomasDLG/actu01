import "./bootstrap";

import Alpine from "alpinejs";

import { toggleMenu, dropdownMenuToggle, openSearchBar } from "./functions";

window.Alpine = Alpine;

Alpine.start();

// NAVBAR
toggleMenu(
    ".user-nav-burger-open",
    ".user-nav-burger-menu",
    "show",
    "hide",
    "active",
    ".user-nav-burger-close"
);

// DROPDOWN
dropdownMenuToggle(".burger-list-item", ".burger-list-item-dropdown", "active");

// SEARCHBAR

openSearchBar(
    ".links-nav-search",
    ".user-nav-searchbar",
    "searchActive",
    ".input-form-close"
);
