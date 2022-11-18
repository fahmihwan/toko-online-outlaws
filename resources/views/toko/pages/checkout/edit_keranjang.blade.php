@extends('toko.layout.main')


@section('breadcrumb')
    <nav class="flex border  border-gray-200" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900  ">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <i class="fa-solid fa-chevron-right"></i>
                    <a href="/list-item" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2  ">List
                        Item</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center ">
                    <i class="fa-solid fa-chevron-right"></i>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 ">Perbarui Keranjang</span>
                </div>
            </li>
        </ol>
    </nav>
    @if ($errors->any())
        <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
            role="alert">
            <div>
                <i class="fa-solid fa-circle-exclamation"></i>
                <span class="font-medium">Ensure that these requirements are met:</span>
                <ul class="mt-1.5 ml-4 text-red-700 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@endsection

@section('container')
    <div class="md:flex">
        <!-- full image  -->
        <div class="w-full px-5 md:px-0 md:w-3/5 pt-5 md:pl-5 b">
            <h1 class="font-semibold pb-3">Perbarui Keranjang</h1>
            <div class="border">
                <img class="mx-auto w-10/12" src="{{ asset('./storage/' . $item->item->gambar) }}" alt="">
            </div>

        </div>


        <!-- sidebar -->
        <aside class="w-full md:w-2/5 border-r-2 px-5 pb-20 md:pb-0 md:px-20 pt-5 relative ">
            <!-- sticky top-0 -->

            <div class="sticky top-0 ">
                <!-- title & price -->
                <section class="mb-2">
                    <p class="text-lg font-normal mb-2">{{ $item->item->nama }}</p>
                    <p class="font-semibold">Rp. {{ number_format($item->item->harga, 0, '', '.') }}</p>
                </section>

                <!-- description -->
                <section class="mb-10">
                    <article class="font-light text-sm h-40 overflow-hidden">
                        {{ $item->item->deskripsi }}
                    </article>
                </section>

                <!-- form -->


                <section>
                    <form action="/checkout/cart/{{ $item->id }}/ajax" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-5">
                            <label for="ukuran-select" class="text-sm font-semibold mb-2 inline-block">Size <span
                                    class="text-red-600">*</span></label>
                            <br>
                            <select required class="border-gray-300 h-14 block w-full" name="ukuran_id" id="ukuran-select">
                                @foreach ($select_ukurans as $select)
                                    <option {{ $item->ukuran->nama == $select->ukuran->nama ? 'selected' : '' }}
                                        value="{{ $select->ukuran->id }}">{{ $select->ukuran->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="" class="text-sm font-semibold mb-2 inline-block">Kuantitas</label>
                            <br>
                            <div class="flex items-center">
                                <div>
                                    <select class="border-gray-300 block w-36" name="qty" id="">
                                        @if ($item->qty > 10)
                                            @for ($i = 0; $i <= $item->qty; $i++)
                                                <option {{ $item->qty == $i ? 'selected' : '' }}
                                                    value="{{ $i }}">
                                                    {{ $i }}</option>
                                            @endfor
                                        @else
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option {{ $item->qty == $i ? 'selected' : '' }}
                                                    value="{{ $i }}">
                                                    {{ $i }}</option>
                                            @endfor
                                        @endif
                                    </select>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-500">Tersisi <span id="stok-item">0</span> Items</p>
                                </div>
                            </div>

                        </div>
                        <div class="mb-4 flex">
                            <button type="submit"
                                class="border bg-black border-black  text-white hover:bg-white hover:text-black py-3 w-4/5">
                                Perbarui Keranjang
                            </button>
                        </div>
                    </form>


                </section>
            </div>
        </aside>
    </div>
@endsection



@section('script')
    <script>
        $(document).ready(function() {

            let item_id = {{ Js::from($item->item_id) }};
            get_stok_tersisa($('#ukuran-select').val())

            function get_stok_tersisa(ukuran_id) {
                $.ajax({
                    url: '/list-item/detail-item-stok-ajax',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        item_id: item_id,
                        ukuran_id: ukuran_id
                    },
                    success: function(response) {
                        if (response.qty) {
                            $('#stok-item').text(response.qty)
                        }
                        if (response.stok) {
                            $('#stok-item').text(response.stok)
                        }
                    },
                    error: function(error) {
                        // alert(error)
                        console.log(error.error)
                    }
                })
            }

            $('#ukuran-select').change(function() {
                // console.log($(this).val())
                get_stok_tersisa($(this).val())
            })
        })
    </script>
@endsection
