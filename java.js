document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".progress").forEach(bar => {
        setTimeout(() => {
            bar.style.width = bar.getAttribute("data-width");
        }, 500);
    });
});

document.querySelectorAll(".competence").forEach(comp => {
    comp.addEventListener("mouseover", function() {
        let bar = this.querySelector(".progress");
        bar.style.width = "0";
        setTimeout(() => {
            bar.style.width = bar.getAttribute("data-width");
        }, 100);
    });
});