<div>
    @if($messages->count())
        @foreach($messages as $message)
            <div class="mb-2 pb-2 border-bottom">
                <div>
                    <strong>{{ $message->user->name }}</strong>
                    <time>{{ $message->created_at->toDateTimeString() }}</time>
                    <span>{{ $message->body }}</span>
                </div>
            </div>
        @endforeach
    @else
        No messages here
    @endif
</div>
