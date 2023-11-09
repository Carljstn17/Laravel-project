<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Tailwind Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
      <div class="container mx-auto">
        <div class="flex justify-between items-center">
          <a href="#" class="text-white text-2xl font-bold">Logo</a>
          <ul class="flex space-x-4">
            <li><a href="#" class="text-white">Home</a></li>
            <li><a href="#" class="text-white">About</a></li>
            <li><a href="#" class="text-white">Contact</a></li>
          </ul>
          <span>
            Hello @yield('name')
          </span>
        </div>
      </div>
    </nav>

    <!-- Content Section -->
    <section class="container mx-auto mt-8 p-8 bg-white shadow-lg rounded-lg">

        @yield('content')
    </section>

  </body>
</html>
