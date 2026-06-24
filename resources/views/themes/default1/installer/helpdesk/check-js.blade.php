@extends('themes.default1.installer.layout.installer2')
@section('license')
active
@stop
@section('content')
    <div id="no-js">
    <noscript>
        <!-- <meta http-equiv="refresh" content="0;url=step1"> -->
       
        <div class="woocommerce-message woocommerce-tracker" >
                <center id="fail" style="font-size: 1.3em">JavaScript Disabled!</center>
                <p style="font-size:1.0em">Hello! You are just a few steps away from your support system. It looks like JavaScript is not supported or disabled in your browser, which may cause errors during installation. Please enable JavaScript in your browser to install and run the helpdesk properly.</p>
                 <p class="wc-setup-actions step">
            Have you enabled JavaScript?&nbsp;
                <a href="{!! $url !!}">Click here</a> to reload the page now.
            </p>
        </div>
    </noscript>
    </div>
   
@stop
