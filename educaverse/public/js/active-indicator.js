const progressbar = document.querySelector(".progressbar");
function ScrollProgressBar() {
    const scrollTop = document.documentElement.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight;
    const clientHeight = document.documentElement.clientHeight;
    const windowHeight = scrollHeight - clientHeight;
    const porcentaje = (scrollTop / windowHeight) * 100;
    progressbar.style.width = porcentaje + "%";
}
window.addEventListener("scroll", ScrollProgressBar);
