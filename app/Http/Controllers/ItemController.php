<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function detail(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        return view('item_detail', [
            'item' => $item,
        ]);
    }
}
