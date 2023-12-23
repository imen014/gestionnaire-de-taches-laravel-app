<!-- resources/views/tasks/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Modifier la Tâche</h2>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titre :</label>
        <input type="text" name="title" value="{{ $task->title }}" required>

        <label for="description">Description :</label>
        <textarea name="description">{{ $task->description }}</textarea>

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
