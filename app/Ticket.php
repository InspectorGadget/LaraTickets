<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable = [
      'email', 'category_id', 'title', 'message', 'status'
    ];

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function status()
    {
        return $this->hasOne(TicketStatus::class, 'id', 'status');
    }

}
