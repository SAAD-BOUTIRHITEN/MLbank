<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class clien implements FromQuery, WithMapping, WithHeadings
{
    public function query()
    {
        return Client::query();
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->Nom,
            $user->prenom,
            $user->email,
            $user->Gender,
            $user->Married,
            $user->Dependents,
            $user->Education,
            $user->Self_Employed,
            $user->ApplicantIncome,
            $user->LoanAmount,
            $user->Loan_Amount_Term,
            $user->Credit_History,
            $user->Property_Area,
            $user->created_at,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'nom',
            'prenom',
            'email At',
            'genre',
            'Marié(e)',
            'Personnes à charge',
            'Éducation,',
            ' Travailleur indépendant',
            'salaire',
            'Credit,',
            'duree de credit',
            'Histoire de credit',
            'Property_Area',
            'créé à',
        ];
    }
}