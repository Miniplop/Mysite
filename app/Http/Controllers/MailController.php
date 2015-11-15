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
use Illuminate\Support\Facades\Redirect;
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

    public function getContactUsForm(){

        //Get all the data and store it inside Store Variable
        $data = Input::all();

        //Validation rules
        $rules = array (
            //'first_name' => 'required', uncomment if you want to grab this field
            //'email' => 'required|email',  uncomment if you want to grab this field
            'message' => 'required|min:5'
        );

        //Validate data
        $validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
        if ($validator -> passes()){

            Mail::send('emails.feedback', $data, function($message) use ($data)
            {
                //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields
                $message->from('feedback@gmail.com', 'feedback contact form');
                //email 'To' field: cahnge this to emails that you want to be notified.
                $message->to('tiner@hotmail.fr', 'John')->subject('feedback form submit');

            });
            // Redirect to page
            return Redirect::to('/')
                ->with('message', 'Your message has been sent. Thank You!');


            //return View::make('contact');
        }else{
            //return contact form with errors
            return Redirect::to('/')
                ->with('error', 'Feedback must contain more than 5 characters. Try Again.');

        }
    }

}