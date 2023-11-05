<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryService
{
    public static function GetAllItem()
    {
        $inventory = new Inventory();

        return $inventory->get();
    }
    public static function AddItem(Request $request)
    {
        $inventory = new Inventory();

        $inventory->create([
            'item_name' => $request->item_name,
            'stocks' => $request->stocks,
        ]);

        return response([
            'message' => 'Item Added Successfully!',
            'data' => $inventory->get(),
        ]);
    }

    public static function UpdateItem(Request $request)
    {
        $inventory = new Inventory();
        $getID = $inventory->find($request->id);

        $getID->update([
            'item_name' => $request->item_name,
            'stocks' => $request->stocks,
        ]);

        return 'Updated item';
    }
    public static function DeleteItem(Request $request)
    {
        $inventory = new Inventory();
        $getID = $inventory->find($request->id);

        $getID->delete();

        return 'Deleted item';
    }
}