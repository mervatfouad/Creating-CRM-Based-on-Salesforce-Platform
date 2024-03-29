<?php

namespace Modules\Invoices\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class InvoicesRequest
 * @package Modules\Invoices\Http\Requests
 */
class InvoicesRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'invoice_number' => 'required',
            'discount' =>  'sometimes|nullable|numeric|min:0',
            'paid' =>  'sometimes|nullable|numeric|min:0',
            'delivery_cost' =>  'sometimes|nullable|numeric|min:0',
            'rows.*.product_name' => 'required',
            'rows.*.price' => 'required|numeric|min:0.1',
            'rows.*.quantity' => 'required|numeric|min:1',
        ];
    }
}
