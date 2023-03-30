<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.4/dist/css/uikit.min.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">


                        <!-- Table -->

                        <header class="px-5 py-4 border-b border-gray-100 mt-10">
                            <h2 class="font-semibold text-gray-800">client</h2>
                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto">
                                @if (count($client) > 0)

                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Nom</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">salaire</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">credit</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-center">status</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100">
                                            @foreach ($client as $key)
                                                <tr>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img
                                                                    class="rounded-full"
                                                                    src="https://tse4.mm.bing.net/th?id=OIP.Xi5HZyCo4UpdOUF-pWEbGQHaHa&pid=Api&P=0"
                                                                    width="40" height="40" alt="Alex Shatov">
                                                            </div>
                                                            <div class="font-medium text-gray-800">
                                                                {{ $key->Nom }}<div></div>{{ $key->prenom }}</div>
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left">{{ $key->ApplicantIncome }}DH</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left font-medium text-green-500">
                                                            {{ $key->LoanAmount }}DH
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-lg text-center">
                                                            @if ($key->Preditct->status == 'Yes')
                                                                <x-succe-button class="ml-2">
                                                                    {{ __('Oui') }}</x-succe-button>
                                                            @else
                                                                <x-test-button class="ml-2">
                                                                    {{ __('No') }}</x-test-button>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    @else
                                        <p style="text-align:center;margin-top:17px;font-weight:700">Aucun resultat
                                            obtenu</p>
                                @endif
                                </table>

                            </div>

                        </div>
                        {{ $client->links() }}
                    </div>
                </div>
            </div>

        </div>

    </x-app-layout>

</body>

</html>
