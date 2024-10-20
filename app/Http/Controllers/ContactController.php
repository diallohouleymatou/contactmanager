<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //
    public function ajouter(Request $request){
        if ($request->isMethod('post')){
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->email = $request->email;
        $contact->user_id = Auth::id();
        $contact->save();
        return redirect('/home');
    }
    return view ('ajouter');
    }

    public function modifier( Contact $contact ,Request $request){

        if ($request->isMethod('post')){
           $data = $request->validate([
                'nom'=>'required|min:2',
                'prenom'=>'required|min:5',
                'email'=>'required|email',

            ]);
            $contact->fill($data);
            $contact->save();
            return redirect('/home');
}
        return view('modifier',compact('contact'));
    }

    public function supprimer(Contact $contact){
        $contact->delete();
        return redirect('/home');
    }
}
