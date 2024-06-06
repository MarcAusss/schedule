<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $table = 'dates';

    protected $primaryKey = 'id';

    protected $fillable = ['date'];

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
