<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workers extends Model
{
    use SoftDeletes;

	protected $table = "workers_tbl";
    protected $fillable = array("name", "email", "sector", "enterprise_id");
}