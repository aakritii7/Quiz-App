<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name="{{ $name }}"></x-navbar>
    @if (session('category'))
    <div class="bg-green-800 text-white pl-5">{{ session('category') }}</div>
        
    @endif
    <div class="bg-gray-100 flex pt-10 justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
    <h2 class="text-2xl text-center text-gray-700 mb-6 font-semibold">Add Category</h2>
        <form action="/add-category" method="post" class="space-y-4">
            @csrf
            <div>
                <input type="text" name="category" placeholder="Enter Category Name" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            </div>
           
            <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Add</button>
        </form>
    </div>

    </div>
    
</body>
</html>