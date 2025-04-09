

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

.skills__container{
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

    .category {
      background-color: rgba(0, 0, 0, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 8px;
    }

    .neon {
      color: #00f7ff;
      text-shadow: 0 0 5px #00f7ff, 0 0 10px #00f7ff, 0 0 20px #00f7ff;
    }

    .td-glow {
      text-shadow: 0 0 3px #0ff;
    }

    .td-category {
      font-weight: bold;
      color: #00eaff;
    }

    .skill {
      display: inline-block;
      margin-right: 0.5rem;
      margin-bottom: 0.3rem;
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
      transform: scale(1.05);
    }
  </style>
</head>
<div class="skills__container min-h-screen flex flex-col items-center justify-center p-8">
  <h1 class="text-5xl font-extrabold mb-10 neon animate-pulse">💻 Mes Compétences</h1>

  <table class="table-auto category text-white shadow-xl">
    <thead>
      <tr class="bg-black bg-opacity-40">
        <th class="px-6 py-3 text-left neon">Catégorie</th>
        <th class="px-6 py-3 text-left neon">Compétences</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $competences = [
          'Frontend' => ['HTML', 'CSS', 'JavaScript','Responsive Design'],
          'Backend' => ['Node.js', 'Express', 'PHP', 'Postman', 'MongoDB', 'MySQL'],
          'Frameworks' => ['React', 'Express', 'Tailwind CSS' ,'Symfony'],
          'Langage' => ['JavaScript', 'PHP', 'TypeScript'],
          'Production' => ['Git', 'GitHub', 'Docker']

        
        ];

        foreach ($competences as $categorie => $liste) {
          echo "<tr class='border-t border-gray-600'>";
          echo "<td class='px-6 py-4 td-category td-glow'>" . htmlspecialchars($categorie) . "</td>";
          echo "<td class='px-6 py-4 td-glow'>";
          
          foreach ($liste as $skill) {
            echo "<span class='skill'>" . htmlspecialchars($skill) . "</span>";
          }

          echo "</td></tr>";
        }
      ?>
    </tbody>
  </table>
</div>
</html>
