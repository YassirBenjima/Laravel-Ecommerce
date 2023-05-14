@extends('site.app')
@section('title', 'Open Dispute')
@section('content')
    <div class="container">
        <h2>Open Dispute</h2>
        <div class="row">
            <div class="col-md-6">
                <p>If you have any issues or concerns with your purchase, you can open a dispute by filling out the form below:</p>
                <form>
                    <div class="form-group">
                        <label for="orderNumber">Order Number:</label>
                        <input type="text" class="form-control" id="orderNumber" placeholder="Enter your order number">
                    </div>
                    <div class="form-group">
                        <label for="reason">Reason for Dispute:</label>
                        <select class="form-control" id="reason">
                            <option value="1">Product not as described</option>
                            <option value="2">Item not received</option>
                            <option value="3">Defective product</option>
                            <option value="4">Shipping delay</option>
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
