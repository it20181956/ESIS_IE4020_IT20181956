<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [

        'id ',
        'PatientName',
        'Department',
        'Doctor',
        'PatientEmail',
        'PatientPhone',
        'Date',
        'Time',
        'Comments',
        'States'
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'Doctor'); // Assuming 'Doctor' is the foreign key column in the appointments table
    }
}
