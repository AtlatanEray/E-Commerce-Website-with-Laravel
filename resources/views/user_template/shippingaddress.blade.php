@extends('user_template.layouts.template')
@section('main-content')
<h2>Provide Your Shipping Information Page</h2>
<div class="row">
    <div class="col-12">
        <div class="box-main">
            <form action="{{route('addshippingaddress')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number">
                </div>

                <div class="form-group">
                    <label for="city_name">City/Village Name</label>
                    <input type="text" class="form-control" name="city_name">
                </div>

                <div class="form-group">
                    <label for="postal_code">Postal Kodu</label>
                    <input type="text" class="form-control" name="postal_code">
                </div>

                <input type="submit" value="Next" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection