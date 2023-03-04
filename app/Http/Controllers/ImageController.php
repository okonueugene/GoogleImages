<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function search(Request $request)
    {
       $searchQuery = $request->input('q');

       $searchQuery = urlencode($searchQuery);

       $client = new Client();

       $crawler = $client->request('GET', "https://www.google.com/search?q=$searchQuery&tbm=isch");

        $imageUrls = $crawler->filter('img')->each(function ($node) {
                return $node->attr('src');
            });

        $imageAltTexts = $crawler->filter('img')->each(function ($node) {
                return $node->attr('alt');
            });

        $imageUrls = array_slice($imageUrls, 0, 5);
        $imageAltTexts = array_slice($imageAltTexts, 0, 5);


        return response()->json([
            'imageUrls' => $imageUrls,
            'imageAltTexts' => $imageAltTexts,
        ]);
    }
}
