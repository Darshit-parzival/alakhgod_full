    document.addEventListener("DOMContentLoaded", function () {
        var navLinks = document.querySelectorAll(".navbar-nav .nav-link");
        var navbarCollapse = document.querySelector(".navbar-collapse");

        navLinks.forEach(function (link) {
            link.addEventListener("click", function () {
                if (navbarCollapse.classList.contains("show")) {
                    var bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });
    });