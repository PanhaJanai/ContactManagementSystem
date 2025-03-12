<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 {{-- bg-gradient-to-b from-pink-700 to-white --}}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $page_title }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
  <!-- <nav>
    <x-nav-link href="/">Home</x-nav-link>
    <x-nav-link href="/api">API</x-nav-link>
    <x-nav-link href="/contact">Contact</x-nav-link>
  </nav> -->

  <nav class="bg-gradient-to-b from-white to-pink-300">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex shrink-0 items-center">
            <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/5/5a/No-Game-No-Life-anime-logo.svg" alt="Your Company">
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')" type="button">Contact</x-nav-link>
              <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <div class="relative ml-3">
            <div>
              @guest
                <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
              @endguest
              @auth
                <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold rounded p-2 inline-blockform" form="logout-form">Logout</button>
                <form method="POST" action="/login" class="hidden" id="logout-form">
                  @csrf
                  @method('DELETE')
                </form> 
              @endauth
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
        <a href="/jobs" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Jobs</a>
      </div>
    </div>
  </nav>
  
  <div class=" mx-4 md:mx-8 lg:mx-12 my-4 md:my-8 lg:my-12">
    {{ $slot }}
  </div>
  
</body>
</html>