jQuery(document).ready(function ($) {
  let button = $("#load-more-button");
  let page = button.data("page");
  let postsPerPage = button.data("posts-per-page");
  let loadingSpinner = $("#loading-spinner");
  let allProjectsLoaded = false;

  // Функція для показу спінера
  function showSpinner() {
    loadingSpinner.show();
    button.hide();
  }

  // Функція для приховування спінера
  function hideSpinner() {
    loadingSpinner.hide();
    if (!allProjectsLoaded) {
      button.show();
    }
  }

  // Функція для завантаження постів
  function loadPosts() {
    showSpinner();

    $.ajax({
      url: ajax_object.ajaxurl,
      type: "POST",
      data: {
        action: "load_more_projects",
        page: page,
        postsPerPage: postsPerPage,
      },
      success: function (response) {
        $("#projects-container").append(response);
        page++;
        button.data("page", page);

        $.ajax({
          url: ajax_object.ajaxurl,
          type: "POST",
          data: {
            action: "get_total_pages",
            postType: "projects",
            postsPerPage: postsPerPage,
          },
          success: function (totalPages) {
            if (page > totalPages) {
              allProjectsLoaded = true;
              button.prop("disabled", true);
            }
            hideSpinner();
          },
          error: function () {
            console.log("Помилка при отриманні total_pages.");
            button.prop("disabled", false);
            hideSpinner();
          },
        });
      },
      error: function () {
        console.log("Помилка завантаження проєктів.");
        button.prop("disabled", false);
        hideSpinner();
      },
    });
  }

  loadPosts();

  button.on("click", function () {
    loadPosts();
  });
});
