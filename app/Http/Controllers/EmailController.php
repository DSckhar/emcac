<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Mail;
use Illuminate\Http\Request;

use App\Models\Alunos;

class EmailController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = Auth::user();

        $aluno = Alunos::find($id);

        return view('admin.email.store', compact('user', 'aluno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $email = $request->except('_token');

        $id = $email['id'];
        $nomeResponsavel = $email['nomeResponsavel'];
        
        //email
        $mensagem = $email['mensagem'];
        $anexo = $email['arquivo'];
        $emailResponsavel = $email['emailResponsavel'];

        //storage_path('app/public/media/fotos/215002201910235db0cb0a74249.jpeg')
        
        Mail::send('admin.email.index', ['texto' => $mensagem, 'nomeResponsavel' => $nomeResponsavel], function($msg) use ($emailResponsavel, $anexo){
            //$msg->from('', 'EMCAC'); //email
            $msg->attach($anexo->getRealPath(), array(
                'as'   => 'Anexo.' . $anexo->getClientOriginalExtension(), 
                'mime' => $anexo->getMimeType()));
            $msg->to($emailResponsavel);
            $msg->subject('Boletim');
        });

        return redirect()->action('AlunosController@show', $id);
    }

    public function destroy($id)
    {
        //
    }
}
