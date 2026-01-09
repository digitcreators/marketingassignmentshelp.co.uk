<style>
    .table-one {
        align-items: center;
        justify-items: center;
        text-align: center;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;

    }


    img {
        width: 150px;

    }

    .div-2 {
        background-color: #D1F1F1;
    }

    p {
        text-align: left;
        color: black;
        margin-left: 8px;
        margin-right: 8px
    }

    button {
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 10px;
        color: white;
        background-color: #4c2744;
        margin-top: 20px;
        border: 4px solid ##0c1f4c;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;

    }
</style>

<div style="background-color:lightgrey ">
    <div class="table-one">

        <table align="center"
            style="font-weight:normal;border-collapse:collapse;border:0;margin-left:auto;margin-right:auto;padding:0;font-family:Arial,sans-serif;color:#555559;background-color:lightgrey;font-size:16px;line-height:26px;width:600px;">
            <tbody>
                <tr>
                    <td
                        style="border-collapse:collapse;padding:0;border:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                        <table
                            style="font-weight:normal;border-collapse:collapse;border:0;padding:0;font-family:Arial,sans-serif">
                            <tbody>
                                <tr>
                                    <td colspan="4" valign="top"
                                        style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:#e6c5df;border-bottom:4px solid #9c27b0;text-align:center">
                                        <a href="{{ url('/') }}" target="_blank">
                                            <img src="{{ asset('img/email-logo.png') }}"
                                                alt="{{ config('app.app_name') }}"
                                                style="width:150px; margin-top:10px;">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-collapse:collapse;border:0;background-color:white ;padding:10px;">
                                        @yield('content')
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-collapse:collapse;border:0;padding: 10px;background-color: #e6c5df ; border-top:4px solid #9c27b0">


                                        <span>

                                            <a
                                                href="https://www.facebook.com/marketingassignmentshelpuk/"><img
                                                    src="{{ asset('imgs/email-footer/5a22b43e909176.0984090415122238065922.png') }}"
                                                    style="width:20px" alt="{{ config('app.app_name') }}"></a>


                                            <a href="https://www.instagram.com/marketingassignmentshelpuk/"><img
                                                    src="{{ asset('imgs/email-footer/5a355496a61e55.7452819615134445026804.png') }}"
                                                    style="width:20px" alt="{{ config('app.app_name') }}"></a>


                                            <a href="https://api.whatsapp.com/send?phone=447403663991"><img
                                                    src="{{ asset('imgs/email-footer/whatsapp-icon.png') }}"
                                                    style="width:20px" alt="{{ config('app.app_name') }}"></a>
                                        </span>
                                        <p style="text-align: center">© {{ now()->year }}. All rights reserved <a
                                                href="{{ url('/') }}" style="color:black">{{ config('app.app_name') }}</a>
                                        </p>

                                    </td>

                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>
