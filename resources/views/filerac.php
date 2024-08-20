<!-- @forelse($catagories as $category)
                                <li><a class="dropdown-item" href="#">{{ $category->name }} </a></li>
                                <li><a class="dropdown-item" href="#">{{ $category->name }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ $category->name }} </a></li>
                                <li><a class="dropdown-item" href="#"> {{ $category->name }}</a></li>
                            @empty
                                Nothing
                            @endforelse -->

                            // Scope để lấy sản phẩm mới nhất
    public function scopeNewProducts($query, $limit)
    {
        return $query->orderBy('id', 'desc')->limit($limit)->with('category');
    }

    // Scope để lấy các sản phẩm bán chạy
    public function scopeBestsellerProducts($query, $limit)
    {
        return $query->where('sold', '>', 0)->orderBy('id', 'desc')->limit($limit)->with('category');
    }