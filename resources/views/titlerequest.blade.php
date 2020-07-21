@extends('layout')
@section('content')
    <?php
    $currentDateTime = date('Y-m-d H:i:s');
    ?>
    <!--<editor-fold desc="Description">-->
    <div class="row col-12 justify-content-center mb-5 no-gutters">
        <form name="title_form" id="title_form" method="post" action="/contact/titleRequest">
        @csrf
            <input type="hidden" value="order_date" value="{{ $currentDateTime }}">
            <div class="row col-12">
                <div class="col-12 text-center"><h1>Title Request Order Form</h1></div>
                <div class="col-3">
                    <label class="w-100">Date Needed<input type="date" class="form-control" name="date_needed"></label>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-4">
                    <label class="w-100">Ordered By
                    <input type="text" name="ordered_by_name" class="form-control"></label>
                </div>
                <div class="col-4">
                    <label class="w-100">Phone
                    <input type="text" name="ordered_by_phone" class="form-control"></label>
                </div>
                <div class="col-4">
                    <label class="w-100">Email
                    <input type="text" name="ordered_by_email" class="form-control"></label>
                </div>
                <div class="col-12 mt-4">
                    <h3>Listing Agent</h3>
                </div>
                <div class="col-6">
                    <label class="w-100">Name<input type="text" name="listing_agent_name" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Brokerage<input type="text" name="listing_agent_brokerage" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Phone
                    <input type="text" name="listing_agent_phone" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Email
                    <input type="text" name="listing_agent_email" class="form-control"></label>
                </div>
                <div class="col-3">
                    <label class="w-100">Commission %
                    <input type="text" name="listing_agent_percent" class="form-control"></label>
                </div>
                <div class="col-3">
                    <label class="w-100">Flat Fee
                    <input type="text" name="listing_agent_flat_fee" class="form-control"></label>
                </div>
                <div class="col-3">
                    <label class="w-100">Admin Fee
                    <input type="text" name="listing_agent_admin_fee" class="form-control"></label>
                </div>
                <div class="col-3">
                    <label class="w-100">Other Fee(s)
                    <input type="text" name="listing_agent_other_fee" class="form-control"></label>
                </div>
                <div class="col-12 mt-4">
                    <h3>Buyer's Agent</h3>
                </div>
                <div class="col-6">
                    <label class="w-100">Name<input type="text" name="buying_agent_name" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Brokerage<input type="text" name="buying_agent_brokerage" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Phone
                    <input type="text" name="buying_agent_phone" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Email
                    <input type="text" name="buying_agent_email" class="form-control"></label>
                </div>
                <div class="col-3">
                    <label class="w-100">Commission %
                    <input type="text" name="buying_agent_percent" class="form-control"></label>
                </div>
                <div class="col-3">
                    <label class="w-100">Flat Fee
                    <input type="text" name="buying_agent_flat_fee" class="form-control"></label>
                </div>
                <div class="col-3">
                    <label class="w-100">Admin Fee
                    <input type="text" name="buying_agent_admin_fee" class="form-control"></label>
                </div>
                <div class="col-3">
                    <label class="w-100">Other Fee(s)
                    <input type="text" name="buying_agent_other_fee" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Lender Name
                    <input type="text" name="lender_name" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Lender Company
                    <input type="text" name="lender_company" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Phone
                    <input type="text" name="lender_phone" class="form-control"></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Email
                    <input type="text" name="lender_email" class="form-control"></label>
                </div>
            </div>
            <div class="row col-12 mt-4">
                <div class="col-12 mt-4">
                    <h3>Subject Property</h3>
                </div>
                <div class="col-4">
                    <label class="w-100">Transaction Type
                    <select class="form-control" name="transaction_type">
                        <option selected disabled></option>
                        <option value="Purchase">Purchase</option>
                        <option value="Cash Transaction">Cash Transaction</option>
                        <option value="Refinance">Refinance</option>
                        <option value="Foreclosure">Foreclosure</option>
                        <option value="Title Search/Abstract Only">Title Search/Abstract Only</option>
                    </select></label>
                </div>
                <div class="col-4">
                    <label class="w-100">Type of Property
                    <select class="form-control" name="property_type">
                        <option selected disabled></option>
                        <option value="Single Family">Single Family</option>
                        <option value="Condo">Condo</option>
                        <option value="Townhome or Rowhouse">Townhome or Rowhouse</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Mixed Use">Mixed Use</option>
                        <option value="Vacant Land">Vacant Land</option>
                        <option value="Other">Other</option>
                    </select></label>
                </div>
                <div class="col-6">
                    <label class="w-100">Street Address
                    <input type="text" class="form-control" name="property_address_street"></label>
                </div>
                <div class="col-2">
                    <label class="w-100">City
                    <input type="text" class="form-control" name="property_address_city"></label>
                </div>
                <div class="col-2">
                    <label class="w-100">State
                    <input type="text" class="form-control" name="property_address_state"></label>
                </div>
                <div class="col-2">
                    <label class="w-100">Zip
                    <input type="text" class="form-control" name="property_address_zip"></label>
                </div>
                <div class="col-3 radio my-2">
                    <label class="w-100">Water/Sewer Fees</label>
                    <label><input type="radio" name="water_sewer_fees" value="yes" class="mx-2">Yes</label>
                    <label><input type="radio" name="water_sewer_fees" value="no" class="mx-2">No</label>
                </div>
                <div class="col-3 my-2">
                    <label class="w-100">HOA/Condo Fees</label>
                    <label><input type="radio" name="hoa_condo_fees" value="yes" class="mx-2">Yes</label>
                    <label><input type="radio" name="hoa_condo_fees" value="no" class="mx-2">No</label>
                </div>
                <div class="col-3 my-2">
                    <label class="w-100">Front Footage Fees</label>
                    <label><input type="radio" name="front_footage_fees" value="yes" class="mx-2">Yes</label>
                    <label><input type="radio" name="front_footage_fees" value="no" class="mx-2">No</label>
                </div>
                <div class="col-3 my-2">
                    <label class="w-100">Town Tax</label>
                    <label><input type="radio" name="town_tax" value="yes" class="mx-2">Yes</label>
                    <label><input type="radio" name="town_tax" value="no" class="mx-2">No</label>
                </div>
            </div>
            <div class="row col-12 mt-4">
                <div class="col-12 mt-4">
                    <h3>Borrowers</h3>
                </div>
                <div class="col-6 row no-gutters">
                    <div class="col-12">
                        <label class="w-100">Name<input type="text" class="form-control" name="borrower_1_name"></label>
                    </div>
                    <div class="col-12">
                        <label class="w-100">Current Street Address<input type="text" class="form-control" name="borrower_1_address_street"></label>
                    </div>
                    <div class="col-4">
                        <label>City<input type="text" class="form-control" name="borrower_1_address_city"></label>
                    </div>
                    <div class="col-4">
                        <label>State<input type="text" class="form-control" name="borrower_1_address_state"></label>
                    </div>
                    <div class="col-4">
                        <label>Zip<input type="text" class="form-control" name="borrower_1_address_zip"></label>
                    </div>
                </div>
                <div class="col-6 row no-gutters">
                    <div class="col-12">
                        <label class="w-100">Name<input type="text" class="form-control" name="borrower_2_name"></label>
                    </div>
                    <div class="col-12">
                        <label class="w-100">Current Street Address<input type="text" class="form-control" name="borrower_2_address_street"></label>
                    </div>
                    <div class="col-4">
                        <label>City<input type="text" class="form-control" name="borrower_2_address_city"></label>
                    </div>
                    <div class="col-4">
                        <label>State<input type="text" class="form-control" name="borrower_2_address_state"></label>
                    </div>
                    <div class="col-4">
                        <label>Zip<input type="text" class="form-control" name="borrower_2_address_zip"></label>
                    </div>
                </div>
            </div>
            <div class="row col-12 mt-4">
                <div class="col-12 mt-4">
                    <h3>Sellers</h3>
                </div>
                <div class="col-6 row no-gutters">
                    <div class="col-12">
                        <label class="w-100">Name<input type="text" class="form-control" name="seller_1_name"></label>
                    </div>
                    <div class="col-12">
                        <label class="w-100">Street Address<input type="text" class="form-control" name="seller_1_address_street"></label>
                    </div>
                    <div class="col-4">
                        <label>City<input type="text" class="form-control" name="seller_1_address_city"></label>
                    </div>
                    <div class="col-4">
                        <label>State<input type="text" class="form-control" name="seller_1_address_state"></label>
                    </div>
                    <div class="col-4">
                        <label>Zip<input type="text" class="form-control" name="seller_1_address_zip"></label>
                    </div>
                </div>
                <div class="col-6 row no-gutters">
                    <div class="col-12">
                        <label class="w-100">Name<input type="text" class="form-control" name="seller_2_name"></label>
                    </div>
                    <div class="col-12">
                        <label class="w-100">Street Address<input type="text" class="form-control" name="seller_2_address_street"></label>
                    </div>
                    <div class="col-4">
                        <label>City<input type="text" class="form-control" name="seller_2_address_city"></label>
                    </div>
                    <div class="col-4">
                        <label>State<input type="text" class="form-control" name="seller_2_address_state"></label>
                    </div>
                    <div class="col-4">
                        <label>Zip<input type="text" class="form-control" name="seller_2_address_zip"></label>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
