<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSessionsModal extends Model
{
    use HasFactory;
    protected $table = 'schedule';
    protected $primarykey = 'id';

    protected $fillable = ['day', 'dd', 'mm', 'yyyy'];

    public function events()
    {
        return $this->hasMany(AdminEventsModal::class);
    }
}
