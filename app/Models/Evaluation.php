<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'score', 'comments', 'half_year_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function halfYear()
    {
        return $this->belongsTo(HalfYear::class);
    }
}
