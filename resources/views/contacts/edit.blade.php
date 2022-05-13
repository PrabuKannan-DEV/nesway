@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Import Contacts
            </div>
            <div class="card-body">
                @component('contacts.form', ['mode' => 'edit', 'contact' => $contact])
                @endcomponent()
            </div>

        </div>
    </div>
    </div>
@stop
