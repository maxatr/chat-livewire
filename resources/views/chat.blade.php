@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Rooms</h3>
    <div class="row">
        <div class="col-md-2">
            @foreach($rooms as $room)
                <div>
                    <a href="{{ route('chat.room', $room) }}">{{ $room->title }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
