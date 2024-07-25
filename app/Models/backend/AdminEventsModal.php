<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminEventsModal extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primarykey = 'id';

    protected $fillable = ['starttime', 'endtime', 'imageurl', 'speaker', 'designation', 'title', 'description', 'schedule_id'];

    public function schedule()
    {
        return $this->belongsTo(AdminSessionsModal::class);
    }
}
