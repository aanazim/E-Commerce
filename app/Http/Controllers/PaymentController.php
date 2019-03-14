<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use Gloudemans\Shoppingcart\Facades\Cart;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pages.payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



       return $request;

        /*
        $apiContext = new \PayPal\Rest\ApiContext(
             new \PayPal\Auth\OAuthTokenCredential(
        'AeqdFHXOg-V0nHCfbjIjGNBcvZRIdiYfsUVcg-KlXZCU7YrAXn7kJ95fsRyv3nREmSpZFOfU6uvpY-a6',// ClientID
        'EGQp7HnroeqRafSbrhZTJ3z7J6MU-Cqx7iUColYQqIa4kaXAfBWpja6Y14K-RNtQ0CCoOhgTiPXc9nuJ'//ClientSecret
                    )
        );
       $payer = new Payer();
       $payer->setPaymentMethod("paypal");
         $item1 = new Item();
         $item1->setName('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount'));
        $itemList = new ItemList();
        $itemList->setItems(array($item1));
        $amount = new Amount();
        $amount->setCurrency("USD")
         ->setTotal($request->get('amount'));
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());
         $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("http://localhost:8000/executePayment")
            ->setCancelUrl("http://localhost:8000/cancel");
                $payment = new Payment();
        $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));
        $payment->create($apiContext);
        return redirect($payment->getApprovalLink());
*/


    }


   /*public function executePayment()
    {
        Session::put('success', 'You have paid successfully');
        return redirect('/');
    }
    public function cancel()
    {
        Session::put('error', 'Sorry! Something went wrong.');
        return redirect('/');
    }*/




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
