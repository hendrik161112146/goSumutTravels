<!-- Start booking Area -->
<section class="booking-area" id="booking">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#flights" role="tab" data-toggle="tab">flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hotels" role="tab" data-toggle="tab">hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#flights-hotels" role="tab" data-toggle="tab">flights+hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#holidays" role="tab" data-toggle="tab">Holidays</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="flights">
                        <h4>Book Your Flights</h4>
                        <form class="booking-form" id="booking" action="mail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="from" class="single-in form-control" placeholder="From" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="to" class="single-in form-control" placeholder="To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker" name="start" class="single-in form-control"  onblur="this.placeholder = 'Start'" type="text" placeholder="Start" required>
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker2" name="return" class="single-in form-control"  onblur="this.placeholder = 'Return'" type="text" placeholder="Return" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="adults" class="single-in form-control" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults'" required="">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="child" class="single-in form-control" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child'">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="hotels">
                        <h4>Book Your Hotels</h4>
                        <form class="booking-form" id="booking" action="mail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="from" class="single-in form-control" placeholder="From" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="to" class="single-in form-control" placeholder="To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker" name="start" class="single-in form-control"  onblur="this.placeholder = 'Start'" type="text" placeholder="Start" required>
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker2" name="return" class="single-in form-control"  onblur="this.placeholder = 'Return'" type="text" placeholder="Return" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="adults" class="single-in form-control" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults'" required="">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="child" class="single-in form-control" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child'">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="flights-hotels">
                        <h4>Book Your Flights & Hotels</h4>
                        <form class="booking-form" id="booking" action="mail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="from" class="single-in form-control" placeholder="From" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="to" class="single-in form-control" placeholder="To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker" name="start" class="single-in form-control"  onblur="this.placeholder = 'Start'" type="text" placeholder="Start" required>
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker2" name="return" class="single-in form-control"  onblur="this.placeholder = 'Return'" type="text" placeholder="Return" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="adults" class="single-in form-control" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults'" required="">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="child" class="single-in form-control" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child'">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="holidays">
                        <h4>Book Your Holidays</h4>
                        <form class="booking-form" id="booking" action="mail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="from" class="single-in form-control" placeholder="From" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="to" class="single-in form-control" placeholder="To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker" name="start" class="single-in form-control"  onblur="this.placeholder = 'Start'" type="text" placeholder="Start" required>
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker2" name="return" class="single-in form-control"  onblur="this.placeholder = 'Return'" type="text" placeholder="Return" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="adults" class="single-in form-control" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults'" required="">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="child" class="single-in form-control" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child'">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End booking Area -->