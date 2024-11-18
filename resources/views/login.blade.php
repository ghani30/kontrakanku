<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sewa Kontrakan</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Masuk</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" class="w-full p-2 border rounded" placeholder="Masukkan email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700">Password</label>
                <input type="password" class="w-full p-2 border rounded" placeholder="Masukkan password">
            </div>
            <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Masuk</button>
        </form>
        <p class="text-center mt-4">Belum punya akun? <a href="/register" class="text-blue-500">Daftar</a></p>
    </div>
</body>

</html>
