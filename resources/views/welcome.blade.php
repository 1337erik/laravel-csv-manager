<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
        <script src="{{ asset( 'js/app.js' ) }}" defer></script>
    </head>
    <body>

        <v-app id="app" v-cloak>

            <v-navigation-drawer
                app
                v-model=" drawer "
            >

                <v-toolbar flat>

                    <v-toolbar-side-icon
                        @click.stop=" drawer = !drawer "
                    ></v-toolbar-side-icon>
                    <v-toolbar-title>CSV File Manager</v-toolbar-title>
                </v-toolbar>
                <v-list>

                    <v-list-tile @click="">

                        <v-list-tile-action>

                            <v-icon>dashboard</v-icon>
                        </v-list-tile-action>

                        <v-list-tile-title>

                            Home
                        </v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-navigation-drawer>

            <v-toolbar app>

                <v-toolbar-side-icon
                    @click.stop=" drawer = !drawer "
                ></v-toolbar-side-icon>
                <v-toolbar-title>CSV File Manager</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down">
                    <v-btn flat>Home</v-btn>
                </v-toolbar-items>
            </v-toolbar>


            <v-content>
                <v-container fluid>

                    yes send it
                </v-container>
            </v-content>
            <v-footer app inset>

                <v-layout ml-4>

                    CSV File Manager | Excel
                </v-layout>
            </v-footer>
        </v-app>
    </body>
</html>
