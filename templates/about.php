<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mes Compétences - Néon Interactif</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes scrollBackground {
            0% {
                background-position: center top;
            }

            100% {
                background-position: center bottom;
            }
        }

        .skills__container {
            background-image: url('./images/home_1.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center top;
            animation: scrollBackground 50s linear infinite alternate;

            color: white;
            backdrop-filter: brightness(0.6);

        }


        h1 {
            text-shadow: 0 0 5px #0ff, 0 0 10px #0ff, 0 0 20px #0ff;
        }

        .category {
            background-color: rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
        }

        .neon {
            color: #00f7ff;
            text-shadow: 0 0 5px #00f7ff, 0 0 10px #00f7ff, 0 0 20px #00f7ff;
        }

        .skill {
            display: inline-block;
            margin-inline: 20rem;
            margin-top: 10rem;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            background-color: rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .skill:hover {
            color: #00f0ff;
            background-color: rgba(0, 255, 255, 0.1);
            box-shadow: 0 0 5px #00f0ff, 0 0 10px #00f0ff;
            cursor: pointer;
            transform: scale(1.3);
        }

    </style>
</head>


<div class="skills__container min-h-screen flex flex-col  items-center justify-up p-8">
    <h1 class="text-5xl font-extrabold mb-10 neon animate-pulse">presentation</h1>

    <div class="skill text-center ">
        <p class="text-lg text-white">
            Je suis une développeuse passionnée par la technologie et l'innovation. 
            Mon parcours m’a permis d’acquérir des compétences variées, 
            utiles dans le développement web, la gestion de projets et l’analyse de données.</p>

        <p class="text-lg text-white">
            Toujours en quête de nouveaux défis, je cherche à apprendre continuellement 
            et à évoluer dans un domaine en constante transformation.</p>

        <p class="text-lg text-white">
            Dotée d’un bon sens du relationnel, je suis convaincue que la collaboration 
            et le partage des connaissances sont essentiels à la réussite dans le monde du développement. 
            J’aime échanger, apprendre des autres et construire ensemble.</p>

        <p class="text-lg text-white">
            Suite à une mise en invalidité pour raisons de santé, 
            j’ai dû réorienter ma carrière. Cette période m’a permis de réfléchir 
            profondément à mes envies et mes objectifs professionnels.</p>

        <p class="text-lg text-white">
            Le développement web s’est rapidement imposé comme une évidence : 
            un domaine dynamique, créatif, et riche en opportunités. 
            Je me suis donc formée avec détermination afin d’acquérir 
            les compétences nécessaires pour y réussir.</p>

        <p class="text-lg text-white">
            Je suis impatiente de mettre mes compétences au service d’une entreprise qui partage 
            mes valeurs et prête à contribuer à des projets innovants.</p>

    </div>
</div>

</html>