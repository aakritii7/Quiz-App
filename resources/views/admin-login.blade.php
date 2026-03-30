<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
    <h2 class="text-2xl text-center text-gray-700 mb-6 font-semibold">Admin Login</h2>
        <form action="/admin-login" method="post" class="space-y-4">
            <div>
                <label for="" class="text-gray-600 mb-1">Admin name</label>
                <input type="text" placeholder="Enter Admin Name" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            </div>
            <div>
                <label for="" class="text-gray-600 mb-1">Admin password</label>
                <input type="text" placeholder="Enter Admin Password" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            </div>
            <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Login</button>
        </form>
    </div>
</body>
</html>