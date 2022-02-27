<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contact::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        
        return Contact::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Contact::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->update($request->all());
        return $contact;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Contact::destroy($id);
    }

        /**
     * Search for a specific contact information.
     *
     * @param  str  $parameter
     * @return \Illuminate\Http\Response
     */
    public function search($parameter)
    {   
        $parameter = explode('=', $parameter);

        return Contact::where($parameter[0], 'like', '%'.$parameter[1].'%')->get();
    }

    
        /**
     * Search for a specific contact information.
     *
     * @param  str  $parameter
     * @return \Illuminate\Http\Response
     */
    public function getContact(Request $request)
    {   
        
        $id = @$request['id'] ?? null;
        $email = @$request['email'] ?? null;
        $firstname = @$request['firstname'] ?? null;
        $lastname = @$request['lastname'] ?? null;
        $gender = @$request['gender'] ?? null;
        $address = @$request['address'] ?? null;
        $phone = @$request['phone'] ?? null;
        $created_at = @$request['created_at'] ?? null;

        $ordered_by = @$request['ordered_by'] ?? 'created_at';
        $ordered_by = in_array($ordered_by, ['id', 'email', 'firstname', 'lastname', 'gender', 'address', 'phone', 'created_at']) ? $ordered_by : 'created_at';

        $sorted_by = @$request['sorted_by'] ?? 'asc';
        $sorted_by = in_array($sorted_by, ['asc', 'desc']) ? $sorted_by : 'asc';

        $select = Contact::when($id, function($q, $id){
                return $q->where('id', $id);
            })
            ->when($email, function($q, $email){
                return $q->where('email', $email);
            })
            ->when($firstname, function($q, $firstname){
                return $q->where('firstname', $firstname);
            })
            ->when($lastname, function($q, $lastname){
                return $q->where('lastname', $lastname);
            })
            ->when($gender, function($q, $gender){
                return $q->where('gender', $gender);
            })
            ->when($address, function($q, $address){
                return $q->where('$address', $address);
            })
            ->when($phone, function($q, $phone){
                return $q->where('phone', $phone);
            })
            ->when($created_at, function($q, $created_at){
                return $q->where('created_at', $created_at);
            })
            ->orderBy($ordered_by, $sorted_by);

         return $select->get();   
    }

    
}
