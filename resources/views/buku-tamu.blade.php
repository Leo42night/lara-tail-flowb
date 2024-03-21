<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buku-Tamu</title>
    @include('layout.partial.link')
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    @include('layout.local.nav')
    <h1>Buku-Tamu</h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nomor HP
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Asal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tujuan
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Abdul Somad
                    </th>
                    <td class="px-6 py-4">
                        0821481111
                    </td>
                    <td class="px-6 py-4">
                        Masjid
                    </td>
                    <td class="px-6 py-4">
                        Berdakwah
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Albert Einstein
                    </th>
                    <td class="px-6 py-4">
                        1212112011
                    </td>
                    <td class="px-6 py-4">
                        Germany
                    </td>
                    <td class="px-6 py-4">
                        Lecture
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Gajah Mada
                    </th>
                    <td class="px-6 py-4">
                        010101011101
                    </td>
                    <td class="px-6 py-4">
                        Nusantara
                    </td>
                    <td class="px-6 py-4">
                        Nasionalisme Lokal
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @include('layout.partial.script')
</body>

</html>