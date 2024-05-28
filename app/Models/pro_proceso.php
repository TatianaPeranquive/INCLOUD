<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\doc_documento;
class pro_proceso extends Model
{
    use HasFactory;
    protected $primaryKey = 'proc_id';
   public function publicaciones()
   {
        return $this->hasMany(doc_documento::class, 'doc_id_proceso');
   }
}
