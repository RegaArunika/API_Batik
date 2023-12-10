<x-admin-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="container">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Data Batik
        </h4>
        <div class="grid gap-6 mb-8 ">
            <div class="min-w-0 p-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                    TABEL DATA STOK BATIK
                </h4>
                <div class="flex mb-4">
                    <div class="w-1/4 ">
                        <span>
                            <a href="{{route('batik.create')}}">
                                <button type="button" id="createProductButton" data-modal-toggle="createProductModal"
                                    class="flex items-center justify-center text-white bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-3  dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Add product
                                </button>
                            </a>
                        </span>
                    </div>
                    <div class="w-3/4 ">
                        <span>
                            <form action="{{ route('batik.index') }}" method="GET">
                                <div class="flex">
                                    <label for="search-dropdown"
                                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                                        Email</label>
                                    <div class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                                        type="button">
                                        <select class="text-gray-900 bg-gray-100" name="id_seller" id="id_seller">
                                            <option value="">Pilih Penjual</option>
                                            @foreach($seller as $item)
                                            <option value="{{ $item->id_seller }}"
                                                {{ (isset($_GET['id_seller'])&&$_GET['id_seller']==$item->id_seller)?'selected' : ''}}>
                                                {{$item->nama_seller}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="text" name="s" id="search-dropdown"
                                            values="{{(isset($_GET['s']))?$_GET['s']:''}}"
                                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                            placeholder="Search Produk, Penjual...">
                                        <button type="submit"
                                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-sky-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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

                        </span>
                    </div>
                </div>

                <table class="mt-8 w-full border-collapse border border-gray-400 table-auto">
                    <thead>
                        <tr>
                            <th class="border border-gray-200 px-4 py-2">Gambar</th>
                            <th class="border border-gray-200 px-4 py-2">Nama</th>
                            <th class="border border-gray-200 px-4 py-2">Deskripsi</th>
                            <th class="border border-gray-200 px-4 py-2">Kode</th>
                            <th class="border border-gray-200 px-4 py-2">Penjual</th>
                            <th class="border border-gray-200 px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $item)
                        <tr>
                            <td class="border border-gray-200 px-4 py-2">
                                <img src="{{asset ($item->img_produk) }}" alt=""
                                    class="w-full md:h-[60px] md:w-[60px]  h-48 inset-0 object-cover object-top rounded-lg"
                                    loading="lazy" />
                            </td>
                            <td class="border border-gray-200 px-4 py-2">{{ $item->nama_produk }}</td>
                            <td class="border border-gray-200 px-4 py-2">{{ $item->desk_produk }}</td>
                            <td class="border border-gray-200 px-4 py-2">{{ $item->kode_produk }}</td>

                            <td class="border border-gray-200 px-4 py-2">{{ $item->produk->nama_seller}}</td>
                            <td class="border border-gray-200 px-4 py-2">
                                <span class="flex">
                                    <a href="{{ route('batik.edit', $item->id_produk) }}" <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-lg active:bg-purple-600 hover:bg-yellow-400 focus:outline-none focus:shadow-outline-purple"
                                        aria-label="Like">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-pencil-square text-white-600"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                        </button>
                                    </a>

                                    <form action="{{ route('batik.destroy', $item->id_produk) }}" method="POST"
                                        class="ml-2 flex items-center font-medium text-red-600 dark:text-sky-500 hover:underline mr-2">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Aapakah anda Yakin ingin menghapus data Produk?')"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-red-500 focus:outline-none focus:shadow-outline-purple"
                                            aria-label="Like">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6a.5.5 0 0 0-1 0Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>
                                        </button>
                                    </form>
                                </span>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <div class="m-4">
                        {{ $produk->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>

        </div>

</x-admin-layout>
