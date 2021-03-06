<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .errors {
                color: red;
                font-size: small;
            }

            button {
                background-color: blue;
                color: white;
                padding: 1em;
                border-style: none:
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
            <h1>Notifications</h1>
            <ul>
                @forelse ($notifications as $notification)
                    <li>
                        @if($notification->type
                                === 'App\Notifications\PaymentRecieved')
                            We have recieved a payment of
                            {{ $notification->data['amount'] / 100 }}
                            dollars from you.
                        @endif
                    </li>
                @empty
                    <li>You have no unread notifications at this time.</li>
                @endforelse
            </ul>
            </div>
        </div>
    </body>
</html>
