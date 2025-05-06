<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Exception;

class AdminUserController extends Controller
{
    public function list(Request $request)
    {
        try {
            $key = $request->input('key', '');
            $start = $request->input('start', 0);
            $limit = $request->input('limit', 10);

            $query = User::query();

            if (!empty($key)) {
                $query->where(function($q) use ($key) {
                    $q->where('name', 'like', "%{$key}%")
                      ->orWhere('email', 'like', "%{$key}%");
                });
            }

            $total = $query->count();
            
            $users = $query->skip($start)
                          ->take($limit)
                          ->get();

            if ($users->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'msg' => 'Không tìm thấy người dùng nào',
                    'data' => $users,
                    'total' => $total,
                    'message' => 'Chưa có dữ liệu'
                ]);
            }

            return response()->json([
                'status' => true,
                'msg' => 'Lấy danh sách người dùng thành công',
                'data' => $users,
                'total' => $total,
                'message' => ''
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'msg' => 'Có lỗi xảy ra: ' . $e->getMessage(),
                'data' => [],
                'total' => 0
            ], 500);
        }
    }
}
