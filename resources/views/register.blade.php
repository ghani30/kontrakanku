<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register - Sewa Kontrakan</title>
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan nama">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" class="w-full p-2 border rounded" placeholder="Masukkan email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Jenis Kelamin</label>
                <select type="select" class="w-full p-2 border rounded" placeholder="Masukkan jenis kelamin">
                    <option value="">Masukan Jenis Kelamin</option>
                    <option value="">Laki - Laki</option>
                    <option value="">Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">No. Handphone</label>
                <input type="number" class="w-full p-2 border rounded" placeholder="Masukkan no. handphone">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700">Password</label>
                <input type="password" class="w-full p-2 border rounded" placeholder="Masukkan password">
            </div>
            <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-green-600">Daftar</button>
        </form>
    </div>
</body>

</html>
