// Mobile menu

const menuBtnRef = document.querySelector("[data-menu-button]");
const mobileMenuRef = document.querySelector("[data-menu]");

const expanded = menuBtnRef.getAttribute("aria-expanded") === "true" || false;

const onToggleMenu = () => {
  document.body.classList.toggle("is-open");
  menuBtnRef.classList.toggle("is-open");
  mobileMenuRef.classList.toggle("is-open");
};

const onButtonClick = () => {
  menuBtnRef.setAttribute("aria-expanded", !expanded);
  onToggleMenu();
};

const onMenuClick = () => {
  menuBtnRef.setAttribute("aria-expanded", expanded);
  onToggleMenu();
};

menuBtnRef.addEventListener("click", onButtonClick);
mobileMenuRef.addEventListener("click", onMenuClick);
