<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request): JsonResponse
    {
        $rent = Rent::query();
        if (!empty($request->select) && !empty($request->main_input) && $request->price_two === null) {
            $rent = DB::table('rents')->where($request->select, '=', $request->main_input);
        }

        if ($request->select == 'price') {
            $rent = DB::table('rents')->whereBetween('price', [$request->main_input, $request->price_two]);
        }

        if ($request->select == 'name') {
            $rent = DB::table('rents')->where('name', 'like', '%' . $request->main_input . '%');
        }

        return response()->json($rent->get());
    }
}
