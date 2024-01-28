<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!-- Header -->
  <header class="bg-color1 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="text-white  text-2xl font-bold">Hidalgo.gob.mx</div>

      <!-- Menú de navegación para pantallas grandes -->
      <nav class="hidden md:flex space-x-4">
        <a href="#" class="text-white">Gobierno</a>
        <a href="#" class="text-white">Trámites</a>
        <a href="#" class="text-white">Transparencia</a>
        <a href="#" class="text-white">Pagos</a>
      </nav>

      <!-- Menú de hamburguesa para pantallas pequeñas -->
      <div class="md:hidden">
        <button class="menu-btn text-white" (click)="toggleMenu()">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Menú de hamburguesa (oculto inicialmente) -->
  <div class="menu hidden md:hidden" >
    <a href="#" class="block py-2 px-4 text-white bg-color1">Gobierno</a>
    <a href="#" class="block py-2 px-4 text-white bg-color1">Trámites</a>
    <a href="#" class="block py-2 px-4 text-white bg-color1">Transparencia</a>
    <a href="#" class="block py-2 px-4 text-white bg-color1">Pagos</a>
  </div>

</body>
</html>