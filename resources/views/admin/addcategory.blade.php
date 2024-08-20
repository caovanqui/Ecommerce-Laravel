@extends('layout.adminlayout')
@section('content')
<!-- MAIN  -->
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
        <div class="bg-light p-3 shadow-sm rounded-2 w-50 mx-auto">
            <h4 class="fs-4 fw-medium">Add Category</h4>
            <form action="{{ route('admin.addcategory') }}" method="post" class="mt-5 d-flex flex-column gap-3">
                @csrf
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="categoryname">Category Name</label>
                    <div class="col-9">
                        <input type="text" name="name" class="form-control" id="categoryname" placeholder="Category Name" />
                    </div>
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="Status">Status</label>
                    <div class="col-9">
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option selected>Chọn trạng thái</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="btn-update ms-auto">
                    <button type="submit" class="btn btn-outline-primary fw-medium">Add Category</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection