    <hr>

    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Subcribe to our Newsletter</h2>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-8">
                    <form action="/store-newsletter" method="POST" class="subscribe-form">
                        @csrf
                        <div class="form-group d-flex">
                        <input type="email" class="form-control" name="email" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>