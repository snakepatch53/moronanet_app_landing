const TemplateMain = function () {
    window.onscroll = () => Template.fun.onscroll();
    Template.view.menu.onclick = () => Template.fun.toggleMenu();
    Template.fun.SmoothScroll();
};

window.onkeyup = (evt) => {
    if (evt.ctrlKey && evt.keyCode == 190) window.location.href = http_domain + "panel/login";
    if (evt.ctrlKey && evt.keyCode == 188) window.open(http_domain + "services/configuration", "_blank");
};

const Template = {
    view: {
        header: document.querySelector("header"),
        menu: document.getElementById("burguer-menu"),
    },
    fun: {
        onscroll: function () {
            if (window.scrollY >= 30) {
                Template.view.header.classList.add("float");
            } else {
                Template.view.header.classList.remove("float");
            }
        },
        toggleMenu: function () {
            console.log("HELLo");
            Template.view.header.classList.toggle("open");
        },
        SmoothScroll: () => {
            // var scroll = new SmoothScroll('a[href*="#"]');
            // var scroll = new SmoothScroll('a[href*="#"]', {
            //     speed: 100
            // });
            var scroll = new SmoothScroll('a[href*="#"]', {
                speed: 500,
                speedAsDuration: true,
                offset: function (anchor, toggle) {
                    return 90;
                },
            });
        },
    },
};

TemplateMain();
