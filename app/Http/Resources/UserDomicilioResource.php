<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDomicilioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'userId' => $this->user_id,
            'domicilio' => $this->domicilio,
            'numeroExterior' => $this->numero_exterior,
            'colonia' => $this->colonia,
            'cp' => $this->cp,
            'ciudad' => $this->ciudad
        ];
    }
}
