<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Ryan Almansa</title>
    <link rel="stylesheet" href="css/base.css">
    <script src="https://kit.fontawesome.com/d2592aca38.js" crossorigin="anonymous"></script>
    <script src="js/confetti.js"></script>
    <script src="js/scroll.js"></script>
    
    
</head>
<body>
    <header>
        <nav class="nav">
            <div class="logo">Ryan Almansa</div>
            <div class="menu" id="menu">
                <a href="#Profil">Profil</a>
                <a href="#experience">Expériences</a>
                <a href="#formation">Formation</a>
                <a href="#competences">Compétences</a>
                <a href="#competences">Contact</a>
            </div>
            <div class="toggle" id="toggle">☰</div>
        </nav>

        <div class="title">
            <div class="titletext">
                <h1>Poste recherché</h1>
                <h2>Secteur <span>cybersécurité</span> et/ou <span>développement</span> web<h2>
            </div>
            <span><i class="fa-solid fa-arrow-down fa-beat"></i></span>
        </div>
    </header>
    
    <section id="formation">
        <h2>Diplôme <span>/</span> Formation</h2>
        <div class="diplomes">
            <div class="diplome">
                <img src="asset/DiplomeBACRyan.jpg">
                <div class="info">
                    <h3>Baccalauréat</h3>
                    <p>STI2D</p>
                </div>
            </div>
            <div class="diplome">
                <img src="asset/PSe1.jpg">
                <div class="info">
                    <h3>PSE1</h3>
                    <p>Premiers Secours en Equipe de niveau 1</p>
                </div>
            </div>
            <div class="diplome">
                <img  src="asset/DiplomeBrevetRyan.jpg">
                <div class="info">
                    <h3>BREVET</h3>
                    <p>Brevet des collège </p>
                </div>
            </div>
        </div>
    </section>

    <section id="experience">
        <div class="experiences">
            <div class="experience">
                <div class="exphead">
                    <h4>Stage pratique Mars 2021</h4>
                    <img src="asset/taxi.jpg">
                </div>
                <div class="expbody">
                    <p>Entreprise automobile Taxi G7 - Stage d’observation</p>
                </div>
            </div>
            <div class="experience">
                <div class="exphead">
                    <h4>SNU</h4>
                    <img src="asset/SNU.png" class="small">
                </div>
                <div class="expbody">
                    <p>J'ai effectué le Service national universel dans le but d'apprendre les valeurs 
                        republicaines (liberté, égalité, fraternité) et de développer un esprit civique.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="competences">
        <div class="container">
            <div class="competences box">
                <div class="competence" data-label="90%">
                    <div class="progress" style="width: 0;">
                        <span><i class="fa-brands fa-html5"></i></span>
                        <p>HTML</p>
                    </div>
                </div>
                <div class="competence" data-label="60%">
                    <div class="progress" style="width: 0%;">
                        <span><i class="fa-brands fa-css3-alt"></i></span>
                        <p>CSS</p>
                    </div>
                </div>
                <div class="competence" data-label="70%">
                    <div class="progress" style="width: 0%;">
                        <span><i class="fa-brands fa-js"></i></span>
                        <p>JavaScript</p>
                    </div>
                </div>
                <div class="competence" data-label="15%">
                    <div class="progress" style="width: 0%;">
                        <span><i class="fa-solid fa-code"></i></span>
                        <p>C++</p>
                    </div>
                </div>
            </div>
            <div class="contactprofile box">
                <div class="name">
                    <p>Ryan Almansa</p>
                    <img src="asset/contentResize.png" class="fire-btn">
                </div>
                <div class="item">
                    <i class="fa-solid fa-phone fa-fade"></i>
                    <span>Numéro : </span>
                    <label>07.68.60.06.87</label>
                </div>
                <div class="item">
                    <i class="fa-brands fa-linkedin-in"></i>
                    <a href="https://www.linkedin.com/in/ryan-almansa-9a950b312/">Linkedin </a>
                    <label> <i class="fa-solid fa-arrow-left"></i> mon Linkedin</label>
                </div>
                <div class="item">
                    <i class="fa-brands fa-github"></i>
                    <a href="https://github.com/dashboard">GitHub </a>
                    <label> <i class="fa-solid fa-arrow-left"></i> mes Projet </label>
                </div>
            </div>
        </div>
    </section>

    <section id="description">
        <div class="textdesc">
            <h2><span>P</span>assionné par l'informatique,</h2>
            <p>Je maîtrise le HTML5 et le CSS3. Actuellement, je débute en JavaScript et j'apprécie découvrir ce nouvel environnement de développement.</p>
        </div>
    </section>

    <footer>
        <div class="foot">
            <p><?php echo date('Y');?> <span>©</span> CV</p>
            <p>Ryan Almansa</p>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>

<script>
    document.getElementById('toggle').addEventListener('click', function() {
      document.getElementById('menu').classList.toggle('show');
    });
</script>
</body>
</html>
