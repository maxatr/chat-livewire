<div x-data="usersScope()" x-init="listenWhisper">
    @if(!empty($users))
        @foreach($users as $user)
            <div>
                <a href="#">{{ $user['name'] }}</a>
                <span x-show="isTyping({{ $user['id'] }})">typing...</span>
            </div>
        @endforeach
    @endif
</div>

<script>
    function usersScope () {
        return {
            typing: [],
            isTyping (userId) {
               return this.typing[userId] || false
            },
            listenWhisper () {
                Echo.private('chat.{{ $roomId }}')
                    .listenForWhisper('typing', (e) => {
                        this.typing[e.id] = e.typing
                    })
            }
        }
    }
</script>
