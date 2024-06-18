<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::all();
        return view('dash.contact.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function destroy($id)
    {

        Contact::find($id)->delete();
        return redirect()->route('dashboard.messages.index');
    }
}
