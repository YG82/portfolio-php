<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            @apply { bg-gradient-to-r from-slate-200 to-slate-50 text-slate-800 }
        }
        h1, h2, h3, h4, h5, h6 { font-family: 'Space Grotesk', sans-serif; }
    </style>
</head>
<body>
    <nav class="p-2 flex justify-between items-center border-b border-slate-300">
        <img src="./images/logo.png" alt="votre logo" width="50">
        <ul class="flex gap-4">
            <li class=""><a href="#" class="">Présentation</a></li>
            <li class=""><a href="#" class="">Mes compétences</a></li>
            <li class=""><a href="#" class="">Mes projets</a></li>
            <li class=""><a href="#" class="">Contact</a></li>
        </ul>
    </nav>
</body>
</html>