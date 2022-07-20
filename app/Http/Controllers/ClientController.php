<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Expense;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

        return view('expenses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();

        return view('expenses.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $attributes = $request->only([
            'name',
            'email',
            'phone',
            'id_number'
        ]);

        Client::create($attributes);

        return redirect('/dashboard')->with('success', 'Despesa criada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $expense)
    {
        $user = auth()->user();

        if ($expense->user_id !== $user->id) {
            abort(404);
        }

        return view('expenses.edit', compact('user', 'expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $expense)
    {
        $user = auth()->user();

        if ($expense->user_id !== $user->id) {
            abort(403);
        }

        $expense->update(
            [
                'title' => $request->title,
                'value' => $request->value,
                'due_date' => $request->due_date
            ]
        );

        return redirect('/dashboard')->with('success', 'Despesa editada com sucesso');
    }

    public function show(Client $client)
    {
 

        return response()->json(
            $client = Client::find($client)
             
        );         
    }  
 
 



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $expense)
    { 
        $user = auth()->user();

        if ($expense->user_id !== $user->id) {
            abort(403);
        }

        $expense->delete();

        return redirect('/dashboard')->with('success', 'despesa Removida com sucesso');;
    }
}
