function tampil() {
    $(document).ready(function () {
        $("#card").on({
            mouseenter: function () {
                $("#dro-seller").slideDown("fast");
            },
            mouseleave: function () {
                $(".dro-seller").css("display", "none");
                $("#dro-seller").slideUp("fast");
            }
        });
    });
}
