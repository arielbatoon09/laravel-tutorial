<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Http\Controllers\Service\InventoryService;

class InventoryController extends Controller
{
    public function GetAllItem()
    {
        return InventoryService::GetAllItem();
    }
    public function AddItem(Request $request)
    {
        return InventoryService::AddItem($request);
    }
    public function UpdateItem(Request $request)
    {
        return InventoryService::UpdateItem($request);
    }
    public function DeleteItem(Request $request)
    {
        return InventoryService::DeleteItem($request);
    }
}
