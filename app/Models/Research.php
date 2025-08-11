<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $table = 'researches';

    protected $fillable = [
        'title',
        'project_type',
        'status',
        'start_date',
        'end_date',
        'months',
        'description',
        // 'user_id',
        'proponents',
        'imrad_link',
        'moa_link',
        'mou_link',
        'year1_q1_link',
        'year1_q2_link',
        'year1_q3_link',
        'year1_q4_link',
        'year2_q1_link',
        'year2_q2_link',
        'year2_q3_link',
        'year2_q4_link',
        'year3_q1_link',
        'year3_q2_link',
        'year3_q3_link',
        'year3_q4_link',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
public function users()
{
    return $this->belongsToMany(User::class, 'research_user', 'research_id', 'user_id');
}
public function teamMembers()
{
    return $this->belongsToMany(User::class, 'research_user', 'research_id', 'user_id');
}

}
