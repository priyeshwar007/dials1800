@extends('layouts.mainTable')

@section('content')

<div id="page-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 mb--sm">
          <div class="gradient-wrapper">
            <div class="gradient-title">
              <h2>Post A Free Add</h2>
            </div>
            <div class="input-layout1 gradient-padding post-ad-page">
              <div class="border-bottom-2 mb-50 pb-30">
              <div class="section-title-left-dark border-bottom d-flex">
                <h3>Product Information</h3>
              </div>
              <form>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                    <label class="control-label">Category<span> *</span></label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">Select a Category</option>
                        <option value="1">Electronics</option>
                        <option value="2">Fashin &amp; Life Style</option>
                        <option value="3">Car &amp; Vehicles</option>
                        <option value="3">Hobby, Sport &amp; Kids</option>
                        <option value="3">Pets &amp; Animals</option>
                        <option value="3">Overseas Jobs</option>
                        <option value="3">Property</option>
                        <option value="3">Education</option>
                        <option value="3">Home &amp; Garden</option>
                        <option value="3">Business &amp; Industry</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                    <label class="control-label possition-top" for="first-name">Add Type <span> *</span></label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                    <div class="form-group">
                      <div class="radio radio-primary radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline1" checked="">
                        <label for="inlineRadio1">Indivisual</label>
                      </div>
                      <div class="radio radio-primary radio-inline">
                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline1">
                        <label for="inlineRadio2"> Business </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                    <label class="control-label" for="add-title">Ad Title <span> *</span></label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                    <div class="form-group">
                      <input type="text" id="add-title" class="form-control" placeholder="First Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                    <label class="control-label" for="describe-ad">Description<span> *</span></label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                    <div class="form-group">
                      <textarea placeholder="What makes your ad unique" class="textarea form-control" name="message" id="description" rows="4" cols="20" data-error="Message field is required" required=""></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                    <label class="control-label" for="first-name">Set Price <span> *</span></label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                    <div class="form-group">
                      <input type="text" id="describe-ad2" class="form-control price-box" placeholder="$ Set your Price Here">
                      <div class="radio radio-primary radio-inline">
                        <input type="radio" id="inlineRadio3" value="option1" name="radioInline2" checked="">
                        <label for="inlineRadio3">Indivisual</label>
                      </div>
                      <div class="radio radio-primary radio-inline">
                        <input type="radio" id="inlineRadio4" value="option2" name="radioInline2">
                        <label for="inlineRadio4"> Business </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                    <label class="control-label" for="add-title">Upload Picture<span> *</span></label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                    <div class="form-group">
                      <ul class="picture-upload">
                        <li>
                          <input type="file" id="img-upload1" class="form-control">
                        </li>
                        <li>
                          <input type="file" id="img-upload2" class="form-control">
                        </li>
                        <li>
                          <input type="file" id="img-upload3" class="form-control">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                </form></div>
                <div class="border-bottom-2 mb-50 pb-30">
                  <div class="section-title-left-dark border-bottom d-flex">
                    <h3>Seller Information</h3>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                      <label class="control-label" for="seller-name">Name<span> *</span></label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                      <div class="form-group">
                        <input type="text" id="seller-name" class="form-control" placeholder="Seller Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                      <label class="control-label" for="seller-mail">Seller Email<span> *</span></label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                      <div class="form-group">
                        <input type="text" id="seller-mail" class="form-control" placeholder="Enter Your E-mail Address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                      <label class="control-label" for="phone">Phone<span> *</span></label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                      <div class="form-group">
                        <input type="text" id="phone" class="form-control" placeholder="Enter your Mobile">
                        <div class="checkbox checkbox-primary checkbox-circle">
                          <input id="checkbox1" type="checkbox" checked="">
                          <label for="checkbox1">Hide the phone number</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                      <label class="control-label" for="location">Location<span> *</span></label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                      <div class="form-group">
                        <input type="text" id="location" class="form-control" placeholder="Type Your Location">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                      <label class="control-label" for="country">Country<span> *</span></label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                      <div class="form-group">
                        <div class="custom-select">
                          <select id="country" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                            <option value="0">Select your country</option>
                            <option value="1">Bangladesh</option>
                            <option value="2">Spain</option>
                            <option value="3">Belgium</option>
                            <option value="4">Ecuador</option>
                            <option value="5">Ghana</option>
                            <option value="6">South Africa</option>
                            <option value="7">India</option>
                            <option value="8">Pakistan</option>
                            <option value="9">Thailand</option>
                            <option value="10">Malaysia</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-mb-12">
                      <label class="control-label" for="zip-code">ZIP Code<span> *</span></label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-mb-12">
                      <div class="form-group">
                        <input type="text" id="zip-code" class="form-control" placeholder="Enter Your ZIP Code">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section-title-left-dark border-bottom d-flex">
                  <h3>Make Your Ad Premium</h3>
                </div>
                <div class="pl-50 pl-none--xs">
                  <p>Premium ads help sellers promote their product or service by getting their ads more visibility with more buyers and sell what they want faster. </p>
                  <ul class="make-premium">
                    <li>
                      <div class="form-group">
                        <div class="radio radio-primary radio-inline">
                          <input type="radio" id="inlineRadio5" value="option1" name="radioInline3" checked="">
                          <label for="inlineRadio5">Regular List</label>
                          <span>$00.00</span> </div>
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <div class="radio radio-primary radio-inline">
                          <input type="radio" id="inlineRadio6" value="option1" name="radioInline3">
                          <label for="inlineRadio6">Urgent Ad</label>
                          <span>$10.00</span> </div>
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <div class="radio radio-primary radio-inline">
                          <input type="radio" id="inlineRadio7" value="option1" name="radioInline3">
                          <label for="inlineRadio7">Top of the Page Ad</label>
                          <span>$10.00</span> </div>
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <div class="radio radio-primary radio-inline">
                          <input type="radio" id="inlineRadio8" value="option1" name="radioInline3">
                          <label for="inlineRadio8">Top of the Page Ad + Urgent Ad</label>
                          <span>$15.00</span> </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="select-payment-method mt-20">
                    <li>
                      <div class="form-group">
                        <div class="custom-select">
                          <select id="card" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                            <option value="0">Select Payment Method</option>
                            <option value="1">Paypal</option>
                            <option value="2">Master Card</option>
                            <option value="3">Visa Card</option>
                            <option value="4">Scrill</option>
                          </select>
                        </div>
                        <div class="checkbox checkbox-primary checkbox-circle">
                          <input id="checkbox3" type="checkbox" checked="">
                          <label for="checkbox3">Remember above contact information.</label>
                        </div>
                      </div>
                    </li>
                    <li>
                      <h3>Total Payable: <span>$10</span></h3>
                    </li>
                  </ul>
                  <div class="form-group mt-20">
                    <button type="submit" class="cp-default-btn-sm">Submit Now!</button>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
          <div class="sidebar-item-box"> </div>
          <div class="sidebar-item-box">
            <div class="gradient-wrapper">
              <div class="gradient-title">
                <h3>How To Sell Quickly?</h3>
              </div>
              <ul class="sidebar-sell-quickly">
                <li><i class="fa fa-check-circle"></i> <a href="#">Use a brief title and description of the item.</a></li>
                <li> <i class="fa fa-check-circle"></i> <a href="#">Make sure you post in the correct category</a></li>
                <li><i class="fa fa-check-circle"></i> <a href="#">Add nice photos to your ad</a></li>
                <li><i class="fa fa-check-circle"></i> <a href="#">Put a reasonable price</a></li>
                <li><i class="fa fa-check-circle"></i> <a href="#">Check the item before publish</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end .container --> 
    
  </div>


@stop