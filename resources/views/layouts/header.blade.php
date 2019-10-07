<div>
    <v-row justify="center" align="center" class="primary elevation-6">
        <v-col cols=12 xl=9 class="py-0">
            <v-app-bar color="primary" dark elevation="0">
                <v-app-bar-nav-icon></v-app-bar-nav-icon>
                <v-toolbar-title>تاینی اسپرت</v-toolbar-title>
                <div class="flex-grow-1"></div>
                @guest
                <v-btn text href="{{ route('login') }}">ورود</v-btn>
                @if (Route::has('register'))
                <v-btn text href="{{ route('register') }}">ثبت نام</v-btn>
                @endif
                @else
                <v-menu open-on-hover bottom right offset-y>
                    <template v-slot:activator="{ on }">
                        <v-btn text dark v-on="on">
                            {{ Auth::user()->name }}
                            <v-icon>mdi-chevron-down</v-icon>
                        </v-btn>
                    </template>
                    <v-list>
                        <v-list-item href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">خروج از حساب
                        </v-list-item>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </v-list>
                </v-menu>
                @endguest
            </v-app-bar>
        </v-col>
    </v-row>
</div>