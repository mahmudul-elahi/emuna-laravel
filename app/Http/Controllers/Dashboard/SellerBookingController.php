<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SellerBookingController extends Controller
{
    public function pending()
    {
        return view('dashboard.seller_booking.pending');
    }

    public function upcomming()
    {

        $products = collect([
            (object)[
                "name" => "Choco Energy Bar",
                "brand" => "NutriSnacks Co.",
                "category" => "Snacks",
                "price" => "$2.50",
                "stocks" => "150 units",
                "weight" => "50g per bar",
                "height" => "7 cm",
                "width" => "4 cm",
                "depth" => "2 cm",
                "barcode" => "033500000155444411115",
                "image" => asset('assets/client/images/cola.png')
            ],
            (object)[
                "name" => "Protein Bar",
                "brand" => "HealthFuel",
                "category" => "Snacks",
                "price" => "$3.00",
                "stocks" => "200 units",
                "weight" => "60g per bar",
                "height" => "8 cm",
                "width" => "4 cm",
                "depth" => "2 cm",
                "barcode" => "033500000155444411116",
                "image" => asset('assets/client/images/cola.png')
            ],
            (object)[
                "name" => "Choco Energy Bar",
                "brand" => "NutriSnacks Co.",
                "category" => "Snacks",
                "price" => "$2.50",
                "stocks" => "150 units",
                "weight" => "50g per bar",
                "height" => "7 cm",
                "width" => "4 cm",
                "depth" => "2 cm",
                "barcode" => "033500000155444411115",
                "image" => asset('assets/client/images/cola.png')
            ],
            (object)[
                "name" => "Protein Bar",
                "brand" => "HealthFuel",
                "category" => "Snacks",
                "price" => "$3.00",
                "stocks" => "200 units",
                "weight" => "60g per bar",
                "height" => "8 cm",
                "width" => "4 cm",
                "depth" => "2 cm",
                "barcode" => "033500000155444411116",
                "image" => asset('assets/client/images/cola.png')
            ],
            (object)[
                "name" => "Choco Energy Bar",
                "brand" => "NutriSnacks Co.",
                "category" => "Snacks",
                "price" => "$2.50",
                "stocks" => "150 units",
                "weight" => "50g per bar",
                "height" => "7 cm",
                "width" => "4 cm",
                "depth" => "2 cm",
                "barcode" => "033500000155444411115",
                "image" => asset('assets/client/images/cola.png')
            ],
            (object)[
                "name" => "Protein Bar",
                "brand" => "HealthFuel",
                "category" => "Snacks",
                "price" => "$3.00",
                "stocks" => "200 units",
                "weight" => "60g per bar",
                "height" => "8 cm",
                "width" => "4 cm",
                "depth" => "2 cm",
                "barcode" => "033500000155444411116",
                "image" => asset('assets/client/images/cola.png')
            ],
            (object)[
                "name" => "Choco Energy Bar",
                "brand" => "NutriSnacks Co.",
                "category" => "Snacks",
                "price" => "$2.50",
                "stocks" => "150 units",
                "weight" => "50g per bar",
                "height" => "7 cm",
                "width" => "4 cm",
                "depth" => "2 cm",
                "barcode" => "033500000155444411115",
                "image" => asset('assets/client/images/cola.png')
            ],
            (object)[
                "name" => "Protein Bar",
                "brand" => "HealthFuel",
                "category" => "Snacks",
                "price" => "$3.00",
                "stocks" => "200 units",
                "weight" => "60g per bar",
                "height" => "8 cm",
                "width" => "4 cm",
                "depth" => "2 cm",
                "barcode" => "033500000155444411116",
                "image" => asset('assets/client/images/cola.png')
            ]
        ]);

        return view('dashboard.seller_booking.upcomming', ['products' => $products]);
    }


    public function download()
    {
        $pdf = Pdf::loadView('dashboard.seller_booking.pdf');

        return $pdf->download();

        // return view('dashboard.seller_booking.pdf');
    }
}
