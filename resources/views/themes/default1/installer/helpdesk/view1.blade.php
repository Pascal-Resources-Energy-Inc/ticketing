@extends('themes.default1.installer.layout.installer')
@section('environment')
done
@stop
@section('license')
active
@stop
@section('content')
    <div id="form-content">
        <center><h1>License Agreement</h1></center>

        <p>Please review and accept the local installation terms before continuing.</p>
        <form action="{{URL::route('postlicence')}}" method="post">
            {{ csrf_field() }}
            <div>
                <div id="openModal" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div class="modal-body">
                            <h1>Installation Terms</h1>
                            <p>This helpdesk is installed and maintained for your organization. Continue only if you are authorized to configure and use this system.</p>
                            <p>You are responsible for protecting customer data, account credentials, attachments, and any other information stored in this installation.</p>
                            <p>Use of this system must follow your organization's policies and all applicable laws.</p>
                            <br>
                        </div>
                        <a style="float: right;" href="#" title="Close" class="button-primary button button-large button-next">Close</a>
                    </div>
                </div>
                <input id="Acceptme" class="input-checkbox" name="acceptme" type="checkbox">
                <label for="Acceptme">I accept the <a href="#openModal">Installation Terms</a></label>
            </div>
            <br>
            <p class="setup-actions step">
                <input type="submit" id="submitme" class="button-primary button button-large button-next" value="Continue" name="accept1">
                <a href="{!! route('prerequisites') !!}" class="button button-large button-next" style="float: left">Previous</a>
            </p>
            <br>
        </form>
    </div>
    <script>
        window.onload = function() {
            if(!window.location.hash) {
                window.location = window.location + '#loaded';
                window.location.reload();
            }
        }
        var second = document.getElementById('Acceptme').checked = false;
        var first = document.getElementById('submitme').disabled = true;
        var checkme = document.getElementById('Acceptme');
        var submiter = document.getElementById('submitme');

        checkme.onchange = function() {
            submiter.disabled = !this.checked;
            if (submiter.disabled) {
                //    alert("Click to enable the button");
            };
        };
    </script>
@stop
