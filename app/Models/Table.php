<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';
    protected $fillable = ['active', 'name1', 'phone1', 't1', 'name2', 'phone2', 't2'];

    public static function layout() {
        return self::select('id', 'active')->get();
    }
}
