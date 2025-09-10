<?php

namespace App\Enums;

enum PermissionsEnum: string
{
   case ApprovedVendors = 'ApproveVendors';
   case SellProducts = 'SellProducts';
   case BuyProducts = 'BuyProducts';
}
