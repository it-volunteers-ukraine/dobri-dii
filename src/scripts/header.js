// Mobile menu

const menuBtnRef = document.querySelector("[data-menu-button]");
const mobileMenuRef = document.querySelector("[data-menu]");

const onToggleMenu = () => {
  const expanded = menuBtnRef.getAttribute("aria-expanded") === "true" || false;

  document.body.classList.toggle("is-open");
  menuBtnRef.classList.toggle("is-open");
  mobileMenuRef.classList.toggle("is-open");
  menuBtnRef.setAttribute("aria-expanded", String(!expanded));
};

menuBtnRef.addEventListener("click", onToggleMenu);
mobileMenuRef.addEventListener("click", onToggleMenu);
