<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function info()
    {
        return $this->hasone(InvoiceInfo::class);
    }
    public function items(){
        return $this->hasMany(InvoiceItem::class,'invoice_id');
    }
    public function payment(){
        return $this->hasone(Payment::class,'invoice_id');
    }
}
