<?php

namespace App\Http\Controllers;

use App\Models\doc_documento;
use App\Models\pro_proceso;
use App\Models\tip_tipo_doc;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class doc_documento_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista_documentos = doc_documento::latest()->get();
        return view('index',[
            'lista_documentos'=> $lista_documentos
            ]);
    }

    /**
     * Crear consecutivo único
    */
    function generarCodigoConsecutivo()
    {
        $ultimo_codigo = doc_documento::latest()->value('doc_codigo');

        if (isset($ultimo_codigo) && !empty($ultimo_codigo)){
            $nuevo_codigo = $ultimo_codigo + 1;
        }else {
            $nuevo_codigo = 0;
        }

        while (doc_documento::where('doc_codigo', $nuevo_codigo)->exists()) {
            $nuevo_codigo++;
        }
        return $nuevo_codigo;
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pro_procesos = pro_proceso::latest()->get();
        $tip_tipo_docs = tip_tipo_doc::latest()->get();
        return view('create',[
        'pro_procesos'=> $pro_procesos,
        'tip_tipo_docs'=> $tip_tipo_docs,
        'nuevo_codigo'=> $this->generarCodigoConsecutivo()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //dd($request->all());// Imprime los datos ingresados en el formulario de create
        $request->validate(([
            'doc_nombre' => 'required',
            'doc_codigo' => 'required'
        ]));

       doc_documento::create($request->all());// Inserta los datos del request en la bd
       return redirect()->route('CRUD_documentos.index')->with('success', 'Documento creado con éxito. ')
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(doc_documento $doc_documento)
    {
        //
    }


    /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return Response
     */
    public function edit($doc_documento_id)
    {
        $doc_documento_find = DB::select('SELECT * FROM doc_documentos WHERE doc_id = ?', [$doc_documento_id]);
        if (empty($doc_documento_find)) {
            return redirect()->route('CRUD_documentos.index')->with('error', 'Documento no encontrado.');
        }
        $doc_documento1 = $doc_documento_find[0];
        return view('edit', compact('doc_documento1'));
    }

    /**
     *  Store a editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request)
    {
        $data = $request->all();
        // $doc_documento->update($request->all());
        $doc_documento = doc_documento::find($data["doc_id"]);
        $doc_documento->doc_nombre     = $data["doc_nombre"];
        $doc_documento->doc_id_proceso = $data["doc_id_proceso"];
        $doc_documento->doc_id_tipo    = $data["doc_id_tipo"];
        $doc_documento->doc_codigo     = $data["doc_codigo"];
        $doc_documento->doc_contenido  = $data["doc_contenido"];
        $doc_documento->save();
        return ['editado'=>$doc_documento];
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doc_documento $doc_documento)
    {
        dd($doc_documento);
    }
}
