@extends('toko.layout.main')

@section('container')
    <!-- conetent -->
    <div class=" md:flex w-full mt-10">
        <!-- sidebar -->
        @include('toko.components.sidebar-account')

        {{-- informasi  --}}
        <div class=" md:w-full px-10 ">
            <div class="m-2 py-4 ">
                <h1 class="font-bold text-2xl mb-7">Alamat</h1>

                <h1 class="font-bold text-2xl pb-5 border-b-2">ALAMAT</h1>
            </div>
            <div class="mb-5">
                <h1 class="font-bold mb-4">Alamat Pengiriman</h1>
                <p class="font-light text-sm pb-2">fahmi Ihwan</p>
                <p class="font-light text-sm pb-2">magetan</p>
                <p class="font-light text-sm pb-2">Amlapura/Amlapura, Bali, 63392</p>
                <p class="font-light text-sm pb-2">82334331234</p>
                <a href="" class="underline text-xs hover:text-red-500">Ubah Alamat Pengiriman</a>
            </div>
            <div class="">
                <h1 class="font-bold text-2xl pb-5 border-b-2 mb-10">Alamat Tambahan</h1>

                <div class="">
                    <table class="w-full text-left text-gray-500  text-xs">
                        <thead class="text-xs text-gray-900  ">
                            <tr class="border-b">
                                <th scope="col" class="py-2 px-0">
                                    Nama Depan
                                </th>
                                <th scope="col" class="py-2 px-0">
                                    Nama Belakang
                                </th>
                                <th scope="col" class="py-2 px-0">
                                    Alamat
                                </th>
                                <th scope="col" class="py-2 px-0">
                                    Provinsi
                                </th>
                                <th scope="col" class="py-2 px-0">
                                    Kota
                                </th>
                                <th scope="col" class="py-2 px-0">
                                    Kode Pos
                                </th>
                                <th scope="col" class="py-2 px-0">
                                    Nomor Telp
                                </th>
                                <th scope="col" class="py-2 px-0">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b ">
                                <th scope="row" class="py-2 px-0 font-medium text-gray-900 whitespace-nowrap ">
                                    fahmi
                                </th>
                                <td class="py-2 px-0">
                                    ihwan
                                </td>
                                <td class="py-2 px-0">
                                    Magetan
                                </td>
                                <td class="py-2 px-0">
                                    Jatim
                                </td>
                                <td class="py-2 px-0">
                                    Surabaya
                                </td>
                                <td class="py-2 px-0">
                                    9213
                                </td>
                                <td class="py-2 px-0">
                                    081232133312
                                </td>
                                <td class="py-2 px-0 flex ">
                                    <a class="text-red-500" href="">Ubah</a> &nbsp;| &nbsp;
                                    <form action="">
                                        <button class="text-red-500">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="border-b ">
                                <th scope="row" class="py-2 px-0 font-medium text-gray-900 whitespace-nowrap ">
                                    fahmi
                                </th>
                                <td class="py-2 px-0">
                                    ihwan
                                </td>
                                <td class="py-2 px-0">
                                    Magetan
                                </td>
                                <td class="py-2 px-0">
                                    Jatim
                                </td>
                                <td class="py-2 px-0">
                                    Surabaya
                                </td>
                                <td class="py-2 px-0">
                                    9213
                                </td>
                                <td class="py-2 px-0">
                                    081232133312
                                </td>
                                <td class="py-2 px-0 flex ">
                                    <a class="text-red-500" href="">Ubah</a> &nbsp;| &nbsp;
                                    <form action="">
                                        <button class="text-red-500">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="float-right mt-5 mb-5 text-sm">
                        <label for="">Show</label>
                        <select name="" id="" class="border border-gray-300 rounded-sm w-14 p-2 text-sm">
                            <option value="">10</option>
                            <option value="">20</option>
                            <option value="">50</option>
                        </select>
                        <label for="">Per Page</label>
                    </div>

                </div>
                <a href=""
                    class="mt-20 inline-block border border-black p-2 w-40 text-center bg-black text-white hover:bg-white hover:text-black">Tambah
                    Alamat</a>


                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>

        </div>
    </div>
@endsection
