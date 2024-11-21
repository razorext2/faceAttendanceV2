<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class CollectResource extends JsonResource
{
    // Tidak perlu mendeklarasikan $resource lagi karena sudah ada pada parent class

    // Properti untuk status dan message
    public $status;
    public $message;

    // Konstruktor untuk menginisialisasi status dan message
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }

    // Fungsi untuk mengubah data resource menjadi array
    public function toArray(Request $request): array
    {
        // Mengembalikan data dengan format standar
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}
