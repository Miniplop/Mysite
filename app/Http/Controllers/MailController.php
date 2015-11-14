<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 09/11/2015
 * Time: 15:41
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Input;
use Validator;

class MailController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmail(Request $request)
    {
        $validation = Validator::make(Input::all(), array(
                'name' => 'required',
                'email' => 'required',
                'body' => 'required'
            )
        );

        if($validation->fails()) {
            return $validation->errors()->first();
        } else {
            $data = [
                "name"=> Input::get('name'),
                "subject"=> Input::get('subject'),
                "body" => Input::get('body')
            ];

            Mail::send('emails.contact', $data, function ($message) {
                $message->from('tiner@hotmail.fr', 'Kévin Jean');
                $message->to("kevin.jean@ensimag.grenoble-inp.fr");
                $message->subject("Website Kévin Jean");
            });
        }




    }
}