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
                <div class="font-semibold text-left">Durée</div>
            </th>
            <th class="p-2 whitespace-nowrap">
                <div class="font-semibold text-center">status</div>
            </th>
        </tr>
    </thead>
    <tbody class="text-sm divide-y divide-gray-100" id="client-table">
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
                    <div class="text-left font-medium text-green-500">
                        {{ $key->Loan_Amount_Term }}
                    </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-lg text-center">
                        @if ($key->Preditct->status == 'Yes')
                            <x-primary-button class="ml-2">
                                {{ __('accepté') }}</x-succe-button>
                            @else
                                <x-test-button class="ml-2">
                                    {{ __('refusée') }}</x-test-button>
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

