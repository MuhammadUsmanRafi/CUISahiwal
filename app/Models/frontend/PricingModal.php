<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingModal extends Model
{
    use HasFactory;
    protected $table = "pricing";
    protected $primary_key = "id";
}
