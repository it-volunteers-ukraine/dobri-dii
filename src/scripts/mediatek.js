document.addEventListener("DOMContentLoaded", () => {
  const allGalleries = document.querySelectorAll(".photogallery");
  allGalleries.forEach((gallery) => {
    const listItem = gallery.closest(".gallery-list-item");
    if (!listItem) return;
    const btn = listItem.querySelector(".load-all");
    if (!gallery || !btn || gallery.dataset.toggleInited === "1") {
      return;
    }
    gallery.dataset.toggleInited = "1";
    const VISIBLE_ITEMS = 6;
    let expanded = false;
    const items = [...gallery.querySelectorAll(".photogallery-item")];
    let extras = [];
    if (items.length > VISIBLE_ITEMS) {
      extras = items.slice(VISIBLE_ITEMS);
      extras.forEach((el) => el.remove());
    } else {
      btn.style.display = "none";
    }
    setBtnText(btn, expanded, btn.dataset.more, btn.dataset.less);
    const msnry = new Masonry(gallery, {
      columnWidth: ".photogallery-sizer",
      itemSelector: ".photogallery-item",
      gutter: 12,
      fitWidth: true,
    });
    imagesLoaded(gallery, () => {
      msnry.layout();
    });
    btn.addEventListener("click", (e) => {
      if (!extras.length) return;
      if (!expanded) {
        extras.forEach((el) => gallery.appendChild(el));
        msnry.appended(extras);
        imagesLoaded(extras, () => {
          msnry.layout();
        });
        expanded = true;
      } else {
        document.body.style.overflow = "hidden";

        msnry.remove(extras);
        msnry.layout();
        gallery.scrollIntoView({ behavior: "smooth", block: "start" });

        setTimeout(() => {
          document.body.style.overflow = "";
        }, 300);

        expanded = false;
      }
      setBtnText(btn, expanded, btn.dataset.more, btn.dataset.less);
    });
  });
  /**
   * Helper function to set the button text.
   * @param {HTMLElement} buttonElement The button to update.
   * @param {boolean} isExpanded Current state of the gallery.
   * @param {string} moreText Text for 'show more'.
   * @param {string} lessText Text for 'show less'.
   */
  function setBtnText(buttonElement, isExpanded, moreText, lessText) {
    buttonElement.textContent = isExpanded ? lessText : moreText;
  }
});
