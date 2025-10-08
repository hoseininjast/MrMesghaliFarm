<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulkPurchase extends Model
{
    protected $fillable = [
        'UserID',
        'Products',
        'Status',
        'Price',
        'Percentage',
        'Commission',
        '',
    ];
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class , 'UserID' , 'id');
    }
}
