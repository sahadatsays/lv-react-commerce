<?php

namespace App\Enum;

enum PermissionsEnum: string
{
    case ApproveVendors = 'ApproveVendor';
    case SellProducts = 'SellProducts';
    case BuyProducts = 'BuyProducts';
}
