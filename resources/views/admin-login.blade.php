<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
    <h2 class="text-2xl text-center text-gray-700 mb-6 font-semibold">Admin Login</h2>
    @error('user')
        <p class="text-red-500">{{ $message }}</p>
    @enderror
        <form action="/admin-login" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="text-gray-600 mb-1">Admin name</label>
                <input type="text" name="name" placeholder="Enter Admin Name" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                @error('name')
                <p class="text-red-500">{{ $message }}</p>
                    
                @enderror
            </div>
            <div>
                <label for="password" class="text-gray-600 mb-1">Admin password</label>
                <input type="text" name="password" placeholder="Enter Admin Password" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                @error('password')
                <p class="text-red-500">{{ $message }}</p>
                    
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Login</button>
        </form>
    </div>
</body>
</html>