const $header = document.querySelector("header");
const $btn_playvideo = document.querySelector("#btn-playvideo");
const $burger_btn = document.querySelector("#burger-btn");

const onscroll = () => (window.scrollY >= 30 ? $header.classList.add("float") : $header.classList.remove("float"));
window.addEventListener("scroll", onscroll);

$btn_playvideo.onclick = () => $btn_playvideo.classList.add("pressed");

$burger_btn.onclick = () => $header.classList.toggle("menu-open");
