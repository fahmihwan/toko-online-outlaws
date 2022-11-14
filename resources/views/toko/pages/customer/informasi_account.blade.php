@extends('toko.layout.main')

@section('container')
    <!-- conetent -->
    <div class=" md:flex w-full mt-10">
        <!-- sidebar -->
        @include('toko.components.sidebar-account')

        {{-- informasi  --}}
        <div class=" md:w-full px-10 ">
            <div class="m-2 py-4 ">
                <h1 class="font-bold text-2xl mb-7">Ubah Informasi Akun</h1>


                <form class="" action="/customer/account/store" method="POST">
                    <div class="w-full flex">
                        <div class="w-1/2 pr-20">
                            <h1 class="font-bold text-2xl pb-5 border-b-2 mb-10">Informasi Akun</h1>
                            <div class="mb-6  w-full  ">
                                <label class="mb-2 font-normal block" for="">Nama Depan <span
                                        class="text-red-600">*</span></label>
                                <input type="text" name="nama_depan" placeholder="Masukan nama Depan Anda"
                                    class="bg-gray-100 w-full border-b border-x-0 border-t-0">
                            </div>
                            <div class="mb-6 w-full  ">
                                <label class="mb-2 block" for="">Nama Belakang <span
                                        class="text-red-600">*</span></label>
                                <input type="text" name="nama_belakang" placeholder="Masukan nama Depan Belakang"
                                    class="bg-gray-100 w-full border-b border-x-0 border-t-0">
                            </div>
                            <div class="mb-6 w-full  ">
                                <label class="mb-2 block" for="">Tanggal Lahir <span
                                        class="text-red-600">*</span></label>
                                <div class="flex">
                                    <select name="tanggal" id="tanggal"
                                        class="bg-gray-100 mr-3 w-4/12 lg:w-4/12 border-b border-x-0 border-t-0">
                                        <option value="">Tanggal</option>
                                    </select>
                                    <select name="bulan" id="bulan"
                                        class="bg-gray-100 mr-3 w-4/12 lg:w-6/12 border-b border-x-0 border-t-0">
                                        <option value="">Bulan</option>
                                    </select>
                                    <select name="tahun" id="tahun"
                                        class="bg-gray-100 w-4/12 lg:w-4/12 border-b border-x-0 border-t-0">
                                        <option value="">Tahun</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-6 w-full ">
                                <label class="mb-2 block" for="">Jenis kelamin <span
                                        class="text-red-600">*</span></label>
                                <select name="jenis_kelamin" id=""
                                    class="bg-gray-100 w-full border-b border-x-0 border-t-0">
                                    <option value=""></option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="mb-6 w-full ">
                                <label class="mb-2 block" for="">Nomor Telepon <span
                                        class="text-red-600">*</span></label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        62
                                    </div>
                                    <input type="number" name="telp" id="telp"
                                        class="bg-gray-100 border-b border-x-0 border-t-0  text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                                        placeholder="">
                                </div>
                            </div>



                            <div class="mb-6 w-full lg:w-10/12 ">
                                <input type="checkbox" class="mr-5" id="ganti-email"> <label for="ganti-email"> Ganti
                                    Email</label><br><br>
                                <input type="checkbox" class="mr-5" id="gant-sandi"> <label for="gant-sandi"> Ubah Kata
                                    Sandi</label><br>


                            </div>
                            <div class="mb-6 w-32 ">
                                <button type="submit"
                                    class="w-full mb-0  text-white bg-black border-2 border-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm px-5 py-3 text-center
                                hover:bg-white hover:text-black 
                                hover:duration-300
                                ">
                                    Simpan
                                </button>
                            </div>
                        </div>


                        {{-- password --}}
                        <div class="w-1/2">
                            <h1 class="font-bold text-2xl pb-5 border-b-2 mb-10">
                                Ganti Alamat Email & Password

                            </h1>
                            <div class="mb-6 w-full lg:w-10/12 ">
                                <label class="mb-2 font-normal block" for="">Email <span
                                        class="text-red-600">*</span></label>
                                <input type="email" name="email" placeholder="Masukan Email Anda"
                                    class="bg-gray-100 w-full border-b border-x-0 border-t-0">
                            </div>
                            <div class="mb-6 w-full lg:w-10/12 ">
                                <label class="mb-2 font-normal block" for="">Kata Sandi Sekarang<span
                                        class="text-red-600">*</span></label>
                                <input type="password" name="password" placeholder="Masukan password Anda"
                                    class="bg-gray-100 w-full border-b border-x-0 border-t-0">
                            </div>
                            <div class="mb-6 w-full lg:w-10/12 ">
                                <label class="mb-2 font-normal block" for="">Kata Sandi Baru<span
                                        class="text-red-600">*</span></label>
                                <input type="password" name="password" placeholder="Masukan password Anda"
                                    class="bg-gray-100 w-full border-b border-x-0 border-t-0">
                            </div>
                            <div class="mb-6 w-full lg:w-10/12 ">
                                <label class="mb-2 font-normal block" for="">Konfirmasi Kata Sandi <span
                                        class="text-red-600">*</span></label>
                                <input type="password" name="confirm_password"
                                    placeholder="Masukan password Anda kembali"
                                    class="bg-gray-100 w-full border-b border-x-0 border-t-0">
                            </div>

                        </div>
                    </div>






                </form>
            </div>



        </div>
    </div>
@endsection
