<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class PhotoCollectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public $status;
    public $message;
    public $resource;

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    public function toArray(Request $request): array
    {
        $data = collect($this->resource)->map(function ($item) {
            return [
                'id' => $item->id,
                'id_collect' => $item->id_collect,
                'photourl' => $item->photourl,
                'created_at' => $item->created_at->locale('id')->isoFormat('D MMM YYYY H:mm:ss'),
                'updated_at' => $item->updated_at->locale('id')->isoFormat('D MMM YYYY H:mm:ss'),
            ];
        });

        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $data
        ];
    }
}
