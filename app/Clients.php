<?php

namespace Login;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'Clients';

    protected $fillable = ['firstName', 'secondName', 'birthDate', 'father', 'mom'];

    public $timestamps = true;
}
