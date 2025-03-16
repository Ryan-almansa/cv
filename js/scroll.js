document.addEventListener("DOMContentLoaded", function () {
    const experienceSection = document.querySelector("#experience");
    
    window.addEventListener("scroll", function () {
        let scrollPosition = window.scrollY;
        let offset = (scrollPosition * 0.05); 

        experienceSection.style.backgroundPosition = `${50 + offset}% center`; 
    });

    const skills = document.querySelectorAll(".competence .progress");

    function revealSkills() {
        skills.forEach(skill => {
            const rect = skill.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                skill.style.width = skill.parentElement.getAttribute("data-label");
            }
        });
    }

    window.addEventListener("scroll", revealSkills);
    revealSkills();


    const contactProfile = document.querySelector(".contactprofile");
    let hasAnimated = false;

    function handleScroll() {
        const rect = contactProfile.getBoundingClientRect();
        if (!hasAnimated && rect.top < window.innerHeight - 100) {
            hasAnimated = true;
            setTimeout(() => {
                contactProfile.style.transform = "translateX(0)";
                contactProfile.style.opacity = "1";
            }, 500); 
        }
    }


    window.addEventListener("scroll", handleScroll);
});