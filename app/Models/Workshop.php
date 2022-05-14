<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    use HasFactory;

    protected $table = 'workshops';

    protected $primaryKey = 'id';

    public function event()
    {
        return $this->belongsTo(Event::class,'event_id','id');
    }
}
