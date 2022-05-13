@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-end">
        </div>
        <div class="card m-5">
            <div class="card-header d-flex justify-content-between">
                <h4>
                    Contacts
                </h4>
                <div class="">
                    <a href="{{ route('contacts.create') }}" class="btn btn-sm btn-primary">New</a>
                    <a href="{{ route('contacts.import') }}" class="btn btn-sm btn-primary">Import</a>
                </div>
            </div>
            <div class="card-body">
                @if ($contacts->count())
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <td>Sno</td>
                            <td>Name</td>
                            <td>Last Name</td>
                            <td>Phone</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->last_name }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td><a class="btn btn-warning"
                                        href="{{ route('contacts.edit', ['contact' => $contact->id]) }}"><i
                                            class="fa fa-edit" aria-hidden="true"></i>
                                    </a></td>
                                <td>
                                    <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"
                                                onclick="return confirm('Are you sure?')"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="text-center">
                    <h4>
                        Your contacts list is empty <a href="{{ route('contacts.create') }}">create</a> or <a href="{{ route('contacts.import') }}">import</a> contacts to begin.
                    </h4>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
