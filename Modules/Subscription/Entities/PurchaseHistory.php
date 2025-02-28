<?php

namespace Modules\Subscription\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class PurchaseHistory extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Subscription\Database\factories\PurchaseHistoryFactory::new();
    }

    public function provider(){
        return $this->belongsTo(User::class, 'provider_id');
    }
}
