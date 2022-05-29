<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable = ['name', 'message', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}