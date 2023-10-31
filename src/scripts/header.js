// Mobile menu

const menuBtnRef = document.querySelector("[data-menu-button]");
const mobileMenuRef = document.querySelector("[data-menu]");

const expanded = menuBtnRef.getAttribute("aria-expanded") === "true" || false;

const onButtonClick = () => {
  menuBtnRef.classList.toggle("is-open");
  menuBtnRef.setAttribute("aria-expanded", !expanded);
  mobileMenuRef.classList.toggle("is-open");
};

const onMenuClick = () => {
  mobileMenuRef.classList.toggle("is-open");
  menuBtnRef.setAttribute("aria-expanded", expanded);
  menuBtnRef.classList.toggle("is-open");
};

menuBtnRef.addEventListener("click", onButtonClick);
mobileMenuRef.addEventListener("click", onMenuClick);
