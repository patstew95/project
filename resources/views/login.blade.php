<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Compare</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-serif, bg-gradient-to-r from-emerald-950 via-green-500 to-emerald-950 min-h-screen flex items-center justify-center">
    <div class="bg-white border border-gray-400 p-8 rounded-lg  max-w-md w-full text-black">
    <h1 class="text-3xl font-bold mb-2 text-center">State Compare</h1>
    <h3 class="font-bold  text-center py-2">Compare States Across America</h3>
   
    
    <form action="" method="POST">
        @csrf
    <div>
    <label for="first">Username:</label>
    <input type="text" id="first" name="first" 
     placeholder="Enter your Username" class="py-4" required>
    </div>
    <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" 
     placeholder="Enter your Password" class="py-4" required>
    </div>
    <button type="submit" <a href="/dashboard" class= "bg-gray-500 text-white font-bold py-2 px-4 rounded hover:bg-emerald-600 transition w-full mb-3"> Log In </button>
    <p class="items-center">No account? <a href="/register" class="italic">Register here!</a></p>
    </div>
    <footer class="fixed bottom-0 left-0 p-1  text-black">copyright &copy; 2025 Patrick Stewart</footer>
</body>
</html>