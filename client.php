<?php
require_once 'handler.php';
class ClientLibs
{
    public $handler;
    public function __construct($jwt)
    {
        $this->handler = new Handler($jwt);
    }

    public function ping()
    {
        return $this->handler->MethodsHandler('ping');
    }

    public function walletList()
    {
        return $this->handler->MethodsHandler('wallet_list');
    }

    public function withdrawCreate()
    {
        return $this->handler->MethodsHandler('withdraw_create');
    }

    public function withdrawInfo($id)
    {
        return $this->handler->MethodsHandler('withdraw_info', $id);
    }

    public function transferCreate($data)
    {
        return $this->handler->MethodsHandler('transfer_create', $data);
    }

    public function transferInfo($data)
    {
        return $this->handler->MethodsHandler('transfer_info', $data);
    }

    public function transactionsList($data)
    {
        return $this->handler->MethodsHandler('transactions_list', $data);
    }

    public function invoiceCreate($data)
    {
        return $this->handler->MethodsHandler('invoice_create', $data);
    }

    public function invoiceInfo($data)
    {
        return $this->handler->MethodsHandler('invoice_info', $data);
    }

    public function invoiceSetWebhook($data)
    {
        return $this->handler->MethodsHandler('invoice_set_webhook', $data);
    }

    public function invoiceGenerateSecretKey($data)
    {
        return $this->handler->MethodsHandler('invoice_generate_secret_key', $data);
    }
}