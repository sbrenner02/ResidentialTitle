<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ResidentialTitle.com Title Request</title>
</head>
<body>
<b>New Title Request Received from ResidentialTitle.com:</b> <br>
<h1>Title Request Form</h1>
<b>Date Needed:</b> {{ date('M-d-Y', strtotime($data['date_needed'])) }}<br>
<b>Estimated Closing Date:</b> {{ date('M-d-Y', strtotime($data['closing_date'])) }}<br>
<b>Account Executive</b> {{$data['account_executive']}}
<b>Ordered By:</b> {{ $data['ordered_by_name'] }}<br>
<b>Phone:</b> {{ $data['ordered_by_phone'] }}<br>
<b><Email></Email>:</b> {{ $data['ordered_by_email'] }}<br>
<br>
<h1>Borrower 1</h1>
<b>Name:</b> {{ $data['borrower_1_name'] }}<br>
<b>Address:</b> {{ $data['borrower_1_address_street'] }} {{ $data['borrower_1_address_city'] }}, {{ $data['borrower_1_address_state'] }} {{ $data['borrower_1_address_zip'] }}<br>
<br>
<h1>Borrower 2</h1>
<b>Name:</b> {{ $data['borrower_2_name'] }}<br>
<b>Address:</b> {{ $data['borrower_2_address_street'] }} {{ $data['borrower_2_address_city'] }}, {{ $data['borrower_2_address_state'] }} {{ $data['borrower_2_address_zip'] }}<br>
<br>
<h1>Subject Property</h1>
<b>Transaction Type:</b> {{ $data['transaction_type'] }}<br>
<b>Property Type:</b> {{ $data['property_type'] }}<br>
<b>Proprty Address:</b> {{ $data['property_address_street'] }} {{ $data['property_address_city'] }}, {{ $data['property_address_state'] }} {{ $data['property_address_zip'] }}<br>
<b>Water / Sewer Fees:</b> {{ $data['water_sewer_fees'] }}<br>
<b>HOA / Condo Fees:</b> {{ $data['hoa_condo_fees'] }}<br>
<b>Front Footage Fees:</b> {{ $data['front_footage_fees'] }}<br>
<b>Town Tax:</b> {{ $data['town_tax'] }}<br>
<br>
<h1>Lender Info</h1>
<b>Name:</b> {{ $data['lender_name'] }}<br>
<b>Company:</b> {{ $data['lender_company'] }}<br>
<b>Phone:</b> {{ $data['lender_phone'] }}<br>
<b>Email:</b> {{ $data['lender_email'] }}<br>
<br>
<h1>Buying Agent</h1>
<b>Name:</b> {{ $data['buying_agent_name'] }}<br>
<b>Brokerage:</b> {{ $data['buying_agent_brokerage'] }}<br>
<b>Phone:</b> {{ $data['buying_agent_phone'] }}<br>
<b>Email:</b> {{ $data['buying_agent_email'] }}<br>
<b>Commission %:</b> {{ $data['buying_agent_percent'] }}<br>
<b>Flat Fee:</b> {{ $data['buying_agent_flat_fee'] }}<br>
<b>Admin Fee:</b> {{ $data['buying_agent_admin_fee'] }}<br>
<b>Other Fees:</b> {{ $data['buying_agent_other_fee'] }}<br>
<br>
<h1>Seller 1</h1>
<b>Name:</b> {{ $data['seller_1_name'] }}<br>
<b>Address:</b> {{ $data['seller_1_address_street'] }} {{ $data['seller_1_address_city'] }}, {{ $data['seller_1_address_state'] }} {{ $data['seller_1_address_zip'] }}<br>
<br>
<h1>Seller 2</h1>
<b>Name:</b> {{ $data['seller_2_name'] }}<br>
<b>Address:</b> {{ $data['seller_2_address_street'] }}   {{ $data['seller_2_address_city'] }}, {{ $data['seller_2_address_state'] }} {{ $data['seller_2_address_zip'] }}<br>
<br>
<b>Special Instructions:</b><br>
{!! nl2br(e($data['instructions']))!!}
</body>
</html>
