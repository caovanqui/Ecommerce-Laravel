<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public function scopeCategoryOrderByName($query)
    {
        return $query->orderBy('id', 'asc');
    }

    protected $fillable = [
        'name',
        'status',
    ];
    public static function addCategory(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive', // Sử dụng kiểm tra in để đảm bảo giá trị là active hoặc inactive
        ]);

        // Chuyển đổi giá trị từ "Active" sang 1 và từ "Inactive" sang 0
        $validatedData['status'] = ($validatedData['status'] === 'active') ? 1 : 0;

        // Create category
        $category = Category::create($validatedData);

        // Redirect or return success response
        // Example: return redirect()->route('category.index')->with('success', 'Category added successfully.');
    }
}
