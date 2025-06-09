<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContracts extends Model
{
    protected $fillable = [
        'UserID',
        'ContractID',
        'Amount',
        'StartDate',
        'EndDate',
        'PaymentDates',
    ];
    use HasFactory;

    protected $casts = [
        'PaymentDates' => 'array',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'UserID' , '');
    }

}
