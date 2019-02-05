<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Telegram;

class ContactController extends Controller
{

    const BOT_API_KEY = "646167897:AAEI4LNicWW08rrU8f3I9hd_7yGivI3SR5Q";
    const BOT_USERNAME = "@BumeenGroupBot";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function contact(Request $request)
    {
        $body = "New contact from website ❤️ \n\n";
        $body .= "Name: <b>{$request->post('name')}</b> \n";
        $body .= "Email: <b>{$request->post('email')}</b> \n";
        $body .= "Phone: <b>{$request->post('phone')}</b> \n";
        $body .= "Needed service: <b>{$request->post('service')}</b> \n";
        $body .= "Budget: <b>{$request->post('from-value')} - {$request->post('to-value')}</b> \n";
        $body .= "Message: \n{$request->post('message')} \n";

        try {
            $telegram = new Telegram(self::BOT_API_KEY, self::BOT_USERNAME);
            $result = \Longman\TelegramBot\Request::sendMessage([
                'chat_id' => -1001350405536,
                'text'    => $body,
                'parse_mode' => 'html'
            ]);
            return redirect('/?status=1#ask');
        } catch (TelegramException $e) {
            return redirect('/?status=0#ask');
        }
        return redirect('/?status=0#ask');
    }
}
