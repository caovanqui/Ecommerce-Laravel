<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlists()
    {
        $user = User::orderBy('id', 'DESC')->paginate(8);
        return view('admin.userlists',compact( 'user'));
    }
    // Hiển thị form chỉnh sửa role
    public function editRoleForm($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edituser', compact('user'));
    }

    // Xử lý cập nhật role
    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|string|max:255',
        ]);
        $user = User::find($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('admin.userlists', $id)->with('success', 'Role updated successfully!');
    }
}
