<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static $order_statuses = ["در حال بررسی", "در انتظار پرداخت",  "در حال ارسال", "تکمیل شده"];
    public static $payment_types = ["کارت به کارت", "پرداخت در محل"];
    public static $deliver_types = ["تیپاکس", "پست"];
}
