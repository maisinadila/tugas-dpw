<?php 

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class Produk extends Model{

	protected $table = 'produk';
	use ProdukAttributes, ProdukRelations;

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];
}