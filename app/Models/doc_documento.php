<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doc_documento extends Model
{
   use HasFactory;
   protected $primaryKey = 'doc_id';

   protected  $fillable = ['doc_nombre', 'doc_codigo','doc_contenido' , 'doc_id_proceso', 'doc_id_tipo' ];
   public function tipoDocumento()
   {
       return $this->belongsTo(tip_tipo_doc::class, 'doc_id_tipo');
   }
}
