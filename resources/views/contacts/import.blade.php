@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Import Contacts
            </div>
            <div class="card-body">
                <form action="{{ route('contacts.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="contacts" id="contacts">
                    <button class="btn btn-primary">Import</button>
                </form>
            </div>
        </div>
    </div>
@stop
