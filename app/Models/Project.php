<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = ['name', 'email', 'message'];

    public function Contact()
    {
        return $this->hasMany(Contact::class, 'project_id');
    }
}