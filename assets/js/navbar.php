<script>
    <?php if ($trans == 0) { ?>
        $(document).ready(function() {
            $("nav").css("background-color", "white");
        })
    <?php } ?>
    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $("nav").css("height", "50px");
            $(".navbar-brand-img").css("width", "30px");
            $(".nav-fill").css("height", "40px");
            <?php if ($trans == 1) { ?>
                $("nav").css("background-color", "white");
                $(".nav-link").removeClass("nav-link-trans");
                $(".active").children("a").removeClass("a-trans");
            <?php } ?>
        }
        if ($(window).scrollTop() < 2) {
            $("nav").css("height", "90px");
            $(".navbar-brand-img").css("width", "45px");
            $(".nav-fill").css("height", "0px");
            <?php if ($trans == 1) { ?>
                $("nav").css("background-color", "transparent");
                $(".nav-link").addClass("nav-link-trans");
                $(".active").children("a").addClass("a-trans");
            <?php } ?>
        }
    });
</script>