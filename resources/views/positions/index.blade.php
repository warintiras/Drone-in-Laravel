@extends('layouts.app')

@section('content')
    <div style="text-align:left;width:350px">
        <canvas width="300" height="300">Your browser does not support the HTML5 canvas tag.</canvas>
        <image id="icon" src="images/icon.png" width="32" height="32"></image>
        <br><br>
        Enter N, S, W, or E for F. Canvas size is 300px * 300px.
        <form action="" method="post">
            X: <input type="text" name="x" maxlength="3" size="6">
            Y: <input type="text" name="y" maxlength="3" size="6">
            F: <input type="text" name="f" maxlength="1" size="6">
            <input type="submit" name="submit_bttn">
            <br><br><br><br>
            <input type="submit" value="Move" name="submit_move">
            <input type="submit" value="Rotate Left" name="submit_left">
            <input type="submit" value="Rotate Right" name="submit_right">
            <input type="submit" value="Report" name="submit_report">
        </form>
    </div>
@endsection