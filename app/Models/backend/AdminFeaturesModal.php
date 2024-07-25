<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminFeaturesModal extends Model
{
    use HasFactory;
    protected $table = 'features';
    protected $primarykey = 'id';

    protected $fillable = [
        'icon', 'title', 'description', 'status'
    ];
}
