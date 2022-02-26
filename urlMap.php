<?php
class urlMap
{
    public function getUrlMethod($name): string
    {
        return [
            'ping' => 'test/ping',
            'wallet_list' => 'wallet/list',
            'withdraw_create' => 'withdraw/create',
            'withdraw_info' => 'withdraw/info',
            'transfer_create' => 'transfer/create',
            'transfer_info' => 'transfer/info',
            'transactions_list' => 'transactions/list',
            'invoice_create' => 'invoice/create',
            'invoice_info' => 'invoice/info',
            'invoice_set_webhook' => 'invoice/set-webhook',
            'invoice_generate_secret_key' => 'invoice/generate-secret-key',
        ][$name];
    }
}