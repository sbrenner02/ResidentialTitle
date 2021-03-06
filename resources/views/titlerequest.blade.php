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
@if(session('success'))
                    <div class="my-5 col-12">
                        <h2 class="text-center">{{ session('success') }}</h2>
                    </div>
@else
                @if ($errors->any())
                    <div class="alert alert-danger col-12">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-sm-12 col-md-4">
                    <label class="w-100">Date Needed<input type="date" class="form-control" name="date_needed" value="{{ old('date_needed') }}"></label>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label class="w-100">Estimated Closing Date<input type="date" class="form-control" name="closing_date" value="{{ old('closing_date') }}"></label>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label class="w-100">Account Executive
                        <select class="form-control" name="account_executive" value="{{ old('account_executive') }}">
                            <option value="Not Specified" @if (empty(old('account_executive')))selected @endif>Not Specified</option>
                            <option value="Alicia Small" @if (old('account_executive') == 'Alicia Small')selected @endif>Alicia Small</option>
                            <option value="Brooke Adler" @if (old('account_executive') == 'Brooke Adler')selected @endif>Brooke Adler</option>
                            <option value="Jackie Nelson" @if (old('account_executive') == 'Jackie Nelson')selected @endif>Jackie Nelson</option>
                            <option value="Judy Borns" @if (old('account_executive') == 'Judy Borns')selected @endif>Judy Borns</option>
                            <option value="Kellee Dougherty" @if (old('account_executive') == 'Kellee Dougherty')selected @endif>Kellee Dougherty</option>
                            <option value="Melissa Blizzard" @if (old('account_executive') == 'Melissa Blizzard')selected @endif>Melissa Blizzard</option>
                            <option value="Robin Abney-Sivey" @if (old('account_executive') == 'Robin Abney-Spivey')selected @endif>Robin Abney-Spivey</option>
                            <option value="Robyn Perlow" @if (old('account_executive') == 'Robyn Perlow')selected @endif>Robyn Perlow</option>
                        </select></label>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-sm-12 col-md-4">
                    <label class="w-100">Ordered By
                    <input type="text" name="ordered_by_name" class="form-control" value="{{ old('ordered_by_name') }}"></label>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label class="w-100">Phone
                    <input type="tel" id="ordered_by_phone" name="ordered_by_phone" class="form-control" value="{{ old('ordered_by_phone') }}"></label>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label class="w-100">Email
                    <input type="email" name="ordered_by_email" class="form-control" value="{{ old('ordered_by_email') }}"></label>
                </div>

                <div class="row col-12 mt-4 no-gutters">
                    <div class="col-12 mt-4">
                        <h3>Borrowers</h3>
                    </div>
                    <div class="col-sm-12 col-lg-6 row no-gutters pr-md-3">
                        <div class="col-12">
                            <label class="w-100">Name<input type="text" class="form-control" name="borrower_1_name" value="{{ old('borrower_1_name') }}"></label>
                        </div>
                        <div class="col-12">
                            <label class="w-100">Current Street Address<input type="text" class="form-control" name="borrower_1_address_street" value="{{ old('borrower_1_address_street') }}"></label>
                        </div>
                        <div class="col-4">
                            <label>City<input type="text" class="form-control" name="borrower_1_address_city" value="{{ old('borrower_1_address_city') }}"></label>
                        </div>
                        <div class="col-4">
                            <label>State<input type="text" class="form-control" name="borrower_1_address_state" value="{{ old('borrower_1_address_state') }}"></label>
                        </div>
                        <div class="col-4">
                            <label>Zip<input type="text" class="form-control" name="borrower_1_address_zip" value="{{ old('borrower_1_address_zip') }}"></label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 row no-gutters">
                        <div class="col-12">
                            <label class="w-100">Name<input type="text" class="form-control" name="borrower_2_name" value="{{ old('borrower_2_name') }}"></label>
                        </div>
                        <div class="col-12">
                            <label class="w-100">Current Street Address<input type="text" class="form-control" name="borrower_2_address_street" value="{{ old('borrower_2_address_street') }}"></label>
                        </div>
                        <div class="col-4">
                            <label>City<input type="text" class="form-control" name="borrower_2_address_city" value="{{ old('borrower_2_address_city') }}"></label>
                        </div>
                        <div class="col-4">
                            <label>State<input type="text" class="form-control" name="borrower_2_address_state" value="{{ old('borrower_2_address_state') }}"></label>
                        </div>
                        <div class="col-4">
                            <label>Zip<input type="text" class="form-control" name="borrower_2_address_zip" value="{{ old('borrower_2_address_zip') }}"></label>
                        </div>
                    </div>
                </div>

                <div class="row col-12 mt-4 no-gutters">
                    <div class="col-12 mt-4">
                        <h3>Subject Property</h3>
                    </div>
                    <div class="col-sm-6 col-md-4 pr-3">
                        <label class="w-100">Transaction Type
                            <select class="form-control" name="transaction_type" value="{{ old('transaction_type') }}">
                                <option @if (empty(old('transaction_type'))) selected @endif disabled></option>
                                <option value="Purchase" @if (old('transaction_type') == 'Purchase')selected @endif>Purchase</option>
                                <option value="Cash Transaction" @if (old('transaction_type') == 'Cash Transaction')selected @endif>Cash Transaction</option>
                                <option value="Refinance" @if (old('transaction_type') == 'Refinance')selected @endif>Refinance</option>
                                <option value="Foreclosure" @if (old('transaction_type') == 'Foreclosure')selected @endif>Foreclosure</option>
                                <option value="Title Search/Abstract Only" @if (old('transaction_type') == 'Title Search/Abstract Only')selected @endif>Title Search/Abstract Only</option>
                            </select></label>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="w-100">Type of Property
                            <select class="form-control" name="property_type" value="{{ old('property_type') }}">
                                <option @if(empty(old('property_type')))selected @endif disabled></option>
                                <option value="Single Family"  @if(old('property_type') == 'Single Family')selected @endif>Single Family</option>
                                <option value="Condo"  @if(old('property_type') == 'Condo')selected @endif>Condo</option>
                                <option value="Townhome or Rowhouse"  @if(old('property_type') == 'Townhome or Rowhouse')selected @endif>Townhome or Rowhouse</option>
                                <option value="Commercial"  @if(old('property_type') == 'Commercial')selected @endif>Commercial</option>
                                <option value="Mixed Use"  @if(old('property_type') == 'Mixed Use')selected @endif>Mixed Use</option>
                                <option value="Vacant Land"  @if(old('property_type') == 'Vacant Land')selected @endif>Vacant Land</option>
                                <option value="Other"  @if(old('property_type') == 'Other')selected @endif>Other</option>
                            </select></label>
                    </div>
                    <div class="col-6 pr-2">
                        <label class="w-100">Street Address
                            <input type="text" class="form-control" name="property_address_street" value="{{ old('property_street_address') }}"></label>
                    </div>
                    <div class="col-2 pr-2">
                        <label class="w-100">City
                            <input type="text" class="form-control" name="property_address_city" value="{{ old('property_address_city') }}"></label>
                    </div>
                    <div class="col-2 pr-2">
                        <label class="w-100">State
                            <input type="text" class="form-control" name="property_address_state" value="{{ old('property_address_state') }}"></label>
                    </div>
                    <div class="col-2 pr-2">
                        <label class="w-100">Zip
                            <input type="text" class="form-control" name="property_address_zip" value="{{ old('property_address_zip') }}"></label>
                    </div>
                    <div class="col-sm-12 col-md-3 radio my-2">
                        <label class="w-100">Water/Sewer Fees</label>
                        <label><input type="radio" name="water_sewer_fees" value="yes" class="mx-2" @if(old('water_sewer_fees') == 'yes')checked @endif>Yes</label>
                        <label><input type="radio" name="water_sewer_fees" value="no" class="mx-2" @if(old('water_sewer_fees') == 'no')checked @endif>No</label>
                    </div>
                    <div class="col-sm-12 col-md-3 my-2">
                        <label class="w-100">HOA/Condo Fees</label>
                        <label><input type="radio" name="hoa_condo_fees" value="yes" class="mx-2" @if(old('hoa_condo_fees') == 'yes')checked @endif>Yes</label>
                        <label><input type="radio" name="hoa_condo_fees" value="no" class="mx-2" @if(old('hoa_condo_fees') == 'no')checked @endif>No</label>
                    </div>
                    <div class="col-sm-12 col-md-3 my-2">
                        <label class="w-100">Front Footage Fees</label>
                        <label><input type="radio" name="front_footage_fees" value="yes" class="mx-2" @if(old('front_footage_fees') == 'yes')checked @endif>Yes</label>
                        <label><input type="radio" name="front_footage_fees" value="no" class="mx-2" @if(old('front_footage_fees') == 'no')checked @endif>No</label>
                    </div>
                    <div class="col-sm-12 col-md-3 my-2">
                        <label class="w-100">Town Tax</label>
                        <label><input type="radio" name="town_tax" value="yes" class="mx-2" @if(old('town_tax') == 'yes')checked @endif>Yes</label>
                        <label><input type="radio" name="town_tax" value="no" class="mx-2" @if(old('town_tax') == 'no')checked @endif>No</label>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <h3>Lender Info</h3>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="w-100">Lender Contact
                        <input type="text" name="lender_name" class="form-control" value="{{ old('lender_name') }}"></label>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="w-100">Lender Company
                        <input type="text" name="lender_company" class="form-control" value="{{ old('lender_company') }}"></label>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="w-100">Phone
                        <input type="tel" id="lender_phone" name="lender_phone" class="form-control" value="{{ old('lender_phone') }}"></label>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="w-100">Email
                        <input type="email" name="lender_email" class="form-control" value="{{ old('lender_email') }}"></label>
                </div>

                <div class="col-12 mt-4">
                    <h3>Buyer's Agent</h3>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="w-100">Name<input type="text" name="buying_agent_name" class="form-control" value="{{ old('buying_agent_name') }}"></label>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="w-100">Brokerage<input type="text" name="buying_agent_brokerage" class="form-control" value="{{ old('buying_agent_brokerage') }}"></label>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="w-100">Phone
                    <input type="tel" id="buying_agent_phone" name="buying_agent_phone" class="form-control" value="{{ old('buying_agent_phone') }}"></label>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="w-100">Email
                    <input type="email" name="buying_agent_email" class="form-control"value="{{ old('buying_agent_email') }}"></label>
                </div>
                <div class="col-sm-12 col-md-3">
                    <label class="w-100">Commission %
                    <input type="text" name="buying_agent_percent" class="form-control" value="{{ old('buying_agent_percent') }}"></label>
                </div>
                <div class="col-sm-12 col-md-3">
                    <label class="w-100">Flat Fee
                    <input type="text" name="buying_agent_flat_fee" class="form-control" value="{{ old('buying_agent_flat_fee') }}"></label>
                </div>
                <div class="col-sm-12 col-md-3">
                    <label class="w-100">Admin Fee
                    <input type="text" name="buying_agent_admin_fee" class="form-control" value="{{ old('buying_agent_admin_fee') }}"></label>
                </div>
                <div class="col-sm-12 col-md-3">
                    <label class="w-100">Other Fee(s)
                    <input type="text" name="buying_agent_other_fee" class="form-control" value="{{ old('buying_agent_other_fee') }}"></label>
                </div>
            </div>


            <div class="row col-12 mt-4">
                <div class="col-12 mt-4">
                    <h3>Sellers</h3>
                </div>
                <div class="col-sm-12 col-md-6 row no-gutters">
                    <div class="col-12">
                        <label class="w-100">Name<input type="text" class="form-control" name="seller_1_name" value="{{ old('seller_1_name') }}"></label>
                    </div>
                    <div class="col-12">
                        <label class="w-100">Street Address<input type="text" class="form-control" name="seller_1_address_street" value="{{ old('seller_1_address_street') }}"></label>
                    </div>
                    <div class="col-4">
                        <label>City<input type="text" class="form-control" name="seller_1_address_city" value="{{ old('seller_1_address_city') }}"></label>
                    </div>
                    <div class="col-4">
                        <label>State<input type="text" class="form-control" name="seller_1_address_state" value="{{ old('seller_1_address_state') }}"></label>
                    </div>
                    <div class="col-4">
                        <label>Zip<input type="text" class="form-control" name="seller_1_address_zip" value="{{ old('seller_1_address_zip') }}"></label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 row no-gutters">
                    <div class="col-12">
                        <label class="w-100">Name<input type="text" class="form-control" name="seller_2_name" value="{{ old('seller_2_name') }}"></label>
                    </div>
                    <div class="col-12">
                        <label class="w-100">Street Address<input type="text" class="form-control" name="seller_2_address_street" value="{{ old('seller_2_address_street') }}"></label>
                    </div>
                    <div class="col-4">
                        <label>City<input type="text" class="form-control" name="seller_2_address_city" value="{{ old('seller_2_address_city') }}"></label>
                    </div>
                    <div class="col-4">
                        <label>State<input type="text" class="form-control" name="seller_2_address_state" value="{{ old('seller_2_address_state') }}"></label>
                    </div>
                    <div class="col-4">
                        <label>Zip<input type="text" class="form-control" name="seller_2_address_zip" value="{{ old('seller_2_address_zip') }}"></label>
                    </div>
                </div>
                <div class="row col-12 mt-4 no-gutters">
                    <div class="col-12 mt-4">
                        <h3>Special Instructions</h3>
                    </div>
                    <div class="col-12 row no-gutters pr-0">
                        <textarea name="instructions" rows="8" class="form-control w-100 font-weight-bold"></textarea>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-lg btn-outline-primary float-right">Request Title</button>
                </div>
                @endif
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        function phoneMask() {
            var num = $(this).val().replace(/\D/g,'');
            $(this).val(num.substring(1,1) + '(' + num.substring(0,3) + ') ' + num.substring(3,6) + '-' + num.substring(6,9));
        }
        $('[type="tel"]').keypress(phoneMask);

    </script>
@endsection
