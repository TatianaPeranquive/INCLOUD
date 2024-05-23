<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\doc_documento;
class tip_tipo_doc extends Model
{
    use HasFactory;
    public function documentos()
    {
        return $this->hasMany(doc_documento::class, 'doc_id_tipo');
    }
}
