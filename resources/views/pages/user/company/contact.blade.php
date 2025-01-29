
@extends('layouts.app')
@section('title', 'Contacts')
@section('styles')
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/contacts2.min.css" />
@endsection
@section('data-page', 'contacts2')
@section('data-overlay', '@@overlay')

@section('content')
<x-templates.user.pages-header
    title="Hubungi Kami"
    description="Nibh tellus molestie nunc non blandit. Mi tempus imperdiet nulla malesuada pellentesque elit"
    {{-- breadcrumb_name="Katalog"
    current="Berita" --}}
/>
<!-- Contacts content start -->
<main>
    <div class="contacts section">
        <div class="container">
            <div class="contacts_map">
                <div id="map"></div>
            </div>
            <ul class="contacts_info d-flex flex-wrap justify-content-between">
                <li class="contacts_info-item col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center" data-order="1">
                    <span class="contacts_info-item_icon d-flex align-items-center justify-content-center">
                        <i class="icon-envelope_open secondary"></i>
                    </span>
                    <h4 class="contacts_info-item_title">Email</h4>
                    <div class="contacts_info-item_main d-flex flex-column align-items-center">
                        <a class="link" href="mailto:example@domain.com">herbalist@cannabis.site</a>
                        <a class="link" href="mailto:example@domain.com">herbalist@test.site</a>
                    </div>
                </li>
                <li class="contacts_info-item col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center" data-order="2">
                    <span class="contacts_info-item_icon d-flex align-items-center justify-content-center">
                        <i class="icon-call secondary"></i>
                    </span>
                    <h4 class="contacts_info-item_title">Phone</h4>
                    <div class="contacts_info-item_main d-flex flex-column align-items-center">
                        <a class="link" href="tel:+1234567890">+1-896-882-3255</a>
                        <a class="link" href="tel:+1234567890">+1-896-882-3255</a>
                    </div>
                </li>
                <li class="contacts_info-item col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center" data-order="3">
                    <span class="contacts_info-item_icon d-flex align-items-center justify-content-center">
                        <i class="icon-location secondary"></i>
                    </span>
                    <h4 class="contacts_info-item_title">Location</h4>
                    <div class="contacts_info-item_main d-flex flex-column align-items-center">
                        <span>211 Lehner Valleys Apt.</span>
                        <span>287 Harrisstad</span>
                    </div>
                </li>
                <li class="contacts_info-item col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center" data-order="4">
                    <span class="contacts_info-item_icon d-flex align-items-center justify-content-center">
                        <i class="icon-clock secondary"></i>
                    </span>
                    <h4 class="contacts_info-item_title">Open Hours</h4>
                    <div class="contacts_info-item_main d-flex flex-column align-items-center">
                        <span>9:00 am to 5:00 pm</span>
                        <span>Monday to Saturday</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</main>
@endsection
