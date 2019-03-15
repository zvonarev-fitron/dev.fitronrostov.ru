<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comp extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name', 'name_full', 'legal_addr', 'fact_addr', 'inn', 'ogrnip', 'okpo', 'name_bank', 'r_schet', 'k_schet', 'bik', 'b_inn', 'kpp', 'phone', 'fax', 'work', 'email'];
}
