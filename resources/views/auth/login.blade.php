@extends('layouts.app')

@section('content')
<v-container fluid class="fill-height">
    <v-row justify="center" align="center">
        <v-col cols=12 sm=9 md=7 lg=5 xl=4>
            <v-card>
                <v-toolbar color="primary" dark flat>
                    <v-toolbar-title>ورود</v-toolbar-title>
                    <div class="flex-grow-1"></div>
                    <v-icon>mdi-account</v-icon>
                </v-toolbar>
                <v-card-text>
                    <v-form method="POST" action="{{ route('login') }}">
                        @csrf
                        <v-text-field name="email" label="آدرس ایمیل" type="email"></v-text-field>
                            <v-text-field name="password" label="رمز عبور" type="password"></v-text-field>
                        <v-col cols=12 class="pa-0">
                            <v-checkbox label="مرا به خاطر بسپار" name="remember"></v-checkbox>
                        </v-col>
                        <v-col cols=12 class="pa-0">
                            <v-btn color="primary" type="submit">
                                ورود
                            </v-btn>
                            @if (Route::has('password.request'))
                            <v-btn text class="px-2 py-1 mr-2 my-1" href="{{ route('password.request') }}">
                                رمز عبور خود را فراموش کرده اید؟
                            </v-btn>
                            @endif
                        </v-col>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
</v-container>
@endsection