<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controletb extends Model
{
    use HasFactory;
    protected $fillable = ['nomeCadastro','turmaCadastro','respCadastro','emailCadastro','foneCadastro','endCadastro','relCadastro'];
}
