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




//********competences********* */

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

function saveComment() {
    let comment = document.getElementById("comment").value;
    if (comment.trim() !== "") {
        alert("Commentaire soumis : " + comment);
        document.getElementById("comment").value = "";
    }
}

let likeCount = 0;
        function incrementLike() {
            likeCount++;
            document.getElementById("like-count").textContent = likeCount;
        }

//*****faux chargement test ***** */
document.addEventListener("DOMContentLoaded", function () {
    let loader = document.getElementById("loader");
    let content = document.getElementById("content");

    setTimeout(() => {
        loader.style.display = "none";  
        content.style.display = "block"; 
    }, 1500); 
});

