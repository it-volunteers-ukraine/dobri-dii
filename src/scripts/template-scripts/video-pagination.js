jQuery(document).ready(function ($) {
  var videoListContainer = $("#video-list-container");
  var paginationContainer = $(".video-pagination");

  $(document).on("click", ".pagination-button", function (e) {
    e.preventDefault();

    var clickedButton = $(this);
    var page = clickedButton.data("page");
    var postId = videoPaginationAjax.post_id;
    var nonce = videoPaginationAjax.nonce;

    // Add a loading class or spinner
    videoListContainer.addClass("loading-content");
    paginationContainer.addClass("loading-pagination");
    clickedButton.prop("disabled", true);

    $.ajax({
      url: videoPaginationAjax.ajax_url,
      type: "POST",
      data: {
        action: "load_more_videos",
        page: page,
        post_id: postId,
        security: nonce,
      },
      success: function (response) {
        if (response.success) {
          videoListContainer.html(response.data.html); // Replace list content
          paginationContainer.html(response.data.pagination); // Replace pagination controls

          // --- Scroll to top with 150px offset ---
          var offset = videoListContainer.offset().top;
          var scrollOffset = offset - 150; // Subtract 150px from the target

          // Ensure we don't scroll past the very top of the document (0)
          if (scrollOffset < 0) {
            scrollOffset = 0;
          }

          $("html, body").animate(
            {
              scrollTop: scrollOffset,
            },
            500
          ); // 500ms for a smooth scroll animation
          // --- End of scroll to top ---

          // Re-initialize any fancybox or other scripts for new content
          if (typeof Fancybox !== "undefined") {
            Fancybox.bind('[data-fancybox="videos"]');
          } else if (typeof $().fancybox === "function") {
            $('[data-fancybox="videos"]').fancybox();
          }
        } else {
          console.error("AJAX Error:", response.data);
          videoListContainer.html(
            "<p>Error loading videos. Please try again.</p>"
          );
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("AJAX request failed:", textStatus, errorThrown);
        videoListContainer.html("<p>Network error. Please try again.</p>");
      },
      complete: function () {
        videoListContainer.removeClass("loading-content");
        paginationContainer.removeClass("loading-pagination");
      },
    });
  });
});
