<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
       protected $fillable = [
        '',
        'email',
        'password',
        // 'role'   remind me here
    ];

      // a user owns the vote
     public function owner() : BelongsTo{
        return $this->BelongsTo(User::class);
    }

   // candidate will receive
    public function bids() : BelongsTo{
        return $this->hasMany(Bid::class);
    }
    
}
