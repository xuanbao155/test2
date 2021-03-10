<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $dateFormat = 'Y-M-d H:i:s';
    // public $primaryKey = 'Key';
    // public $incrementing = false;
    protected $fillable = [
        'title',
        'ProjectKey',
        'Key',
        'Summary',
        'IssueType',
        'Status',
        'Priority',
        'Resolution',
        'Assignee',
        'IssueType',
        'Reporter',
        'Creator',
        'Images',
        'Description',
    ];
}
