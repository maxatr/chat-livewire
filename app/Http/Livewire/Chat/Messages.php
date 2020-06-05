<?php

namespace App\Http\Livewire\Chat;

use App\Message;
use Livewire\Component;

class Messages extends Component
{
    public $messages;

    public function mount(object $messages)
    {
        $this->messages = $messages;
    }

    public function render()
    {
        return view('livewire.chat.messages');
    }

    public function getListeners()
    {
        return [
            'message.added' => 'prependMessage'
        ];
    }

    public function prependMessage(int $id)
    {
        $this->messages->prepend(Message::find($id));
    }
}
