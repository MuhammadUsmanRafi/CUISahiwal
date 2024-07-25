<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturesModal extends Model
{
    use HasFactory;
    protected $table = "features";
    protected $primary_key = "id";
}
