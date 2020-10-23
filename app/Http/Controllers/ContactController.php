<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Mail\SendMail;
use App\Mail\TitleRequest;

class ContactController extends Controller
{
    function titleRequest(Request $request)
    {
        $this->validate($request, [
            'date_needed' => 'required|date|date_format:Y-m-d',
            'closing_date' => 'required|date|date_format:Y-m-d',
            'ordered_by_name'  =>  'required',
            'ordered_by_phone'  =>  'required',
            'ordered_by_email'  =>  'required',
            'buying_agent_name' => 'required',
            'buying_agent_brokerage' => 'required',
            'buying_agent_phone' => 'required',
            'buying_agent_email' => 'nullable',
            'buying_agent_percent' => 'nullable',
            'buying_agent_flat_fee' => 'nullable',
            'buying_agent_admin_fee' => 'required',
            'buying_agent_other_fee' => 'nullable',
            'lender_name' => 'required',
            'lender_company' => 'required',
            'lender_phone' => 'required',
            'lender_email' => 'required',
            'transaction_type' => 'required',
            'property_type' => 'nullable',
            'property_address_street' => 'nullable',
            'property_address_city' => 'required',
            'property_address_state' => 'required',
            'property_address_zip' => 'required',
            'water_sewer_fees' => 'required',
            'hoa_condo_fees' => 'required',
            'front_footage_fees' => 'required',
            'town_tax' => 'required',
            'borrower_1_name' => 'required',
            'borrower_1_address_street' => 'required',
            'borrower_1_address_city' => 'required',
            'borrower_1_address_state' => 'required',
            'borrower_1_address_zip' => 'required',
            'borrower_2_name' => 'nullable',
            'borrower_2_address_street' => 'nullable',
            'borrower_2_address_city' => 'nullable',
            'borrower_2_address_state' => 'nullable',
            'borrower_2_address_zip' => 'nullable',
            'seller_1_name' => 'required',
            'seller_1_address_street' => 'nullable',
            'seller_1_address_city' => 'nullable',
            'seller_1_address_state' => 'nullable',
            'seller_1_address_zip' => 'nullable',
            'seller_2_name' => 'nullable',
            'seller_2_address_street' => 'nullable',
            'seller_2_address_city' => 'nullable',
            'seller_2_address_state' => 'nullable',
            'seller_2_address_zip' => 'nullable',
            'instructions' => 'nullable'

        ]);

        $data = array(
            'date_needed' => $request->date_needed,
            'closing_date' => $request->closing_date,
            'account_executive' => $request->account_executive,
            'ordered_by_name'  =>  $request->ordered_by_name,
            'ordered_by_phone'  =>  $request->ordered_by_phone,
            'ordered_by_email'  =>  $request->ordered_by_email,
            'buying_agent_name' => $request->buying_agent_name,
            'buying_agent_brokerage' => $request->buying_agent_brokerage,
            'buying_agent_phone' => $request->buying_agent_phone,
            'buying_agent_email' => $request->buying_agent_email,
            'buying_agent_percent' => $request->buying_agent_percent,
            'buying_agent_flat_fee' => $request->buying_agent_flat_fee,
            'buying_agent_admin_fee' => $request->buying_agent_admin_fee,
            'buying_agent_other_fee' => $request->buying_agent_other_fee,
            'lender_name' => $request->lender_name,
            'lender_company' => $request->lender_company,
            'lender_phone' => $request->lender_phone,
            'lender_email' => $request->lender_email,
            'transaction_type' => $request->transaction_type,
            'property_type' => $request->property_type,
            'property_address_street' => $request->property_address_street,
            'property_address_city' => $request->property_address_city,
            'property_address_state' => $request->property_address_state,
            'property_address_zip' => $request->property_address_zip,
            'water_sewer_fees' => $request->water_sewer_fees,
            'hoa_condo_fees' => $request->hoa_condo_fees,
            'front_footage_fees' => $request->front_footage_fees,
            'town_tax' => $request->town_tax,
            'borrower_1_name' => $request->borrower_1_name,
            'borrower_1_address_street' => $request->borrower_1_address_street,
            'borrower_1_address_city' => $request->borrower_1_address_city,
            'borrower_1_address_state' => $request->borrower_1_address_state,
            'borrower_1_address_zip' => $request->borrower_1_address_zip,
            'borrower_2_name' => $request->borrower_2_name,
            'borrower_2_address_street' => $request->borrower_2_address_street,
            'borrower_2_address_city' => $request->borrower_2_address_city,
            'borrower_2_address_state' => $request->borrower_2_address_state,
            'borrower_2_address_zip' => $request->borrower_2_address_zip,
            'seller_1_name' => $request->seller_1_name,
            'seller_1_address_street' => $request->seller_1_address_street,
            'seller_1_address_city' => $request->seller_1_address_city,
            'seller_1_address_state' => $request->seller_1_address_state,
            'seller_1_address_zip' => $request->seller1_address_zip,
            'seller_2_name' => $request->seller_2_name,
            'seller_2_address_street' => $request->seller_2_address_street,
            'seller_2_address_city' => $request->seller_2_address_city,
            'seller_2_address_state' => $request->seller_2_address_state,
            'seller_2_address_zip' => $request->seller_2_address_zip,
            'instructions' => $request->instructions
        );

        Mail::to('info@residentialtitle.com')->send(new TitleRequest($data));
        return back()->with('success', 'Your Title Request has been submitted, we will be in touch with you soon!');

    }

    function contact(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'phone' => 'required|min:10|numeric',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message'   =>   $request->message
        );

        Mail::to('info@residentialtitle.com')->send(new SendMail($data));
        return back()->with('confirm_message', 'Thanks for contacting us! We will be in touch with you soon!');

    }
}
