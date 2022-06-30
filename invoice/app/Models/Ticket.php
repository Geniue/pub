<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function ticketdetail(){
        return $this->hasone(TicketDetail::class,'ticket_id');
    }
    public function attachments(){
        return $this->hasMany(Attachment::class,'ticket_id');
    }
}
