<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModal extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = 'id';

    public function schedule()
    {
        return $this->belongsTo(ScheduleModal::class, 'schedule_id', 'id');
    }
}
