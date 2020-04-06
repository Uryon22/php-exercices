<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     *  Table name in the database
     *
     * @var string
     */
    protected $table = 'persons';

    /**
     *  Attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['name', 'nickname', 'birthDate', 'numberLike'];
}
