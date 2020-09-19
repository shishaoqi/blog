<?php

namespace App\Transformers;

use App\Collection;
use League\Fractal\TransformerAbstract;

class CollectionTransformer extends TransformerAbstract
{
    public function transform(Collection $collection)
    {
        return [
            'id'            => $collection->id,
            'name'          => $collection->name,
            'path'          => $collection->path,
            'description'   => $collection->description,
            'status'        => $collection->status,
            'created_at'    => $collection->created_at->toDateTimeString(),
        ];
    }
}
