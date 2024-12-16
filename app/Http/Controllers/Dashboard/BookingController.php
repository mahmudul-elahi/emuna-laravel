<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('dashboard.booking.index');
    }

    public function slot()
    {

        // Test Data
        $bookings = collect([
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '12/A Downtown Plaza, Michigan...',
                'date_range' => '7 Aug - 10 Oct',
                'total_slots' => 15,
                'amount' => '$15,220.00',
                'available_slots' => 5,
                'status' => 'Active',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '25/B Central Park, New York...',
                'date_range' => '5 Jul - 15 Sep',
                'total_slots' => 20,
                'amount' => '$20,500.00',
                'available_slots' => 10,
                'status' => 'Inactive',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '45/C Ocean Drive, Miami...',
                'date_range' => '10 Jun - 20 Aug',
                'total_slots' => 12,
                'amount' => '$12,800.00',
                'available_slots' => 2,
                'status' => 'Active',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '68/D Sunset Blvd, Los Angeles...',
                'date_range' => '15 Apr - 30 May',
                'total_slots' => 8,
                'amount' => '$8,000.00',
                'available_slots' => 3,
                'status' => 'Inactive',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '90/E Bay Street, San Francisco...',
                'date_range' => '1 Jan - 1 Mar',
                'total_slots' => 25,
                'amount' => '$30,000.00',
                'available_slots' => 15,
                'status' => 'Active',
            ],
        ]);


        return view('dashboard.booking.slot', ['bookings' => $bookings]);
    }

    public function create_slot()
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

        return view('dashboard.booking.create_slot', ['products' => $products]);
    }


    public function timeline()
    {
        return view('dashboard.booking.timeline');
    }

    public function current()
    {
        $bookings = collect([
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '12/A Downtown Plaza, Michigan...',
                'date_range' => '7 Aug - 10 Oct',
                'total_slots' => 15,
                'amount' => '$15,220.00',
                'available_slots' => 5,
                'status' => 'Active',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '25/B Central Park, New York...',
                'date_range' => '5 Jul - 15 Sep',
                'total_slots' => 20,
                'amount' => '$20,500.00',
                'available_slots' => 10,
                'status' => 'Inactive',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '45/C Ocean Drive, Miami...',
                'date_range' => '10 Jun - 20 Aug',
                'total_slots' => 12,
                'amount' => '$12,800.00',
                'available_slots' => 2,
                'status' => 'Active',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '68/D Sunset Blvd, Los Angeles...',
                'date_range' => '15 Apr - 30 May',
                'total_slots' => 8,
                'amount' => '$8,000.00',
                'available_slots' => 3,
                'status' => 'Inactive',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '90/E Bay Street, San Francisco...',
                'date_range' => '1 Jan - 1 Mar',
                'total_slots' => 25,
                'amount' => '$30,000.00',
                'available_slots' => 15,
                'status' => 'Active',
            ],
        ]);

        return view('dashboard.booking.current', ['bookings' => $bookings]);
    }

    public function pending()
    {
        $bookings = collect([
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '12/A Downtown Plaza, Michigan...',
                'date_range' => '7 Aug - 10 Oct',
                'total_slots' => 15,
                'amount' => '$15,220.00',
                'available_slots' => 5,
                'status' => 'Active',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '25/B Central Park, New York...',
                'date_range' => '5 Jul - 15 Sep',
                'total_slots' => 20,
                'amount' => '$20,500.00',
                'available_slots' => 10,
                'status' => 'Inactive',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '45/C Ocean Drive, Miami...',
                'date_range' => '10 Jun - 20 Aug',
                'total_slots' => 12,
                'amount' => '$12,800.00',
                'available_slots' => 2,
                'status' => 'Active',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '68/D Sunset Blvd, Los Angeles...',
                'date_range' => '15 Apr - 30 May',
                'total_slots' => 8,
                'amount' => '$8,000.00',
                'available_slots' => 3,
                'status' => 'Inactive',
            ],
            (object)[
                'image' => asset('assets/client/images/slot-booking.png'),
                'location' => '90/E Bay Street, San Francisco...',
                'date_range' => '1 Jan - 1 Mar',
                'total_slots' => 25,
                'amount' => '$30,000.00',
                'available_slots' => 15,
                'status' => 'Active',
            ],
        ]);

        return view('dashboard.booking.pending', ['bookings' => $bookings]);
    }

    public function view()
    {
        return view('dashboard.booking.view');
    }
}
