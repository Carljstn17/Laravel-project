<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailwind CSS demo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-100">
    <main class="container mx-auto text-center mt-5">
      <div class="flex justify-center items-center space-x-4">
        <div class="w-1/3">
        <img src="{{ asset('../media/logo.png') }}" alt="tag">
        </div>
        <div class="w-2/3 text-left">
          <p class="text-3xl font-bold mb-2">G.B GASPAR</p>
          <p class="text-sm">DESIGN & CONSTRUCTION</p>
        </div>
      </div>

      <div class="mt-5 text-lg font-semibold">PROJECT EXPENSES MANAGEMENT SYSTEM</div>

      <div class="mt-5 space-y-2">
        <a href="view/owner/owner-login.php" class="bg-gray-800 text-white py-2 px-4 rounded-full text-lg">Owner</a>
        <a href="view/staff/staff-login.php" class="bg-gray-800 text-white py-2 px-4 rounded-full text-lg">Staff</a>
      </div>
    </main>
  </body>
</html>
