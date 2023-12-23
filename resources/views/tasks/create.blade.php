<!-- resources/views/tasks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Créer une Tâche</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label for="title">Titre :</label>
        <input type="text" name="title" required>

        <label for="description">Description :</label>
        <textarea name="description"></textarea>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
