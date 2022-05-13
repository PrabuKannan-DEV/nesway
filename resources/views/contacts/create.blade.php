@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                New Contact
            </div>
            <div class="card-body">
                @component('contacts.form', ['mode' => 'create'])
                @endcomponent()
            </div>

        </div>
    </div>
    </div>
@stop
