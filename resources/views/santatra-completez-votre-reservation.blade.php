<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">

<header class="bg-white shadow-sm h-32 w-full flex flex-col justify-start px-6 py-4">
  <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-48 h-auto">
  <h1 class="text-[#36578A] text-lg font-semibold mt-2">
    Test psychotechnique pour permis de conduire à Montgeron
  </h1>
</header>


  <main class="container mx-auto px-6 py-8 grid md:grid-cols-3 gap-6">

    <section class="md:col-span-2 space-y-6">

      <div class="bg-red-50 border border-red-300 text-red-600 rounded-lg p-4">
        <p>Date de réservation en forte demande<br>
        Les réservations sont fréquentes pour ce centre</p>
      </div>

      <div class="bg-white rounded-xl shadow p-6 space-y-6">

        <div class="space-y-3">
          <h2 class="text-gray-800 font-semibold">Vos informations personnelles</h2>
          <input type="text" placeholder="Nom Prénom" class="w-full border rounded-lg px-4 py-2">
          <input type="email" placeholder="Email" class="w-full border rounded-lg px-4 py-2">
          <input type="tel" placeholder="Numéro de téléphone" class="w-full border rounded-lg px-4 py-2">
        </div>

        <div class="space-y-3">
          <h2 class="text-gray-800 font-semibold">Votre test psychotechnique</h2>
          <div class="flex items-center gap-3">
            <span class="text-xl">📅</span>
            <p>12 mai 2025</p>
          </div>
          <div class="flex items-center gap-3">
            <span class="text-xl">⏰</span>
            <p>12:30</p>
          </div>
          <div class="flex items-center gap-3">
            <span class="text-xl">📍</span>
            <p>39 Rue Emile Steiner, 27200 Vernon</p>
          </div>
        </div>

        <div class="space-y-3">
          <h2 class="text-gray-800 font-semibold">Choisissez votre moyen de paiement</h2>
          <p class="text-sm text-gray-500 flex items-center gap-1">🔒 100% SÉCURISÉ</p>
          <div class="space-y-2">
            <label class="flex items-center gap-3">
              <input type="radio" name="payment"> Carte bancaire
            </label>
            <label class="flex items-center gap-3">
              <input type="radio" name="payment"> Apple Pay
            </label>
            <label class="flex items-center gap-3">
              <input type="radio" name="payment"> Paypal
            </label>
            <label class="flex items-center gap-3">
              <input type="radio" name="payment"> Alma
            </label>
          </div>
        </div>

        <button class="w-full bg-[#BF2A6B] hover:bg-[#9D235A] text-white font-medium py-3 rounded-lg">
          Je réserve mon test psychotechnique →
        </button>
      </div>
    </section>

    <aside class="bg-white rounded-xl shadow p-6 space-y-6 sticky top-6">
      <h2 class="text-[#BF2A6B] font-semibold">Récapitulatif de votre test psychotechnique</h2>
      <p><span class="font-semibold">Total à payer :</span> <span class="text-lg">130.00€</span></p>
      <p class="text-sm text-gray-600">
        En passant votre commande, vous acceptez les conditions générales de vente de la société AAEP.
        Veuillez consulter notre politique de protection des données.
      </p>
      <div class="space-y-3">
        <p class="flex items-center gap-2">✅ Entrainement Gratuit illimité</p>
        <p class="flex items-center gap-2">✅ Résultats le Jour Même</p>
        <p class="flex items-center gap-2">✅ Annulation Gratuite jusqu’à 48h</p>
      </div>
    </aside>
  </main>

</body>
</html>
