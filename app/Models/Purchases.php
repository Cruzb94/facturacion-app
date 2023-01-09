<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function invoice() {
        return $this->belongsTo('App\Models\Invoices');
    }

    public function product() {
        return $this->belongsTo('App\Models\Products');
    }
}
