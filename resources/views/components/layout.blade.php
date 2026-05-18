<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ isset($title) ? $title : 'ReUser - Default' }} </title>
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<div class="navbar bg-gray-500 text-gray-100">
  <div class="container mx-auto">
    <!-- Navbar content here -->        
<div class="lg:flex lg:items-center lg:justify-between">
  <div class="min-w-0 flex-1 text-gray-900">
    <h2 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">ReUse!</h2>
    <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
      
      
      
      
    </div>
  </div>
  <div class="mt-5 flex lg:mt-0 lg:ml-4">
    <span class="hidden sm:block">
      <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'bg-gray-300 text-gray-900' : 'text-gray-900 shadow-xs hover:bg-gray-200' }} inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1.5 -ml-0.5 size-5 text-gray-400">
          <path d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z" />
        </svg>
        Register
      </a>
    </span>

    <span class="ml-3 hidden sm:block">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-gray-300 text-gray-900' : 'text-gray-900 shadow-xs hover:bg-gray-200' }} inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1.5 -ml-0.5 size-5 text-gray-400">
          <path d="M12.232 4.232a2.5 2.5 0 0 1 3.536 3.536l-1.225 1.224a.75.75 0 0 0 1.061 1.06l1.224-1.224a4 4 0 0 0-5.656-5.656l-3 3a4 4 0 0 0 .225 5.865.75.75 0 0 0 .977-1.138 2.5 2.5 0 0 1-.142-3.667l3-3Z" />
          <path d="M11.603 7.963a.75.75 0 0 0-.977 1.138 2.5 2.5 0 0 1 .142 3.667l-3 3a2.5 2.5 0 0 1-3.536-3.536l1.225-1.224a.75.75 0 0 0-1.061-1.06l-1.224 1.224a4 4 0 1 0 5.656 5.656l3-3a4 4 0 0 0-.225-5.865Z" />
        </svg>
        Home
      </a>
    </span>

    <span class="sm:ml-3">
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'bg-gray-300 text-gray-900' : 'text-gray-900 shadow-xs hover:bg-gray-200' }} inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1.5 -ml-0.5 size-5">
          <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
        </svg>
        About
      </a>
    </span>


    <!-- Dropdown -->

  </div>
</div>

  </div>
</div>

    <main class="flex-1 container mx-auto px-4 py-8">
        {{$slot}}
    </main>

    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© 2025 ReUser Team - Built with Laravel and 😅</p>
        </div>
       
    </footer>
</body>

</html>