@extends('layout.adminlayout')
@section('content')

<!-- MAIN  -->
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
        <div class="bg-light p-3 shadow-sm rounded-2">
            <div class="admin-main-header d-flex justify-content-between">
                <h3 class="admin-main-header-title fs-5 fw-bolder">
                    All Product
                </h3>
                <div class="admin-main-header-btn d-flex align-items-center">
                    <button class="btn btn-primary text-white fw-medium d-flex align-items-center gap-2">
                        <ion-icon class="fs-5" name="add"></ion-icon>
                        <a class="text-decoration-none text-white" href="{{route('admin.addproduct')}}">Add New</a>
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
                                <th class="fw-semibold">Category</th>
                                <th class="fw-semibold">Image</th>
                                <th class="fw-semibold">Quatity</th>
                                <th class="fw-semibold">Price</th>
                                <th class="fw-semibold">Status</th>
                                <th class="fw-semibold">Date</th>
                                <th class="fw-semibold">Treding</th>
                                <th class="fw-semibold">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                            <tr class="align-middle">
                                <th>{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>
                                    @php
                                    // Kiểm tra xem đường dẫn ảnh có chứa 'admin/upload' hay không
                                    $imagePath = str_contains($item->img, 'upload/') ? asset($item->img) : $item->img;
                                    @endphp
                                    <img src="{{ $imagePath }}" alt="" width="80" height="80" class="border border-secondary rounded-2" />
                                </td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->price}} $</td>
                                <td>
                                    @if($item->quantity == 0)
                                    Out of Stock
                                    @elseif($item->quantity < 10) Almost Over @else Stocking @endif </td>
                                <td>{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}</td>
                                <td>
                                    @if($item->hot)
                                    <span class="badge text-bg-primary text-white">Hot</span>
                                    @elseif($item->popular)
                                    <span class="badge text-bg-primary text-white">Popular</span>
                                    @elseif($item->sale)
                                    <span class="badge text-bg-primary text-white">Sale</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="handle-option d-flex align-items-center gap-2">
                                        <a href=""><ion-icon class="fs-5 text-primary cursor" name="eye-outline"></ion-icon></a>
                                        <a href="{{route('admin.showEditProductForm',$item->id)}}"><ion-icon class="fs-5 text-info cursor" name="create-outline" data-bs-toggle="modal" data-bs-target="#categoryEdit"></ion-icon></a>
                                        <a href="{{ route('admin.productdelete', $item->id) }}"><ion-icon class="fs-5 text-danger cursor" name="trash-outline"></ion-icon></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <nav aria-label="..." class="d-flex justify-content-end">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> -->
            <div class="products-pagination mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <!-- Previous Page Link -->
                        @if($product->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" style="color: black;" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" style="color: black;" href="{{ $product->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        @endif

                        <!-- Pagination Elements -->
                        @foreach ($product->getUrlRange(1, $product->lastPage()) as $page => $url)
                        @if ($page == $product->currentPage())
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
                        @if($product->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" style="color: black;" href="{{ $product->nextPageUrl() }}" aria-label="Next">
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
<script src="{{asset('admin/plugins/select2/js/select2.min.js')}}"></script>

@endsection