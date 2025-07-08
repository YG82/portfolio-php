<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact - Néon Interactif</title>
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

    .contact__container {
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

    .neon {
      color: #00f7ff;
      text-shadow: 0 0 5px #00f7ff, 0 0 10px #00f7ff, 0 0 20px #00f7ff;
    }

    form select,
    form input,
    form textarea {
      background-color: rgba(255, 255, 255, 0.9);
      color: #1f2937;
    }

    fieldset legend {
      color: #a5f3fc;
      font-weight: bold;
    }

    .form-wrapper {
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 1rem;
      padding: 2rem;
      max-width: 800px;
      margin: auto;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body class="contact__container min-h-screen p-8">

  <div class="form-wrapper shadow-lg">
    <form action="" method="post" class="flex flex-col gap-6" id="contactForm">
      <!-- Objet -->
      <div>
        <select name="object" id="object" required class="border border-slate-200 
        rounded-lg px-4 py-2 w-full focus:outline-none">
          <option value="">-- À quel sujet me contactez-vous ? --</option>
          <option value="Collaboration">Collaboration</option>
          <option value="Formation">Formation</option>
          <option value="Devis gratuit">Devis gratuit</option>
          <option value="Autre">Autre...</option>
        </select>
      </div>

      <!-- Identité -->
      <fieldset class="border border-slate-200 rounded-lg px-4 py-2">
        <legend class="flex gap-2 items-center mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
          viewBox="0 0 24 24"><path fill="#00f7ff" d="M19 19H5V5h14..."/></svg>
          Vous êtes ?
        </legend>
        <div class="flex gap-4 flex-wrap">
          <div class="flex flex-col gap-1 flex-1 min-w-[150px]">
            <label for="firstname" class="font-semibold text-lg">Votre prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Martin" 
            required minlength="2" maxlength="80" class="border border-slate-300 rounded-lg px-4 py-2">
          </div>
          <div class="flex flex-col gap-1 flex-1 min-w-[150px]">
            <label for="lastname" class="font-semibold text-lg">Votre nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Dupont" 
            required minlength="2" maxlength="80" class="border border-slate-300 rounded-lg px-4 py-2">
          </div>
        </div>
      </fieldset>

      <!-- Contact -->
      <fieldset class="border border-slate-200 rounded-lg px-4 py-2">
        <legend class="flex gap-2 items-center mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path 
          fill="#00f7ff" d="M20 15.5c-1.2..."/></svg>
          Vos coordonnées
        </legend>
        <div class="flex flex-col gap-3">
          <div class="flex flex-col">
            <label for="email" class="font-semibold text-lg">Adresse email</label>
            <input type="email" name="email" id="email" placeholder="martin@gmail.com" 
            required maxlength="80" class="border border-slate-300 rounded-lg px-4 py-2">
          </div>
        </div>
      </fieldset>

      <!-- Message -->
      <div class="flex flex-col">
        <label for="message" class="font-semibold text-lg">Votre message</label>
        <textarea name="message" id="message" placeholder="Bonjour, je vous contacte car..." 
        required rows="5" maxlength="1000" class="border border-slate-300 rounded-lg px-4 py-2"></textarea>
      </div>

      <!-- Bouton -->
      <div class="text-right">
        <button type="submit" class="bg-cyan-500 hover:bg-cyan-400 text-white px-6 py-2 
        rounded-lg shadow-lg transition">
          Envoyer ✉️
        </button>
      </div>
    </form>
  </div>
</body>
</html>
