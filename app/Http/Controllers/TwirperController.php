<?php

namespace App\Http\Controllers;

use App\Models\Twirp;//colocar essa manualmente
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class TwirperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $twirps = Twirp::with('user')
            -> latest()
            ->take(50)
            ->get();

            return view('home', ['twirp'=>$twirps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message'=>'required|string|max:255'
                //Rule::unique('twirps')->where(function ($query) use ($user) { // isso serve pra impedir que um twirp seja igual a outro , enviado por um só usuario//
                //return $query->where('user_id', $user->id);
                //})
        ],
        [
             'message.required' => 'Por favor digite algo para enviar um twirp!',
            'message.max' => 'Twirps tem que ser menores que 255 caracteres.',
        ]);

        auth()->user()->twirps()->create($validated);
      
        return redirect('/')->with('success', 'Seu twirp foi postado com sucesso!');//redireciona pro raiz com um 'flash' de dado , que aqui no caso é um status de sucesso com a mensgame de twirp criado
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Twirp $twirp) //ao invés de passar uma variavel do principal pra o metodo que chama o edit, ele passa o id da twirp pela route,se eu entendi cert//
    {
         $this->authorize('update', $twirp);

        return view('twirps.edit',compact('twirp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Twirp $twirp)
    {
        $this->authorize('update', $twirp);

        $validated = $request->validate([
            'message'=>'required|string|max:255'
        ],
        [
            'message.required' => 'Por favor digite algo para enviar um twirp!',
            'message.max' => 'Twirps tem que ser menores que 255 caracteres.',
        ]);

        $twirp->update($validated);//ele pega a variavel valid//

        return redirect('/')->with('success', 'Seu twirp foi editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Twirp $twirp)
    {
        $this->authorize('update', $twirp);

        $twirp->delete();

        return redirect('/')->with('success', 'Seu twirp foi twirp!');
    }
}
