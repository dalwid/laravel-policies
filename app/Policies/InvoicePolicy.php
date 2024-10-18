<?php

namespace App\Policies;

use App\Models\Invoice;
use App\Models\User;

class InvoicePolicy
{
    public function before(?User $user)
    {
        if($user?->role == 'super-admin'){
            return true;
        }
    }
    
    public function isAdmin(?User $user, Invoice $invoice)
    {
        var_dump('is admin');
        // return $user?->role == 'super-admin';
    }

    public function teste()
    {
        return true;
    }

    public function show()
    {
        return false;
    }
}
