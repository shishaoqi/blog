<?php

namespace App\Http\Controllers\Api;

use App\Collection;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CollectionController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function index(Request $request)
    {
        $categories = Collection::filter($request->all())->orderBy('created_at', 'desc')->paginate(10);

        return $this->response->collection($categories);
    }

    /**
     * Show all of the categories.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getList()
    {
        $categories = Collection::all();

        return $this->response->collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CategoryRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryRequest $request)
    {
        $category = new Collection();
        $category->fill($request->all());
        $category->save();

        return $this->response->withNoContent();
    }

    /**
     * Update Discussion Status By Discussion ID.
     *
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function status($id, Request $request)
    {
        $input = $request->all();

        $category = Collection::findOrFail($id);
        foreach ($input as $key => $value) {
            $category->{$key} = $value;
        }

        $category->save();

        return $this->response->withNoContent();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function edit($id)
    {
        $category = Collection::findOrFail($id);

        return $this->response->item($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\CategoryRequest $request
     * @param int                                $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Collection::findOrFail($id);
        $category->fill($request->all());
        $category->save();

        return $this->response->withNoContent();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Collection::destroy($id);

        return $this->response->withNoContent();
    }
}
