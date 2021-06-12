<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;// aystex miacnum enq mer file-i derictorian kcelu hamar
use App\Models\Contact;

class ContactController extends Controller
{

    public function submit(ContactRequest $req)
    {
       // dd($req); kverararcni amboxj request@
        //dd($req->input('subject')); kveradarcni requesti,imput dashteric miay subject@
       /* $validation = $req->validate([
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ]);*/

        $contact = new Contact();// dimum enq App\Models\Contact
        $contact->name = $req->input('name');// isk sranq mer db-ic versrac columneri anunnern en bolor@
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save(); //functioni npatakn e formayic havaqel bolor tvya;ner@ db-i mej
        
        return redirect()->route('home')->with('success', 'your registration is successful');
    }

    public function allData(){ // funkciayi npatakn e bolor tvyalner@ hanel contact tabli mejic
        /*$contact = new Contact;
        dd($contact->all()); ayl@ntranq@ nerqevum*/

        /*$contact = Contact::all();
        dd($contact);*/

        //dd(Contact::all());

       /*--- return view('messages', ['data' => Contact::all()]);db-ic hanuma amboxj tvjalner@*/

       $contact = new Contact;
       //return view('messages', ['data'=>$contact->all()]);db-ic vercnum enq amboxj tvyaln@
      // return view('messages', ['data'=>$contact->find(1)]);grum enq aranc cikli
      //return view('messages', ['data'=>[$contact->inRandomOrder()->first()]]); es harcum@ katarvum e patahakanutyan sczbunqov ev first nshelu depqum kntrvi henc arajin tox@

      //return view('messages', ['data'=>$contact->inRandomOrder()->get()]); es depqum khani bolor tvyalner@ sakayan patahakanutyan skzbunqov 

      //return view('messages', ['data'=>$contact->orderBy('id', 'asc')->get()]); stanum e bolor tvyalner@ tvyal depqum kargavorvac @st id-ii ev achman kargov

      //return view('messages', ['data'=>$contact->orderBy('id', 'desc')->take(2)->get()]); tvyal depqum kvercni arajin 2 tox@ kargavorvac @st id-ii desc tarberakov

      //return view('messages', ['data'=>$contact->orderBy('id', 'asc')->take(1)->skip(1)->get()]); tvyal depqum menq verjnum enq boloric 1 tox kargavorvac @st id-ii ask tarberakov,1 tox bac toxneluc heto

      //return view('messages', ['data'=>$contact->where('name','=','Narek')->get()]); stanum enq ayn bolor toxer@ vortex name-@ hamarjeq e Narek-in, arajin parametr@ klini columi anun@,erkrord@ hamamaturtyan cankacac nshan,errod@ arjeq@

      return view('messages', ['data'=>$contact->all()]);

    }

    public Function showOneMessage($id){
        $contact = new Contact;
        return view('one-message', ['data'=>$contact->find($id)]);
    }

    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message', ['data'=> $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req){
    
 
         $contact = Contact::find($id);// dimum enq App\Models\Contact
         $contact->name = $req->input('name');// isk sranq mer db-ic versrac columneri anunnern en bolor@
         $contact->email = $req->input('email');
         $contact->subject = $req->input('subject');
         $contact->message = $req->input('message');
 
         $contact->save(); //functioni npatakn e formayic havaqel bolor tvya;ner@ db-i mej
         
         return redirect()->route('contact-data-one', $id)->with('success', 'your updateing is successful');
     }

     public function deleteMessage($id){
         Contact::find($id)->delete();

         return redirect()->route('contact-data')->with('success', 'your deleting is successful');

     }
}
