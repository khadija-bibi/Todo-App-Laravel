@extends("layouts.default")

@section("content")
<div class="d-flex align-items-center">
    <div class="container card shadow-sm " style="margin-top:100px;max-width: 500px">
        <div class="fs-3 fw-bold text-center mt-3">
            {{ isset($task) ? 'Edit Task' : 'Add New Task' }}
        </div>
        <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.add.post') }}" method="POST" class="p-3">
            @csrf
            <div class="mb-3">
                <input type="text" name="title" class="form-control" value="{{ $task->title ?? '' }}" placeholder="Task Title">
            </div>
            <div class="mb-3">
                <input type="datetime-local" class="form-control" id="deadline" name="deadline" 
                       value="{{ isset($task) ? date('Y-m-d\TH:i', strtotime($task->deadline)) : '' }}">
                <small class="form-text text-muted text-end d-block">Please select a deadline (e.g., 2025-12-31 23:59)</small>
            </div>
            <div class="mb-3">
                <textarea name="description" style="resize: none" class="form-control" rows="3" placeholder="Task Description">{{ $task->description ?? '' }}</textarea>
            </div>
            @if (session()->has("success"))
                <div class="alert alert-success">
                    {{session()->get("success")}}
                </div>
            @endif
            @if (session("error"))
                <div class="alert alert-danger">
                    {{session("error")}}
                </div>
            @endif
            <button class="btn btn-outline-primary " type="submit">
                           {{ isset($task) ? 'Save' : 'Submit' }}
            </button>
        </form>
    </div>
</div>


@endsection
