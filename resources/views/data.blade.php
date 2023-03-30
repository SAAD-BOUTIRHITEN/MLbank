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
                            <a href="{{ route('pdf') }}">
                                <x-primary-button class="ml-2"
                                    data-confirm="Are you sure you want to delete this item?">
                                    {{ __('PDF') }}</x-primary-button>
                            </a>

                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto">
                                @if (count($client) > 0)

                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">ID</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Nom</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Prenom</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">email</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-center">Credit</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100">
                                            <?php $id = 0; ?>
                                            @foreach ($client as $key)
                                                <?php $id++; ?>
                                                <tr>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            {{ $id }}
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">

                                                            <div class="font-medium text-gray-800">
                                                                {{ $key->Nom }}<div>
                                                                </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left">{{ $key->prenom }}

                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left font-medium text-green-500">
                                                            {{ $key->email }}
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-lg text-center">
                                                            {{ $key->LoanAmount }}DH
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
