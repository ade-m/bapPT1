<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Item2;
use Illuminate\Http\Request;

class Item2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $item2 = Item2::where('code', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('item_type', 'LIKE', "%$keyword%")
                ->orWhere('item_category', 'LIKE', "%$keyword%")
                ->orWhere('uom', 'LIKE', "%$keyword%")
                ->orWhere('assigned_user', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $item2 = Item2::latest()->paginate($perPage);
        }

        return view('admin.item2.index', compact('item2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.item2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Item2::create($requestData);

        return redirect('admin/item2')->with('flash_message', 'Item2 added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $item2 = Item2::findOrFail($id);

        return view('admin.item2.show', compact('item2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $item2 = Item2::findOrFail($id);

        return view('admin.item2.edit', compact('item2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $item2 = Item2::findOrFail($id);
        $item2->update($requestData);

        return redirect('admin/item2')->with('flash_message', 'Item2 updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Item2::destroy($id);

        return redirect('admin/item2')->with('flash_message', 'Item2 deleted!');
    }
}
