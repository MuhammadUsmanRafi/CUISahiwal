<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardEventsModal extends Model
{
    use HasFactory;
    protected $table = "comingsoonevents";
    protected $primarykey = "id";
}
