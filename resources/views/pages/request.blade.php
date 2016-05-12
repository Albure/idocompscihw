@extends("layout")

@section("content")
<h1>Request</h1>
<h3 class="text-center">Let's Get Started!</h3><br>

<form class="form-horizontal" role="form">
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Name:</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" placeholder="Name">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Skype:</label>
        <div class="col-sm-10">
            <input type="skype" class="form-control" id="skype" placeholder="Skype Username. Put N/A if you are not using skype to communicate with us">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="This is for file sharing. We prefer to stick to skype/discord for communication">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Due Date:</label>
        <div class="col-sm-10">
            <input type="dd" class="form-control" id="dd" placeholder="What day is the project due?">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="msg">Details:</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="message" placeholder="Give us as much detail about your project as you can"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Price:</label>
        <div class="col-sm-10">
            <input type="price" class="form-control" id="price" placeholder="How much would you like to pay us? This will be discussed later, using your whatever you put here to start">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <h4><br>Have you joined the discord server?</h4>
                <label><input type="checkbox">Yes</label>
                <label><input type="checkbox">No</label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <br><button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>

@stop