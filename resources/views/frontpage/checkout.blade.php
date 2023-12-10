<x-home-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- wrapper -->
            <div class=" h-screen py-8">
                <div class="container mx-auto px-4">
                    <h1 class="text-2xl font-semibold mb-4 text-sky-600">Keranjang Pesanan</h1>
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
                                                    <img class="h-16 w-16 mr-4" src="https://ik.imagekit.io/pandooin/tr:pr-true/production/images/attraction/tari-kecak-uluwatu/VFN5Lw6CX6Shp05Ffl3yYfBsAw5qblVXMMzPP1Ig.jpg" alt="Product image">
                                                    <span class="font-semibold">Tari Kecak Uluwatu</span>
                                                </div>
                                            </td>
                                            <td class="py-4">Rp. 220.000</td>
                                            <td class="py-4">
                                                <div class="flex items-center">
                                                    <button class="border rounded-md py-2 px-4 mr-2">-</button>
                                                    <span class="text-center w-8">2</span>
                                                    <button class="border rounded-md py-2 px-4 ml-2">+</button>
                                                </div>
                                            </td>
                                            <td class="py-4">Rp. 440.000</td>
                                        </tr>
                                        <!-- More product rows -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="md:w-1/4">
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h2 class="text-lg font-semibold mb-4">Summary</h2>
                                <div class="flex justify-between mb-2">
                                    <span>Subtotal</span>
                                    <span>Rp. 440.000</span>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <span>Pajak</span>
                                    <span>-Rp. 4.000</span>
                                </div>
                                <hr class="my-2">
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold">Total</span>
                                    <span class="font-semibold">Rp. 436.000</span>
                                </div>
                                <a href="/">
                                    <button class="bg-sky-500 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>

