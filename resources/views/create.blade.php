@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <div>
            <label for="title">
                Title
            </label>
            <input text='text' name="title" id="title" />
        </div>

        <div>
            <label for="description">
                Description
            </label>
            <textarea name="Description" id="Description" rows="5"></textarea>
        </div>

        <div>
            <label for="long_description">
                Long_Description
            </label>
            <textarea name="long_Description" id="long_Description" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Add Task</button>
        </div>

    </form>
@endsection
