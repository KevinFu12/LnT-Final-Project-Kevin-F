@extends('layouts.main')

@section('container')
<style>
    .text-justify {
        text-align: justify;
    }
</style>

<h1>About Page</h1>
<br>
<div class="text-justify">
    <h3>Welcome to Raja & Co.</h3>
    <p>At Raja & Co, we are passionate about bringing delicious food, refreshing drinks, and a variety of other essential items to your table. We understand the importance of quality, taste, and convenience in your everyday life, which is why we strive to deliver the best products with unmatched customer service.</p>
    <br>
    <h3>Our Mission</h3>
    <p>Our mission is simple: to provide our customers with top-notch food, beverages, and other essentials that enhance their lives. We aim to be a one-stop destination for all your needs, offering a diverse range of products that cater to different tastes and preferences.</p>
    <br>
    <h3>Quality Assurance</h3>
    <p>Quality is at the heart of everything we do. We source our ingredients carefully, ensuring that each item meets the highest standards of freshness, taste, and nutritional value. From farm-fresh produce to premium beverages, every product in our selection undergoes rigorous quality checks to guarantee your satisfaction.</p>
    <br>
    <h3>Variety and Selection</h3>
    <p>Whether you're looking for gourmet snacks, refreshing beverages, pantry staples, or household essentials, we've got you covered. Our extensive product range features a diverse array of options, allowing you to explore new flavors, discover old favorites, and find everything you need in one convenient place.</p>
    <br>
    <h3>Customer Satisfaction</h3>
    <p>At Raja & Co., customer satisfaction is our top priority. We are committed to providing an exceptional shopping experience, from easy online ordering to prompt delivery and responsive customer support. Your feedback is invaluable to us, and we continuously strive to improve our products and services based on your suggestions and preferences.</p>
    <br>
    <h3>Community Engagement</h3>
    <p>We believe in giving back to the communities we serve. Through various initiatives and partnerships, we support local farmers, promote sustainable practices, and contribute to charitable causes that make a positive impact on society. Together, we can build a healthier, more vibrant community for everyone.</p>
    <br>
    <h3>Get in Touch</h3>
    <p>Thank you for choosing Raja & Co. Whether you're planning a family dinner, stocking up your pantry, or simply looking for a quick snack, we're here to meet your needs. Explore our website, place your order, and let us take care of the rest. For any inquiries or assistance, feel free to contact our friendly customer service team. We look forward to serving you!</p>
    <br>
    <h6>Name: {{ $name }}</h6>
    <p>Email: {{ $email }}</p>
</div>
@endsection
