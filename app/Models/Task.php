<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'name',
        'description',
        'company_id',
        'days',
        'hours',
        'user_id',
        'project_id'

    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }


}
