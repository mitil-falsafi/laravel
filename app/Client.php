<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =['firstName', 'lastName', 'identityCode', 'phoneNumber', 'birthDate','address','foundBy'];

}
