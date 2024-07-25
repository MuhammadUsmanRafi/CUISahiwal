<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleModal extends Model
{
    use HasFactory;
    protected $table = "schedule";
    protected $primary_key = "id";

    public function events()
    {
        return $this->hasMany(EventModal::class, 'schedule_id', 'id');
    }
}
