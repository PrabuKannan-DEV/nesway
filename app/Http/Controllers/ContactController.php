<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('welcome', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'last_name' => 'string|required',
            'phone' => 'string|required'
        ]);
        Contact::create($data);

        return redirect()->route('contacts.index')->with('success','Contact created successfully!');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success','Contact deleted successfully!');
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'last_name' => 'string|required',
            'phone' => 'string|required'
        ]);
        $contact->update($data);

        return redirect()->route('contacts.index')->with('success','Contacts updated successfully!');
    }

    public function import()
    {
        return view('contacts.import');
    }

    public function upload(Request $request)
    {
        $path = $request->file('contacts')->store('contacts');
        $xmlContents = Storage::disk('local')->get($path);
        $xmlObject = simplexml_load_string($xmlContents);

        $json = json_encode($xmlObject);
        $phpDataArray = json_decode($json, true);
        if(count($phpDataArray['contact']) > 0){

            $dataArray = array();

            foreach($phpDataArray['contact'] as $index => $data){

                $dataArray[] = [
                    "name" => $data['name'],
                    "last_name" => $data['lastName'],
                    "phone" => $data['phone'],
                ];
            }

            Contact::insert($dataArray);

            return redirect()->route('contacts.index')->with('success','Contacts imported successfully!');
        }
    }

}
