<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'date',
        'quantity',
        'hot',
        'popular',
        'sale',
        'img',
        'thumbnail_img',
        'des',
    ];
    // Định nghĩa mối quan hệ với Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //Scope tạo sản phẩm mới 
    public static function createProduct(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required|string|max:100',
                'price' => 'required|numeric|min:0|max:99999999.99',
                'category_id' => 'required|integer|exists:categories,id',
                'date' => 'required|date',
                'quantity' => 'required|integer|min:0',
                'trending' => 'required|in:hot,popular,sale',
                'img' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thumbnail_img' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'des' => 'nullable|string',
            ]
        );

        $price = $request->input('price');
        if ($price < 0 || $price > 99999999.99) {
            return redirect()->back()->with('error', 'Giá trị của giá không hợp lệ.');
        }
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('admin/upload'), $imageName);
            $validateData['img'] = 'admin/upload/' . $imageName;
        }

        if ($request->hasFile('thumbnail_img')) {
            $thumbnailName = time() . '_thumbnail.' . $request->thumbnail_img->extension();
            $request->thumbnail_img->move(public_path('admin/upload/'), $thumbnailName);
            $validateData['thumbnail_img'] = 'admin/upload/' . $thumbnailName;
        }

        // Chuyển đổi trending thành boolean
        $validateData['hot'] = $validateData['trending'] == 'hot' ? 1 : 0;
        $validateData['popular'] = $validateData['trending'] == 'popular' ? 1 : 0;
        $validateData['sale'] = $validateData['trending'] == 'sale' ? 1 : 0;

        unset($validateData['trending']);

        return self::create($validateData);
    }

    //Edit Product
    public static  function editProduct(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|numeric|min:0|max:99999999.99',
            'category_id' => 'required|integer|exists:categories,id',
            'date' => 'required|date',
            'quantity' => 'required|integer|min:0',
            'trending' => 'required|in:hot,popular,sale',
            'img' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail_img' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'des' => 'nullable|string',
        ]);

        $id = $request->input('id');
        $product = Product::findOrFail($id);

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->file('img')->extension();
            $request->file('img')->move(public_path('admin/upload'), $imageName);
            $validatedData['img'] = 'admin/upload/' . $imageName;

            // Xóa hình cũ nếu có
            $imgPath = public_path($product->img);
            if (file_exists($imgPath) && !empty($product->img)) {
                unlink($imgPath);
            }
        } else {
            $validatedData['img'] = $product->img; // Giữ lại ảnh cũ nếu không upload ảnh mới
        }

        if ($request->hasFile('thumbnail_img')) {
            $thumbnailName = time() . '_thumbnail.' . $request->file('thumbnail_img')->extension();
            $request->file('thumbnail_img')->move(public_path('admin/upload'), $thumbnailName);
            $validatedData['thumbnail_img'] = 'admin/upload/' . $thumbnailName;

            // Xóa hình cũ nếu có
            $thumbPath = public_path($product->thumbnail_img);
            if (file_exists($thumbPath) && !empty($product->thumbnail_img)) {
                unlink($thumbPath);
            }
        } else {
            $validatedData['thumbnail_img'] = $product->thumbnail_img; // Giữ lại ảnh cũ nếu không upload ảnh mới
        }
        // Chuyển đổi trending thành boolean
        $validatedData['hot'] = $validatedData['trending'] == 'hot' ? 1 : 0;
        $validatedData['popular'] = $validatedData['trending'] == 'popular' ? 1 : 0;
        $validatedData['sale'] = $validatedData['trending'] == 'sale' ? 1 : 0;

        unset($validatedData['trending']);
        // Cập nhật sản phẩm
        $product->update($validatedData);
    }

    // Tìm kiếm sản phẩm
    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'like', '%' . $keyword . '%')->orderBy('id', 'DESC');
    }
}
