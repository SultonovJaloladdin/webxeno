<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
class HomeController extends Controller
{
    public function index()
    {
        
        $posts = Post::orderBy('id', 'desc')->get();
        //dd($posts);
        return view('article', compact('posts'));
    }

    public function readMore( Post $id)
    {
        dd($id);
        return view('artcleMore', compact('post'));
    }

    // public function getIp()
    // {
    //     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //         $ip = $_SERVER['HTTP_CLIENT_IP'];
    //     } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //     } else {
    //         $ip = $_SERVER['REMOTE_ADDR'];
    //     }
    //     return $ip;
    // }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $name = $request->name;
		$email = $request->email;
		$subject = $request->subject;
		$message = $request->message;

        $token = env('CHAT_TOKEN');
        $chat_id = env('CHAT_ID');

        $arr = array(
            'User Name: '=> $name,
            // 'Ip: ' => getIp(),
            'Email: '=> $email,
            'Subject: '=> $subject,
            'Message: '=> $message,
         );
        $txt = "";
        foreach ($arr as $key => $value) {
            $txt .= "<i>" .$key ."</i> " .$value ."%0A"; 
         }

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

        if($sendToTelegram)
        {
            echo 'success';

        }else{
            echo '<h1> Do not send the comments . Try after some minute!</h1>';
        }
            
        

    }


}
