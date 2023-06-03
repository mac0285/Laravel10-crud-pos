<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	use HasFactory;

	protected $table = 'barang';

	protected $fillable = ['plu',
							'nama_barang',
							'kategori_barang',
							'prices',
							'margin',
							'ppn',
							'qty',
							'tot_prices',
							'sup1',
							'sup2',
							'sup3',
							'update_by',
							'active'];

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}
