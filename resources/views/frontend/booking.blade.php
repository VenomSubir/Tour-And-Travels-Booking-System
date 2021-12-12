@extends('frontend.main_master')
@section('content')
    <!-- Contact Form-->
    <section class="section section-sm section-last bg-default text-left">
        <div class="container">
            <article class="title-classic">
                <div class="title-classic-title">
                    <h3>Book This Tour</h3>
                </div>
                <div class="title-classic-text">
                    <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
                </div>
            </article><br><br>
            <form action="{{ route('booking.store') }}" method="POST" class="rd-form rd-form-variant-2 rd-mailform">
                @csrf
                <div class="row row-14 gutters-14">
                    <div class="col-md-12">
                        <div class="form-wrap">
                            Package Name :
                            <input class="form-input" type="text" name="p_name" value="{{ $package->name }}">
                        </div>
                    </div><br>
                    <div class="col-md-6">
                        <div class="form-wrap">
                            User Name :
                            <input class="form-input"  type="text" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrap">
                            Email :
                            <input class="form-input" type="email" name="email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-wrap">
                            Phone :
                            <input class="form-input" type="text" name="phone">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-wrap">
                            Address :
                            <input class="form-input" type="text" name="address">
                        </div>
                    </div>
                </div>
                <br>
{{--                <button class="button button-primary button-pipaluk" type="submit">Send Message</button>--}}
                <div class="col-6">
                    <div class="form-wrap">
                        <input type="submit" class="btn btn-info " value="Book Now">
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
