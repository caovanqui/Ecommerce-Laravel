@extends('layout.adminlayout')
@section('content')
<!-- MAIN  -->
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
        <div class="bg-light p-3 shadow-sm rounded-2 w-50 mx-auto">
            <h4 class="fs-4 fw-medium">Update Product</h4>
            <form action="{{route('admin.editproduct')}}" enctype="multipart/form-data" method="post" class="mt-5 d-flex flex-column gap-3">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="Productname">Product Name</label>
                    <div class="col-9">
                        <input type="text" name="name" value="{{$product->name}}" class="form-control" id="Productname" placeholder="Product Name" />
                    </div>
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="Product Category">Product Category</label>
                    <div class="col-9">
                        <input type="text" name="category_id" value="{{$product->category->id}}" class="form-control" id="Product Category" placeholder="CategoryNow: {{$product->category->name}}" />
                    </div>
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="Productdate">Product Date</label>
                    <div class="col-9">
                        <input type="date" name="date" value="{{$product->date}}" class="form-control" id="Productdate" placeholder="Product Date" />
                    </div>
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="ProductQuatity">Product Quatity</label>
                    <div class="col-9">
                        <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control" id="ProductQuatity" placeholder="ProductQuatity" />
                    </div>
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="ProducPrice">Product Price</label>
                    <div class="col-9">
                        <input type="number" name="price" value="{{$product->price}}" class="form-control" id="Product Price" placeholder="Product Price" />
                    </div>
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="Trending">Trending</label>
                    <div class="col-9">
                        <select class="form-select" name="trending" aria-label="Default select example">
                            @if ($product->hot==1)
                            <option>Chọn trạng thái</option>
                            <option value="hot" selected>Hot</option>
                            <option value="popular">Popular</option>
                            <option value="sale">Sale</option>
                            @elseif ($product->sale==1)
                            <option>Chọn trạng thái</option>
                            <option value="hot">Hot</option>
                            <option value="popular">Popular</option>
                            <option value="sale" selected>Sale</option>
                            @elseif ($product->popular==1)
                            <option>Chọn trạng thái</option>
                            <option value="hot">Hot</option>
                            <option value="popular" selected>Popular</option>
                            <option value="sale">Sale</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="Productimg">Product Images</label>
                    <div class="col-6">
                        <input class="form-control" name="img" type="file" id="formFileMultiple" multiple />
                    </div>
                    <div class="col-3">
                        @php
                        // Kiểm tra xem đường dẫn ảnh có chứa 'admin/upload' hay không
                        $imagePath = str_contains($product->img, 'upload/') ? asset($product->img) : $product->img;
                        @endphp
                        <img src="{{ $imagePath }}" alt="" width="80" height="80" class="border border-secondary rounded-2" />
                    </div>
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="Productimg">Thumbnail Image</label>
                    <div class="col-6">
                        <input class="form-control" name="thumbnail_img" type="file" id="formFileMultiple" multiple />
                    </div>
                    <div class="col-3">
                        @php
                        // Kiểm tra xem đường dẫn ảnh có chứa 'admin/upload' hay không
                        $imagePath = str_contains($product->thumbnail_img, 'upload/') ? asset($product->thumbnail_img) : $product->thumbnail_img;
                        @endphp
                        <img src="{{ $imagePath }}" alt="" width="80" height="80" class="border border-secondary rounded-2" />
                    </div>
                    <!-- <label class="col-3 fs-6 fw-medium" for="Productimg" style="visibility: hidden;">Thumbnail Image</label>
                    <div class="col-9">
                        <input class="form-control" name="thumbnail_img" type="file" id="formFileMultiple" multiple />
                    </div>
                    <label class="col-3 fs-6 fw-medium" for="Productimg" style="visibility: hidden;">Thumbnail Image</label>
                    <div class="col-9">
                        <input class="form-control" name="thumbnail_img" type="file" id="formFileMultiple" multiple />
                    </div>
                    <label class="col-3 fs-6 fw-medium" for="Productimg" style="visibility: hidden;">Thumbnail Image</label>
                    <div class="col-9">
                        <input class="form-control" name="thumbnail_img" type="file" id="formFileMultiple" multiple />
                    </div> -->
                </div>
                <div class="input-group-item row g-3">
                    <label class="col-3 fs-6 fw-medium" for="Productimg">Product Description</label>
                    <div class="col-9">
                        <div id="editor">
                            <textarea class="w-100 mb-2 opacity-50" name="des" rows="5" cols="57" id="">
                            {{$product->des}}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="btn-update ms-auto">
                    <button type="submit" name="btnSubmit" class="btn btn-outline-primary fw-medium">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection