@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">{{ $room->title }}</h3>
        <div class="row">
            <div class="col-md-2">
                @livewire('chat.users', ['room' => $room])
            </div>
            <div class="col-md-10">
                @livewire('chat.messages', ['room' => $room, 'messages' => $messages])
                @livewire('chat.new-message', ['room' => $room])
            </div>
        </div>
    </div>
@endsection
