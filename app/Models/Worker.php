<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Worker extends Model
{
	use SoftDeletes;
	use HasFactory;

	protected $table = "workers_tbl";
	protected $fillable = array("name", "email", "sector", "enterprise_id");

	public function enterprise(): HasOne
	{
		return $this->hasOne(Enterprise::class);
	}

	public function sale(): BelongsTo
	{
		return $this->belongsTo(Sale::class);
	}
}
