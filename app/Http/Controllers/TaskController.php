<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; // Crea il Task.

class TaskController extends Controller
{
    // Mostra l'elenco delle attività
    public function index()
    {
        $tasks = Task::all(); // Recupera tutte le attività dal database
        return view('tasks.index', compact('tasks'));
    }

    // Mostra il form per creare una nuova attività
    public function create()
    {
        return view('tasks.create');
    }

    // Salva una nuova attività nel database
    public function store(Request $request)
    {
        // Valida i dati inviati dal form
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Crea una nuova istanza di Task con i dati inviati dal form
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Reindirizza alla pagina di elenco delle attività
        return redirect('/tasks');
    }

    // Mostra una singola attività
    public function show($id)
    {
        $task = Task::findOrFail($id); // Trova l'attività con l'ID fornito
        return view('tasks.show', compact('task'));
    }

    // Mostra il form per modificare un'attività esistente
    public function edit($id)
    {
        $task = Task::findOrFail($id); // Trova l'attività con l'ID fornito
        return view('tasks.edit', compact('task'));
    }

    // Salva le modifiche a un'attività nel database
    public function update(Request $request, $id)
    {
        // Valida i dati inviati dal form
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Trova l'attività con l'ID fornito e aggiorna i suoi dati
        $task = Task::findOrFail($id);
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Reindirizza alla pagina di visualizzazione dell'attività
        return redirect('/tasks/' . $id);
    }
}
