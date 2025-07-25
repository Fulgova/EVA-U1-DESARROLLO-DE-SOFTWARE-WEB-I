<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UFService
{
    public function obtenerUF()
    {
        $url = 'https://mindicador.cl/api/uf';

        try {
            $response = Http::get($url);

            if ($response->successful()) {
                $data = $response->json();
                return $data['serie'][0]['valor'] ?? null;
            }

            return null;

        } catch (\Exception $e) {
            return null;
        }
    }
}
