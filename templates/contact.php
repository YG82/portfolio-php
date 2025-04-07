<h1 class="py-10 bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Me contacter
</h1>

<!-- Nom(r) / Prenom(r)
Mail(r) / Telephone
Objet (Autre, formation, collaboration, Devis,)
Message -->
<div class="m-4 shadow-sm">
    <form action="" method="post" class="">
        <div class="flex gap-4 my-4">
            <div class="flex flex-col gap-2">
                <label for="firstname" class="font-semibold text-lg">Votre prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Martin" value="Martine" minlength="2" maxlength="80" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
            </div>
            <div class="flex flex-col gap-2">
                <label for="lastname" class="font-semibold text-lg">Votre nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="Dupont" value="Dupont" minlength="2" maxlength="80" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
            </div>
        </div>

        <button type="submit" class="bg-white text-slate-800 rounded-lg shadow-md p-2 mt-4 hover:text-white hover:bg-slate-800">
            Envoyer
        </button>
    </form>
</div>