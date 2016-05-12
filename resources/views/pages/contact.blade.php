@extends("layout")

@section("content")
<h1>Contact</h1>
<div class="text-center">
    <img src="http://i.imgur.com/hSuGkPM.png" alt="">
    <p><br>Join our discord server to get an immediate response about your project</p><br>
</div>

<form class="form-horizontal" role="form">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="msg">Message:</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="message" placeholder="Message"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>
    

@stop