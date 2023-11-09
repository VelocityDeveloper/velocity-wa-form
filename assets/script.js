(function ($) {
  $(document).ready(function () {
    $(".needs-validation").on("input", "#name, #whatsapp", function () {
      var name = $("#name").val();
      var whatsapp = $("#whatsapp").val();

      if (name.trim() !== "" && whatsapp.trim() !== "") {
        $(".hide-wa-btn").removeClass("disabled");
      } else {
        $(".hide-wa-btn").addClass("disabled");
      }
    });
  });
})(jQuery);
