document.addEventListener("DOMContentLoaded", function () {
    
    const fireBtn = document.querySelector(".fire-btn");
    
    fireBtn.addEventListener("click", () => {
        confetti({
            particleCount: 300,
            spread: 90,
            origin: { x: 1, y: 0.9 },
        });

        confetti({
            particleCount: 300,
            spread: 90,
            origin: { x: 0, y: 0.9 },
        });
    });
});