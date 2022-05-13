<form action="{{ $mode == 'edit' ? route('contacts.update', ['contact' => $contact->id ?? '']) : route('contacts.store') }}"
    method="POST">
    @csrf
    @if ($mode == 'edit')
        @method('PUT')
    @endif
    <label for="name"></label>Name<input placeholder="Name" value="{{ isset($contact) ? $contact->name : '' }}" type="text"
        class="form-control col-3 m-2" name="name" id="name">
    <label for="last_name"></label>Last Name<input placeholder="Last Name"
        value="{{ isset($contact) ? $contact->last_name : '' }}" type="text" class="form-control col-3 m-2" name="last_name"
        id="last_name">
    <label for="phone"></label>Phone<input placeholder="Phone" value="{{ isset($contact) ? $contact->phone : '' }}"
        type="text" class="form-control col-3 m-2" name="phone" id="phone">
    <button class="btn btn-primary m-2">Update</button>
</form>
