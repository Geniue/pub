<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceInfo extends Model
{
    use HasFactory;
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
