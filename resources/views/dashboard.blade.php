@extends('layouts.app')

@section('content')
<v-container fluid class="fill-height">
    <v-row justify="center" class="fill-height">
        <v-col cols=12 xl=9>
            <v-card class="fill-height">
                <v-card-title>حساب کاربری</v-card-title>
                <v-card-text class="pa-0">
                    @if (session('status'))
                    {{ session('status') }}
                    @endif
                    <v-tabs background-color="secondary" class="mt-3">
                        <v-tab href="#tab-1">
                            سفارشات
                            <v-icon left>mdi-bookmark-outline</v-icon>
                        </v-tab>
                        <v-tab-item value="tab-1">
                            <v-simple-table>
                                <template v-slot:default>
                                    <thead>
                                        <tr>
                                            <th>
                                                کد سفارش
                                                <v-icon left>mdi-pound</v-icon>
                                            </th>
                                            <th>
                                                تاریخ ثبت
                                                <v-icon left>mdi-calendar-range</v-icon>
                                            </th>
                                            <th>
                                                وضعیت سفارش
                                                <v-icon left>mdi-check-decagram</v-icon>
                                            </th>
                                            <th>
                                                نوع پرداخت
                                                <v-icon left>mdi-credit-card-outline</v-icon>
                                            </th>
                                            <th>
                                                    روش ارسال
                                                    <v-icon left>mdi-truck-fast</v-icon>
                                            </th>    
                                            <th>
                                                محصولات
                                                <v-icon left>mdi-format-list-numbered-rtl</v-icon>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            @php
                                            $date = $order->created_at;
                                            $year = $date->year;
                                            $month = $date->month;
                                            $day = $date->day;
                                            $hour = $date->hour;
                                            $minute =$date->minute;
                                            $jdate = jalali::strftime('%A %d %B %Y ساعت H:m',
                                            strtotime("$year-$month-$day $hour:$minute"));
                                            @endphp
                                            <td>{{$jdate}}</td>
                                            <td>{{Helper::int_flag_tostring($order_statuses, $order->order_status)}}</td>
                                            <td>{{Helper::int_flag_tostring($payment_types, $order->payment_type)}}</td>
                                            <td>{{Helper::int_flag_tostring($deliver_types, $order->deliver_type)}}</td>
                                            <td>
                                                @foreach (json_decode($order->order_items) as $order_item)
                                                    {{$order_item->count}} عدد محصول شماره {{$order_item->id}}<br />
                                                @endforeach
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </template>
                            </v-simple-table>
                        </v-tab-item>
                    </v-tabs>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
</v-container>
@endsection