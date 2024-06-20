<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Response;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Listing::class, 'listing');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $filters = $request->only([
            'priceFrom', 'priceTo', 'beds', 'baths', 'areaFrom', 'areaTo'
        ]);

        return inertia(
            'Listing/Index',
            [
                'filters' => $filters,
                'listings' => Listing::mostRecent()
                    ->filter($filters)
                    ->withoutSold()
                    ->paginate(10)
                    ->withQueryString()
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Listing $listing
     * @return \Inertia\ResponseFactory|Response
     */
    public function show(Listing $listing): Response|\Inertia\ResponseFactory
    {
        $listing->load(['images']);
        $offer = !Auth::user() ?
            null : $listing->offers()->byMe()->first();

        return inertia(
            'Listing/Show',
            [
                'listing' => $listing,
                'offerMade' => $offer
            ]
        );
    }
}
