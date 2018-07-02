<!DOCTYPE html>
<html>
<head>
    <title> ajax dropdown list</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>


<div class="container">
    <h1>JQuery Ajax Dropdown</h1>


    <div class="form-group">
        <label>Select Country:</label>
       {{-- {!! Form::select('id_country',[''=>'--- Select Country ---']+$countries,null,['class'=>'form-control']) !!} --}}

        <select name="id_country" class="col-md-4 form-control form_input"
                id="form-field-select-3" style="padding-left: 25px!important;">
        <option value="">--Select Your Country--</option>
        </select>
    </div>



    <div class="form-group">
        <label>Select State:</label>

        <select name="id_state" class="col-md-4 form-control form_input"
                id="form-field-select-3" style="padding-left: 25px!important;">
            <option value="">--Select Your State--</option>
        </select>

    </div>


    <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>





</div>


<script type="text/javascript">
    $("select[name='id_country']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
                $("select[name='id_state']").html('');
                $("select[name='id_state']").html(data.options);
            }
        });
    });
</script>


</body>
</html>