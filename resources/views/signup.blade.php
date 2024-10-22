<html>
<head>
    <title>Power Shoes - Sign Up</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-red-500 flex flex-col items-center justify-center min-h-screen">
    <nav class="w-full bg-white shadow-md absolute top-0">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="text-xl font-bold">Power Shoes</div>
            <div class="space-x-4">
                <a href="#" class="text-black">Collection</a>
                <a href="#" class="text-black">Trending</a>
                <a href="#" class="text-black">About</a>
            </div>
            <div class="space-x-4">
                <button class="bg-gray-200 text-black px-4 py-2 rounded-full">Login</button>
                <button class="bg-black text-white px-4 py-2 rounded-full">Sign Up</button>
            </div>
        </div>
    </nav>
    <div class="bg-white p-8 rounded-lg shadow-lg w-80">
        <h2 class="text-2xl font-bold mb-6 text-center">Sign Up</h2>
        <form>
            <div class="mb-4">
                <input type="text" placeholder="Create Username" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <input type="password" placeholder="Create Password" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <input type="password" placeholder="Confirm Password" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-black text-white py-2 rounded-full">Sign Up</button>
            </div>
            <div class="text-center">
                <span>Already have an account? <a href="#" class="text-blue-500">Login</a></span>
            </div>
        </form>
    </div>
</body>
</html>