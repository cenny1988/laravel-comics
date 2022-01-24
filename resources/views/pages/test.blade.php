@extends('layouts.main-layout')
@section('content')

<div class="banner">
    <div class="container">
        <div class="abs">
            <a class="" href="{{ route('home') }}">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="Action Comics">
            </a>
        </div>
    </div>
</div>

<section class="details"> 
    <div class="container">
            <div class="row">
                <div class="descript">
                    <h2>
                        ACTION COMICS #1000: THE DELUXE EDITION
                    </h2>

                    <div class="green row">
                        <div class="row">
                            <div>
                                <span>U.S. Price:</span>$19.99
                            </div>
                            <div>
                                <span>AVAILABLE</span>
                            </div>
                        </div>
                        <div>
                            <span>Check Availability</span>
                        </div>
                    </div>

                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat provident quo voluptates veritatis architecto placeat vero sint iure ducimus non dolorum, fuga aliquam adipisci velit reiciendis ipsum nam saepe quisquam.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat provident quo voluptates veritatis architecto placeat vero sint iure ducimus non dolorum, fuga aliquam adipisci velit reiciendis ipsum nam saepe quisquam.
                    </p>
                </div>

                <div class="image-details">
                    <h5>ADVERTISEMENT</h5>
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="Action Comics">
                </div>
            </div>
        </div>
    </section>

<div class="spec">
    <div class="container">
        <div class="row">
            <div>
                <h3 class="border">TALENT</h3>
                <div class="flex border">
                    <div>
                        Art by:
                    </div>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui animi quam quasi commodi quo provident ea officiis quas ipsam vitae libero, ve
                    </div>
                </div>
                <div class="flex border">
                    <div>
                        Written by:
                    </div>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui animi quam quasi commodi quo provident ea officiis quas ipsam vitae libero, ve
                    </div>
                </div>
            </div>
            <div>
                <h3 class="border">SPECS</h3>
                <div class="flex border">
                    <div>
                        Series:
                    </div>
                    <div>
                        ACTION COMICS
                    </div>
                </div>
                <div class="flex border">
                    <div>
                        U.S. Price: 
                    </div>
                    <div>
                        $19.99
                    </div>
                </div>
                <div class="flex border">
                    <div>
                        On Sale Date
                    </div>
                    <div>
                        Oct 02 2018
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection