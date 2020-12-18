@extends("master")

@section("content")
<p>Hoi, hier zal uiteindelijk de about pagina komen.</p>

<?php
$about_type = request("about_type");

print "Je wilde het hebben over:" + $about_type + "?";
?>
@endsection