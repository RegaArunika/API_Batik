<x-home-layout>
    <div class="py-20 bg-slate-50">
        <!-- Isi konten atau elemen lain di sini -->
        <script src="https://cdn.tailwindcss.com"></script>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1 rounded-sm mt-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex items-baseline justify-between border-b border-gray200 pt-2 pb-6">
                            <h1 class="text-4xl font-bold tracking-tight text-sky-600">Luxury Product</h1>
                            <form>
                                <div class="flex">
                                    <label for="search-dropdown"
                                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                                        Email</label>
                                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                                        type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="dropdown"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdown-button">
                                            <li>
                                                <button type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                                            </li>
                                            <li>
                                                <button type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                                            </li>
                                            <li>
                                                <button type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                                            </li>
                                            <li>
                                                <button type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="search" id="search-dropdown"
                                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-sky-500"
                                            placeholder="Search Kemeja, Batik..." required>
                                        <button type="submit"
                                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-sky-700 rounded-e-lg border border-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                            <span class="sr-only">Search</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <section>
                            @foreach ($produk as $key=>$item)
                            <div class="md:flex font-sans pt-8 border-b border-t borderslate-200">
                                <div class="md:shrink-0">
                                    <img src="{{ $item->img_produk }}" alt=""
                                        class="w-full md:h-[310px] md:w-56 h-48 inset-0 object-cover object-top rounded-lg"
                                        loading="lazy" />
                                </div>
                                <form class="p-6 pt-1">
                                    <div class="flex flex-wrap">
                                        <div class="w-full flex-none mt-2 order-1 text-3xl font-bold text-sky-600">
                                            {{ $item->nama_produk }}
                                        </div>
                                    </div>
                                    <div class="flex items-baseline mt-4 text-slate-600">
                                        {{ $item->desk_produk }}
                                    </div>
                                    <div
                                        class="w-full flex-none order-1 text-xl font-bold text-sky-600 border-b borderslate-200 mt-4 mb-2 pb-4">
                                        @if ($item->harga)
                                            <p>Rp. {{ $item->harga->harga_produk }}</p>
                                        @else
                                            <p>0.</p>
                                        @endif
                                    </div>
                                    <div class="mb-4 font-light">
                                        <h1 class="flex-auto font-medium text-slate-900">
                                            {{ $item->produk->nama_seller}}
                                        </h1>
                                        <div class="flex items-center">
                                            <span>{{ $item->produk->location}}</span>
                                        </div>
                                    </div>
                                    <div class="flex space-x-4 mb-5 text-sm font-medium">
                                        <div class="flex-auto flex space-x-4">
                                            <a href="/checkout">
                                                <button class="h-10 px-6 font-semibold rounded-xl bg-sky-600 text-white"
                                                    type="button">
                                                    Pesan
                                                </button>
                                            </a>
                                            <a href="/keranjang">
                                                <button
                                                    class="h-10 px-6 font-semibold rounded-xl bg-teal-600 text-white"
                                                    type="button">
                                                    Tambah Keranjang
                                                </button>
                                            </a>
                                            <a href="/detail">
                                                <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                                    class="h-10 px-6 font-semibold rounded-xl border border-slate200 text-slate-900"
                                                    type="button">
                                                    Detail
                                                </button>
                                            </a>
                                        </div>
                                        <button
                                            class="flex-none flex items-center justify-center w-9 h9 rounded-full text-sky-600 bg-sky-50"
                                            type="button" aria-label="Like">
                                            <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                                <path fill-rule="evenodd" cliprule="evenodd"
                                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                        </section>
                        <div class=" font-sans pt-8 text-center">
                            <a href="#"
                                class="inline-flex items-center py-2 px-4 text-sm fontmedium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:textgray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray700 dark:hover:text-white">
                                Previous
                            </a>
                            <!-- Next Button -->
                            <a href="#"
                                class="inline-flex items-center py-2 px-4 ml-3 text-sm fontmedium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:textgray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray700 dark:hover:text-white">
                                Next
                            </a>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        {{-- modal form untuk cek availibility --}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-xhidden overflow-y-auto"
            id="exampleModalLg" tabindex="-1" arialabelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col wfull pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    @include('frontpage.calendar')
                </div>
            </div>
        </div>
    </div>
</x-home-layout>
