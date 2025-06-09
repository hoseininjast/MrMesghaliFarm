<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContractPayments extends Model
{
    protected $fillable = [
        'ContractID',
        'PaymentDate',
        'Amount',
        'Percent',
        'VerificationNumber',
        'ReferenceNumber',
        'Status',
    ];

    use HasFactory;

    public function Contract()
    {
        return $this->hasOne(Contracts::class, 'ContractID' , 'id');
    }

}
