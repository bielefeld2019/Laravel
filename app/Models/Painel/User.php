<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
		'name',
		'password'];
}
