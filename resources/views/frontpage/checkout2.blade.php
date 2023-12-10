<x-home-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- wrapper -->
    <div class="container grid grid-cols-12 items-start pb-16 pt-4 gap-6">

        <div class="col-span-8 border border-gray-200 p-4 rounded">
            <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Product</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="https://via.placeholder.com/150" alt="Product image">
                                        <span class="font-semibold">Product name</span>
                                    </div>
                                </td>
                                <td class="py-4">$19.99</td>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <button class="border rounded-md py-2 px-4 mr-2">-</button>
                                        <span class="text-center w-8">1</span>
                                        <button class="border rounded-md py-2 px-4 ml-2">+</button>
                                    </div>
                                </td>
                                <td class="py-4">$19.99</td>
                            </tr>
                            <!-- More product rows -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-span-4 border border-gray-200 p-4 rounded">
            <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">Keranjang Pesanan</h4>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <div>
                        <h5 class="text-gray-800 font-medium">Tari Kecak Uluwatu</h5>
                        <p class="text-sm text-gray-600">Jam : 17.00 WITA</p>
                    </div>
                    <p class="text-gray-600">
                        x2
                    </p>
                    <p class="text-gray-800 font-medium">Rp. 440.000</p>
                </div>
                <div class="flex justify-between">
                    <div>
                        <h5 class="text-gray-800 font-medium">Tari Kecak Gianyar</h5>
                        <p class="text-sm text-gray-600">Jam : 18.00 WITA</p>
                    </div>
                    <p class="text-gray-600">
                        x1
                    </p>
                    <p class="text-gray-800 font-medium">Rp. 100.000</p>
                </div>
            </div>

            <div class="flex justify-between border-b border-gray-200 mt-1 text-gray-800 font-medium py-3 uppercas">
                <p>SubTotal</p>
                <p>Rp. 540.000</p>
            </div>
            
            <div class="flex justify-between border-b border-gray-200 mt-1 text-gray-800 font-medium py-3 uppercas">
                <p>Pajak</p>
                <p>Rp. 5.400</p>
            </div>
            
            <div class="flex justify-between text-gray-800 font-medium py-3 uppercas">
                <p class="font-semibold">Total</p>
                <p>Rp. 534.600</p>
            </div>
            
            <a href="/" <
                class="mt-4 block w-full py-3 px-4 text-center font-semibold rounded-lg bg-sky-600 text-white over:text-primary transition "
                type="submit">
                Pesan sekarang
                </button>
            </a>
        </div>

    </div>
    <!-- ./wrapper -->
        </div>
        <!-- Isi konten atau elemen lain di sini -->
        
    </div>
    <!-- ./wrapper -->

    </div>
</x-home-layout>

