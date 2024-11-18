<x-layout>
    <section>
        <!-- Container -->
        <div class="container mx-auto px-6 py-10">

            <!-- Single Post Section -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-full p-6">

                <div class="flex flex-col gap-5">
                    <!-- Back Button -->
                    <a href="index.html" class="text-md font-bold">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </a>
                    <!-- Judul -->
                    <h1 class="text-2xl font-bold">Kontrakan 1</h1>

                    <div class="flex gap-6">
                        <!-- Gambar -->
                        <img src="{{ asset('images/download (1).jpeg') }}" class="w-full h-64 object-center">

                        <!-- Konten -->
                        <div class="flex flex-col max-w-5">
                            <p class="text-gray-600 mb-6">
                                Alamat lengkap: Jalan Pancoran No. 123, Jakarta Selatan, Indonesia.
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <!-- Informasi Singkat -->
                                <div>
                                    <h2 class="font-bold text-lg">Fasilitas:</h2>
                                    <ul class="list-disc list-inside text-gray-700">
                                        <li>2 Kamar Tidur</li>
                                        <li>1 Kamar Mandi</li>
                                        <li>Dapur</li>
                                        <li>Ruang Tamu</li>
                                        <li>Parkir Luas</li>
                                    </ul>
                                </div>
                                <div>
                                    <h2 class="font-bold text-lg">Harga:</h2>
                                    <p class="text-gray-700">Rp 2.000.000 / bulan</p>
                                </div>
                            </div>

                            <!-- Deskripsi -->
                            <h2 class="font-bold text-lg mb-2">Deskripsi:</h2>
                            <p class="text-gray-600 text-justify">
                                Kontrakan ini terletak di lokasi strategis, dekat dengan pusat perkantoran, minimarket,
                                dan
                                akses transportasi umum.
                                Cocok untuk keluarga kecil atau pekerja. Suasana nyaman dan aman dengan lingkungan yang
                                ramah.
                            </p>

                            <!-- Action Button -->
                            <div class="mt-6">
                                <a href="contact.html"
                                    class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                                    Hubungi Pemilik
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex py-6 gap-6 images-kontrakan">
                        <div class="image">
                            <img src="{{ asset('images/download (1).jpeg') }}" class="w-full h-40 object-cover">
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/download (1).jpeg') }}" class="w-full h-40 object-cover">
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/download (1).jpeg') }}" class="w-full h-40 object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
