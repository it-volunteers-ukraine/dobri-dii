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

document.addEventListener('DOMContentLoaded', function() {
    const selectField = document.querySelector('.field-wrapper select[name="your-reason"]');

    if (selectField) {
        const updateColor = () => {
            if (selectField.value === "") {
                selectField.classList.add('is-placeholder');
            } else {
                selectField.classList.remove('is-placeholder');
            }
        };

        updateColor();

        selectField.addEventListener('change', updateColor);
    }
});