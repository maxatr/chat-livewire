@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">{{ $room->title }}</h3>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                @livewire('chat.messages', ['messages' => $messages])
                @livewire('chat.new-message', ['room' => $room])
            </div>
        </div>
    </div>
@endsection
