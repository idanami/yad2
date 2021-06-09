<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GetContact extends Controller
{
    public function getContacts(Request $request){
        $contact = Contact::where('id','=',$request->id)->get();
        return Response::json($contact);
        return response()->json($contact);
        }
}
