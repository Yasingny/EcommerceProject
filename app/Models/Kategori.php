<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;


    protected $table="kategori";
    protected $guarded=[];
    const CREATED_AT = 'Oluşturma_tarihi';
    const UPDATED_AT = 'Güncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';
}
