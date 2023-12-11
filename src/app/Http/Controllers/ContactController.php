<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;



class ContactController extends Controller
{
  public function index()
  {
    $contacts = Contact::all();
    return view('contact', compact('contacts'));
  }

  public function add()
  {
    return view('contact');
  }

  public function create(ContactRequest $request)
  {
    $form = $request->all();
    contact::create($form);
    return redirect('/contact');
  }

  public function confirm(Request $request)
  {
    $first_name = $request->input('first_name');
    $last_name = $request->input('last_name');
    $gender = $request->input('gender');
    $email = $request->input('email');
    $first_tel = $request->input('first_tel');
    $second_tel = $request->input('second_tel');
    $third_tel = $request->input('third_tel');
    $address = $request->input('address');
    $building = $request->input('building');
    $content = $request->input('content');


    
    $contact = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'gender' => $gender,
        'email' => $email,
        'address' => $address,
        'first_tel' => $first_tel,
        'second_tel' => $second_tel,
        'third_tel' => $third_tel,
        'building' => $building,
        'content' => $content,

     
    ];

   return view('confirm', compact('contact'));
  }
  
  public function store() {
    $contact = $request->only(['first-name','last-name', 'gender', 'email', 'first_tel','second_tel','third_tel','address', 'building', 'content']);
    Contact::create($contact);
    return view('thanks');
  }



}