<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
        'user_id'

    ];

    public function user(){
        return $this->belongsToMany('App\Models\User');
    }

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }


}
