<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{

    protected $fillable = ['status_id', 'status_name'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'status', 'id');
    }

}
