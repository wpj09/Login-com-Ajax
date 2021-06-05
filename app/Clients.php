<?php

namespace Login;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';

    protected $fillable = ['firstName', 'secondName', 'birthDate', 'father', 'mom'];

    public $timestamps = true;
}
