<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}
?>



<h1 class="py-10 bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Me contacter
</h1>

<div class="grid place-items-center">
    <?php include 'templates/components/form.php'; ?>
</div>