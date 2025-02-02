<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCS Training K3</title>

    {{-- <link rel="stylesheet" href="/dist/main.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/flowbite.css') }}"> --}}
    <link rel="icon" href="{{ url('storage/images/logoweb.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-950">
    <!-- Navbar -->
    @include('client.layouts.navbar')
    <!-- Navbar End -->

    <!-- Main -->
    <div class="main">
        @yield('content')
        <br><br><br><br>
    </div>
    <!-- Main End -->

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">

          <!-- Logo/Brand Section -->
          <div class="mb-4 md:mb-0">
            <h1 class="text-2xl font-bold">DCS TRAINING K3</h1>
          </div>

          <!-- Navigation Links -->
          <div class="flex space-x-4 mb-4 md:mb-0">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">About</a>
            <a href="#" class="hover:underline">Services</a>
            <a href="#" class="hover:underline">Contact</a>
          </div>

          <!-- Social Media Links -->
          <div class="flex space-x-4">
            <a href="#" class="hover:text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.633 7.997h-1.595c-1.252 0-1.688.875-1.688 1.77v1.908h3.376l-.444 3.453h-2.932V24h-3.594v-9.872H10.2v-3.453h2.556v-2.595C12.756 4.942 14.233 4 16.18 4c1.336 0 2.459.099 2.794.143v3.854z"/></svg>
            </a>
            <a href="#" class="hover:text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.56c-.89.39-1.85.65-2.86.76a5.001 5.001 0 0 0 2.18-2.73 9.83 9.83 0 0 1-3.12 1.19 4.92 4.92 0 0 0-8.38 4.49A13.93 13.93 0 0 1 1.67 3.15a4.93 4.93 0 0 0-.66 2.48 4.92 4.92 0 0 0 2.19 4.09 4.91 4.91 0 0 1-2.23-.62v.06a4.93 4.93 0 0 0 3.95 4.83c-.88.24-1.81.29-2.73.1a4.93 4.93 0 0 0 4.59 3.42A9.88 9.88 0 0 1 0 19.54a13.94 13.94 0 0 0 7.56 2.21c9.06 0 14.01-7.5 14.01-14v-.64A10.05 10.05 0 0 0 24 4.56z"/></svg>
            </a>
            <a href="#" class="hover:text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.16a9.84 9.84 0 0 0-3.12 19.19c.5.09.68-.21.68-.48v-1.68c-2.77.6-3.36-1.31-3.36-1.31a2.65 2.65 0 0 0-1.11-1.46c-.91-.62.07-.6.07-.6a2.1 2.1 0 0 1 1.54 1.05c.89 1.54 2.35 1.1 2.93.84a2.1 2.1 0 0 1 .62-1.31c-2.22-.25-4.56-1.11-4.56-4.95a3.88 3.88 0 0 1 1.04-2.7 3.57 3.57 0 0 1 .1-2.67s.84-.27 2.76 1.03a9.45 9.45 0 0 1 5.02 0c1.92-1.3 2.76-1.03 2.76-1.03.37.83.4 1.79.1 2.67a3.88 3.88 0 0 1 1.04 2.7c0 3.86-2.34 4.7-4.57 4.95a2.36 2.36 0 0 1 .67 1.84v2.74c0 .26.18.58.69.48a9.84 9.84 0 0 0-3.11-19.19z"/></svg>
            </a>
          </div>

        </div>

        <div class="container mx-auto text-center mt-8">
          <p class="text-sm">&copy; 2024 DCS Training K3. All rights reserved.</p>
        </div>
    </footer>

    <!-- Footer End -->

    <!-- Plugin -->
    <script src="{{ asset('js/flowbite.js') }}"></script>
</body>
</html>
