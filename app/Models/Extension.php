<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'project_type',
        'start_date',
        'end_date',
        'months',
        'status',
        'proponents',
        'description',
        'terminal_report', 
        'moa',             
        'mou',              
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teamMembers()
{
    return $this->belongsToMany(User::class, 'extension_user', 'extension_id', 'user_id');
}

}
