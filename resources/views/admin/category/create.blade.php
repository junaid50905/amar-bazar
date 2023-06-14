@extends('admin.layouts.template')

@section('main-content')
    <div class="card mb-4">
        <h5 class="card-header">Add new category</h5>
        <div class="card-body">
            <form action="">
                <div>
                    <label for="defaultFormControlInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="defaultFormControlInput"
                        placeholder="Eg: Electronics, Furniture, Sprots"
                        name="defaultFormControlInput
                    aria-describedby="defaultFormControlHelp" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
    </div>
@endsection
