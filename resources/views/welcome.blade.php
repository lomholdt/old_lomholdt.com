@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Hi' there!</h3></div>

                <div class="panel-body">
                    <p>My name is Jonas Lomholdt, and this is my site.</p>
                    <p>I'm currently a student at the <a href="http://www.itu.dk/">IT University of Copenhagen</a>.
                    <br>I work at a danish IT firm called Netcompany.</p>
                    <p>If you would like to know more about me, please visit one of the following sites.</p>
                    <div>
                        <ul>
                            <li><a href="https://dk.linkedin.com/in/jonaslomholdt">LinkedIn</a></li>
                            <li><a href="https://github.com/lomholdt">GitHub</a></li>
                            <li><a href="https://www.facebook.com/lomholdt">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
