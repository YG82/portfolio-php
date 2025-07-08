<?php
$data = file_get_contents('./assets/projects.json');
$projects = json_decode($data, true);

function toSlug(string $stackIcon): string
{
    $stackIcon = strtolower($stackIcon);
    $stackIcon = preg_replace('/[^a-z0-9-]/', '', $stackIcon);
    $stackIcon = preg_replace('/-+/', '', $stackIcon);
    return $stackIcon;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes Projets - Néon Interactif</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    @keyframes scrollBackground {
        0% { background-position: center top; }
        100% { background-position: center bottom; }
    }

    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
    }

    .projects__container {
        background-image: url('./images/home_5.png');
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

    .project-card {
        background-color: rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .project-card:hover {
        transform: scale(1.02);
        box-shadow: 0 0 10px #00f7ff, 0 0 20px #00f7ff;
    }

    .neon {
        color: #00f7ff;
        text-shadow: 0 0 5px #00f7ff, 0 0 10px #00f7ff, 0 0 20px #00f7ff;
    }

    .stack-icon {
        width: 40px;
        height: 40px;
        transition: transform 0.2s ease;
    }

    .stack-icon:hover {
        transform: scale(1.1);
        filter: drop-shadow(0 0 5px #0ff);
    }
</style>
</head>
<body class="projects__container min-h-screen p-8">
    <h1 class="text-5xl font-extrabold mb-12 text-center neon animate-pulse"> Mes Projets</h1>

<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($projects as $item): ?>
<div class="project-card p-6">
        <h2 class="text-2xl font-bold neon mb-3"><?= htmlspecialchars($item['title']) ?></h2>
        <p class="mb-4"><?= htmlspecialchars($item['description']) ?></p>

        <div>
            <h3 class="text-lg font-semibold text-cyan-300 mb-2">🛠️ Stack utilisée :</h3>
            <ul class="flex flex-wrap gap-3 mb-4">
            <?php foreach ($item['stack'] as $icon): ?>
            <li>
                <img class="stack-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/
                <?= toSlug($icon) ?>/<?= toSlug($icon) ?>-original.svg" alt="<?= htmlspecialchars($icon) ?>
                " title="<?= htmlspecialchars($icon) ?>">
            </li>
            <?php endforeach; ?>
            </ul>
        </div>

        <div class="mt-4 text-right">
            <a href="<?= htmlspecialchars($item['link'] ?? '#') ?>" target="_blank" 
            class="text-cyan-400 hover:text-cyan-100 transition duration-300 ease-in-out 
            inline-flex items-center">
            Voir le projet
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="m14.475 12l-7.35-7.35q-.375-.375-.363-.888t.388-.
                887t.888-.375t.887.375l7.675 7.7q.3.3.45.675t.15.75t-.15.75t-.45.675l-7.7 7.7q-.
                375.375-.875.363T7.15 21.1t-.375-.888t.375-.887z"/>
            </svg>
            </a>
        </div>
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>
