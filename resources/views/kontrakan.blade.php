<x-layout>
    <section class="container mx-auto my-8 p-4">
        <h2 class="text-3xl font-bold mb-6">Daftar Kontrakan</h2>
        <div class="grid grid-cols-1 tablet:grid-cols-2 laptop:grid-cols-3 gap-4">
            <!-- Card for each property -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/download (1).jpeg') }}" alt="Gambar Kontrakan" class="w-full h-48 object-cover">
                <div class="flex flex-col p-4 gap-3">
                    <div>
                        <h3 class="text-xl font-semibold">Nama Kontrakan</h3>
                        <p class="text-gray-600">Alamat lengkap dan keterangan</p>
                        <p class="font-bold text-lg mt-4">Rp. Harga/bulan</p>
                    </div>
                    <div class="flex gap-3">

                        <a href="#" class="px-4 py-2 border border-blue-500 text-blue-500 rounded">Detail</a>
                        <a href="#" class="px-4 py-2 border border-none text-white bg-blue-500 rounded">Sewa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
