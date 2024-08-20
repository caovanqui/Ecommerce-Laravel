@extends('layout.adminlayout')
@section('content')
<!-- MAIN  -->
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
        <div class="bg-light p-3 shadow-sm rounded-2 w-50 mx-auto">
            <h4 class="fs-4 fw-medium">Edit Category</h4>
            <form action="{{ route('role.update', $user->id) }}" method="post" class="mt-5 d-flex flex-column gap-3">
                @csrf
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="role">Role User</label>
                    <div class="col-9">
                        <input type="text" name="role" class="form-control" id="role" value="{{ $user->role }}" placeholder="Role User" />
                    </div>
                </div>
                <div class="btn-update ms-auto">
                    <button type="submit" class="btn btn-outline-primary fw-medium">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection