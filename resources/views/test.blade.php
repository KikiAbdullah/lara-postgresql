<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">NO.</th>
                                <th class="py-3 px-6 text-left">Nama Barang</th>
                                <th class="py-3 px-6 text-center">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($transaksi as $data_transaksi)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6"></td>
                                <td class="py-3 px-6">{{ $data_transaksi->nama_barang }}</td>
                                <td class="py-3 px-6">{{ $data_transaksi->tanggal_transaksi }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>