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


  <div class="container mx-auto px-6 py-4 bg-white shadow-md rounded-xl p-8 mb-40">
    <h2 class="text-gray-800 text-lg font-medium mb-6">Complétez votre réservation</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <div class="rounded-xl p-0 flex flex-col justify-between border-2 border-gray-200">
        <div class="bg-gray-200 text-gray-700 py-4 rounded-t-xl text-center">
          <h3 class="font-semibold">Basic</h3>
          <p class="text-sm">Votre test psychotechnique simple</p>
        </div>
        <div class="p-6 flex flex-col flex-1 justify-between text-center">
          <p class="text-3xl font-bold text-gray-800 mb-4">+ 0€</p>
          <div class="flex-1"></div>
          <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-lg font-medium w-full">
            Sélectionner
          </button>
          <ul class="mt-4 space-y-2 text-sm text-gray-600 text-left">
            <li>✔️ Entraînement illimité et gratuit</li>
            <li>✔️ Annulation jusqu'à 48 heures</li>
          </ul>
        </div>
      </div>

      <div class="rounded-xl p-0 flex flex-col justify-between border-2 border-[#0DBC0D]">
        <div class="bg-[#0DBC0D] text-white py-4 rounded-t-xl text-center">
          <h3 class="font-semibold">Assurance</h3>
          <p class="text-sm">Votre test psychotechnique sans stress</p>
        </div>
        <div class="p-6 flex flex-col flex-1 justify-between text-center">
          <p class="text-3xl font-bold text-gray-800 mb-1">+ 40€</p>
          <p class="text-gray-500 text-sm mb-4">À peine le prix d’un resto</p>
          <div class="flex-1"></div>
          <button class="bg-[#0DBC0D] text-white px-4 py-2 rounded-lg font-medium w-full">
            Sélectionner
          </button>
          <ul class="mt-4 space-y-2 text-sm text-gray-600 text-left">
            <li>✔️ Entraînement illimité et gratuit</li>
            <li>✔️ Annulation jusqu'à 48 heures</li>
          </ul>
        </div>
      </div>

      <div class="rounded-xl p-0 flex flex-col justify-between border-2 border-gray-200">
        <div class="bg-[#36578A] text-white py-4 rounded-t-xl text-center">
          <h3 class="font-semibold">Complet</h3>
          <p class="text-sm">Votre test psychotechnique tout compris</p>
        </div>
        <div class="p-6 flex flex-col flex-1 justify-between text-center">
          <p class="text-3xl font-bold text-gray-800 mb-1">+ 60€</p>
          <p class="text-gray-500 text-sm mb-4">À peine le prix de 4 pizzas</p>
          <div class="flex-1"></div>
          <button class="bg-[#36578A] text-white px-4 py-2 rounded-lg font-medium w-full">
            Sélectionner
          </button>
          <ul class="mt-4 space-y-2 text-sm text-gray-600 text-left">
            <li>✔️ Entraînement illimité et gratuit</li>
            <li class="text-[#36578A] font-semibold">✔️ Annulation jusqu'à 24 heures</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="fixed bottom-0 left-0 w-full bg-[#353535] border-t shadow-md">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4 px-6 py-4">
      <div class="flex items-center space-x-3 bg-white text-[#36578A] px-4 py-3 rounded-md w-full md:w-auto">
        <div class="bg-white text-[#BF2A6B] p-2 rounded-full">
          📅
        </div>
        <div>
          <p class="text-sm font-medium">
            Test psychotechnique le 28 mars à 14:00
          </p>
          <p class="text-sm">
            15 rue de la république Montgeron 91230
          </p>
        </div>
      </div>

      <div class="flex flex-col items-center justify-center w-full md:w-auto space-y-3">
        <p class="text-xl font-bold text-white">
          Total <span class="ml-2">135£</span>
        </p>
        <button class="bg-[#BF2A6B] text-white px-6 py-2 rounded-lg font-medium">
          Suivant →
        </button>
      </div>
    </div>
  </div>

</body>
</html>
