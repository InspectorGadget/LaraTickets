<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable = [
      'email', 'category_id', 'title', 'priority', 'message', 'status'
    ];

    public function category() {
        $this->belongsTo(Category::class);
    }

}
