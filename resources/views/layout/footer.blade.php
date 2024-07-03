<div id="footer" class="bg-secondary">
    <div class="row text-white mx-2">
        <div class="col-4">
            <h3 class="py-3 fw-bold">{{ config('app.name') }}</h3>
            <p style="max-width: 500px;">Royal University of Phnom Penh (Campus 1), Russian Federation Blvd (110), Touk Kork, Phnom Penh, Cambodia</p>
        </div>
        <div class="col-4">
            <h3 class="py-3 fw-bold">Explore</h3>
            <a href="{{ url('/') }}" class="nav-link">Home</a>
            <a href="{{ url('/contact') }}" class="nav-link">Contact Us</a>
        </div>
        <div class="col-4">
            <h3 class="py-3 ms-3">Follow Us</h3>
            <i class="bi bi-facebook mx-3 fs-2"></i>
            <i class="bi bi-telegram mx-3 fs-2"></i>
            <i class="bi bi-instagram mx-3 fs-2"></i>
            <i class="bi bi-github mx-3 fs-2"></i>         
        </div>
        <div class="pt-3 text-white">
            <h3>Contact Us</h3>
            <p>Email: support@job-board.com</p>
            <p>Tel: +855 96 311 8521</p>
        </div>
        <hr class="border-2 mx-2"/>
        <p class="text-center">Copyright &#64; {{ config('app.name')  . ' ' . Date('Y') }}</p>
    </div>
</div>