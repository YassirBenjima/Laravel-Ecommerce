@extends('site.app')
@section('title', 'Money Refund')
@section('content')
    <div class="container">
        <h2>Money Refund</h2>
        <div class="row">
            <div class="col-md-6">
                <p>If you would like to request a refund for your purchase, please fill out the form below:</p>
                <form>
                    <div class="form-group">
                        <label for="orderNumber">Order Number:</label>
                        <input type="text" class="form-control" id="orderNumber" placeholder="Enter your order number">
                    </div>
                    <div class="form-group">
                        <label for="reason">Reason for Refund:</label>
                        <select class="form-control" id="reason">
                            <option value="1">Product did not meet expectations</option>
                            <option value="2">Received incorrect item</option>
                            <option value="3">Product damaged during shipping</option>
                            <option value="4">Changed my mind</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Additional Details:</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter any additional details"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div><br>
@stop
