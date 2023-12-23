<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Liste des Tâches</h2>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->title }} - <a href="{{ route('tasks.edit', $task) }}">Modifier</a> | <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $task->id }}').submit();">Supprimer</a>
                <form id="delete-form-{{ $task->id }}" action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('tasks.create') }}">Ajouter une Tâche</a>
@endsection
