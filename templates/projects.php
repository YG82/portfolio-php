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

<h1 class="bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Mes projets
</h1>

<?php foreach ($projects as $item): ?>
    <div class="p-4 flex border-b border-slate-500">
        <div class="w-1/2 border-r border-slate-500">
            <h3 class="text-2xl font-bold mb-5"><?= $item['title'] ?></h3>
            <p class=""><?= $item['description'] ?></p>
        </div>
        <div class="w-screen border-r border-slate-500">
            <h3 class="text-2xl font-bold mb-5">Stack</h3>
            <ul class="flex gap-4">
                <?php foreach ($item['stack'] as $icon): ?>
                    <li class="h-10 w-10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?= toSlug($icon) . '/' . toSlug($icon) ?>-original.svg" alt="<?= "Logo " . $icon ?>" />
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="w-24 text-slate-400 flex items-center justify-center">
            <a href="<?= $item['link'] ?? '#' ?>" target="_blank" class="hover:text-slate-900 duration-300 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m14.475 12l-7.35-7.35q-.375-.375-.363-.888t.388-.887t.888-.375t.887.375l7.675 7.7q.3.3.45.675t.15.75t-.15.75t-.45.675l-7.7 7.7q-.375.375-.875.363T7.15 21.1t-.375-.888t.375-.887z"/>
                </svg>
            </a>
        </div>
    </div>
<?php endforeach; ?>