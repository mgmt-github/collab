<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Wishlist extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the user for the Wishlist
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function influencer(): HasOne
    {
        return $this->HasOne(User::class, 'id', 'influencer_id');
    }
    public function user(): HasOne
    {
        return $this->HasOne(User::class, 'id', 'user_id');
    }
}
