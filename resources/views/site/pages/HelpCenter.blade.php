@extends('site.app')
@section('title', 'Help Center')
@section('content')
    <div class="container">
        <h2>Help Center</h2>

        <div class="row">
            <div class="col-md-6">
                <p>If you have any questions or need assistance, our customer support team is available 24/7.</p>
                <ul>
                    <li>Phone: +212 623-401-404</li>
                    <li>Email: support@yassir.com</li>
                    <li>Live Chat: <a href="#">Chat Now</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Frequently Asked Questions</h3>
                <ul>
                    <li><a href="#">Shipping and Delivery</a></li>
                    <li><a href="#">Returns and Exchanges</a></li>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Order Tracking</a></li>
                    <li><a href="#">Product Information</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Contact Us</h3>
                <p>If you need further assistance, please fill out the form below and we will get back to you as soon as possible.</p>
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
@stop
