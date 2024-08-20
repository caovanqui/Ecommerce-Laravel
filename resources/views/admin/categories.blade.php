@extends('layout.adminlayout')
@section('content')
<!-- MAIN  -->
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
        <div class="bg-light p-3 shadow-sm rounded-2">
            <div class="admin-main-header d-flex justify-content-between">
                <h3 class="admin-main-header-title fs-5 fw-bolder">
                    All Category
                </h3>
                <div class="admin-main-header-btn d-flex align-items-center">
                    <button class="btn btn-primary text-white fw-medium d-flex align-items-center gap-2">
                        <ion-icon class="fs-5" name="add"></ion-icon>
                        Add New
                    </button>
                </div>
            </div>
            <div class="admin-main-search my-4">
                <div class="row g-3 align-items-center">
                    <div class="col-auto ms-auto">
                        <label for="admin-search-item" class="col-form-label">Search</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="admin-search-item" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="admin-category">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="fw-semibold">Id</th>
                                <th class="fw-semibold">Product Name</th>
                                <th class="fw-semibold">Date</th>
                                <th class="fw-semibold">Status</th>
                                <th class="fw-semibold">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item )
                            <tr class="align-middle">
                                <th>{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    @if ($item->status==1)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td>
                                    <div class="handle-option d-flex align-items-center gap-2">
                                        <a href=""><ion-icon class="fs-5 text-primary cursor" name="eye-outline"></ion-icon></a>
                                        <a href=""><ion-icon class="fs-5 text-info cursor" name="create-outline" data-bs-toggle="modal" data-bs-target="#categoryEdit"></ion-icon></a>
                                        <a href="{{ route('admin.deletecategory', $item->id) }}"><ion-icon class="fs-5 text-danger cursor" name="trash-outline"></ion-icon></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <!-- <tr class="align-middle">
                                <th>1</th>
                                <td>Banh so 1</td>
                                <td>
                                    <img src="../uploads/product1.jpg" alt="" width="80" height="80" class="border border-secondary rounded-2" />
                                </td>
                                <td>25-01-2004</td>
                                <td>Active</td>
                                <td>
                                    <div class="handle-option d-flex align-items-center gap-2">
                                        <ion-icon class="fs-5 text-primary cursor" name="eye-outline"></ion-icon>
                                        <ion-icon class="fs-5 text-info cursor" name="create-outline" data-bs-toggle="modal" data-bs-target="#categoryEdit"></ion-icon>
                                        <ion-icon class="fs-5 text-danger cursor" name="trash-outline"></ion-icon>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <th>1</th>
                                <td>Banh so 1</td>
                                <td>
                                    <img src="../uploads/product1.jpg" alt="" width="80" height="80" class="border border-secondary rounded-2" />
                                </td>
                                <td>25-01-2004</td>
                                <td>Inactive</td>
                                <td>
                                    <div class="handle-option d-flex align-items-center gap-2">
                                        <ion-icon class="fs-5 text-primary cursor" name="eye-outline"></ion-icon>
                                        <ion-icon class="fs-5 text-info cursor" name="create-outline" data-bs-toggle="modal" data-bs-target="#categoryEdit"></ion-icon>
                                        <ion-icon class="fs-5 text-danger cursor" name="trash-outline"></ion-icon>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <th>1</th>
                                <td>Banh so 1</td>
                                <td>
                                    <img src="../uploads/product1.jpg" alt="" width="80" height="80" class="border border-secondary rounded-2" />
                                </td>
                                <td>25-01-2004</td>
                                <td>Active</td>
                                <td>
                                    <div class="handle-option d-flex align-items-center gap-2">
                                        <ion-icon class="fs-5 text-primary cursor" name="eye-outline"></ion-icon>
                                        <ion-icon class="fs-5 text-info cursor" name="create-outline" data-bs-toggle="modal" data-bs-target="#categoryEdit"></ion-icon>
                                        <ion-icon class="fs-5 text-danger cursor" name="trash-outline"></ion-icon>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <th>1</th>
                                <td>Banh so 1</td>
                                <td>
                                    <img src="../uploads/product1.jpg" alt="" width="80" height="80" class="border border-secondary rounded-2" />
                                </td>
                                <td>25-01-2004</td>
                                <td>Active</td>
                                <td>
                                    <div class="handle-option d-flex align-items-center gap-2">
                                        <ion-icon class="fs-5 text-primary cursor" name="eye-outline"></ion-icon>
                                        <ion-icon class="fs-5 text-info cursor" name="create-outline" data-bs-toggle="modal" data-bs-target="#categoryEdit"></ion-icon>
                                        <ion-icon class="fs-5 text-danger cursor" name="trash-outline"></ion-icon>
                                    </div>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="products-pagination mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <!-- Previous Page Link -->
                        @if($categories->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" style="color: black;" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" style="color: black;" href="{{ $categories->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        @endif

                        <!-- Pagination Elements -->
                        @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $page => $url)
                        @if ($page == $categories->currentPage())
                        <li class="page-item active">
                            <a class="page-link" style="color: black;" href="#">{{ $page }}</a>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" style="color: black;" href="{{ $url }}">{{ $page }}</a>
                        </li>
                        @endif
                        @endforeach
                        <!-- Next Page Link -->
                        @if($categories->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" style="color: black;" href="{{ $categories->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        @else
                        <li class="page-item disabled">
                            <a class="page-link" style="color: black;" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection