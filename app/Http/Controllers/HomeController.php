<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
class HomeController extends Controller
{
    public function index()
    {
        
        $posts = Post::paginate(8);
        //dd($posts);
        return view('article', compact('posts'));
    }

    public function readMore($id)
    {
        $data = Post::where('id', '=', $id)->first();
        //$famous = Post::where('id', '=', 1)->orderBy('views', 'desc')->get();
        //$data->increment('views');
        //dd($data);
        return view('articleMore', compact('data'));
    }

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

        return redirect()->route('alert.succes')->with('success','Added successfully');

    }


}
