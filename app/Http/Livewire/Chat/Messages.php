<?php

namespace App\Http\Livewire\Chat;

use App\Message;
use App\Room;
use Livewire\Component;

class Messages extends Component
{
    public $messages;
    public $roomId;

    /**
     * @param Room $room
     * @param object $messages
     */
    public function mount(Room $room, object $messages)
    {
        $this->messages = $messages;
        $this->roomId = $room->id;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.chat.messages');
    }

    /**
     * @return array
     */
    public function getListeners()
    {
        return [
            'message.added' => 'prependMessage',
            "echo-private:chat.{$this->roomId},Chat\\MessageAdded" => 'prependMessageFromBroadcast'
        ];
    }

    /**
     * @param int $id
     */
    public function prependMessage(int $id)
    {
        $this->messages->prepend(Message::find($id));
    }

    /**
     * @param array $message
     */
    public function prependMessageFromBroadcast(array $message)
    {
        $this->prependMessage($message['message']['id']);
    }
}
