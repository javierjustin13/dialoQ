@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/copyright.css') }}">
@endpush

<div class="copyright" style="color: #FCEAFC" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
    <div class="copyright-header" style="color: #FCEAFC">
        <a href="{{ route('terms') }}">Terms</a>
        <p>&nbsp|&nbsp</p>
        <a href="{{ route('aboutus') }}">About Us</a>
        <p>&nbsp|&nbsp</p>
        <a href="{{ route('FAQ') }}">FAQ</a>
    </div>
    <div class="copyright-footer">
        &copy 2023 dialoQ by DEGJA
    </div>

</div>