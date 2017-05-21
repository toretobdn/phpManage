<? ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="col-md-10">

    <div class="page-header">
        <h1>Nuevo Usuario <small></small></h1>
    </div>
    <div class="row">
        <div class="col-md-8">
            <? if (isset($display_msg)) { ?>
                <div class="alert <?= $display_msg["css_class"] ?> show">
                    <button class="close" data-dismiss="alert"></button>
                    <span><?= $display_msg["msg"]; ?></span>
                </div>
            <? } ?>
            <form  id="form_insert" method="POST"  class="horizontal-form" enctype="multipart/form-data">
                <?
                if(isset($id)){
                    $id=$id;
                }else{
                    $id="";
                }
                ?>
                <input type="hidden" name="id" value="<?=$id?>" />
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="name" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
                </div>
                <div style="margin-bottom: 10px" class="g-recaptcha" data-sitekey="6LfpyCEUAAAAAKqggqAoASF-Rlgi0FTHzk9nYA2I"></div>
                <span style="color: red;"id="errorCapta"></span>

                <button type="submit" class="savebtn"> <?=(isset($id)&&count($id)>0)?('Guardar'):('Alta')?></button>
            </form>
        </div>
    </div>

</div>
<script src="<?=$pathJS?>/validate.js"></script>
<script>
    
/*$(document).ready(function() {
 
    $('#form_insert').validate({
        debug: true,
        errorElement: 'span', //default input error message container
        errorClass: 'error', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        rules: {
            nombre: {
                required: true
            },
            email: {
                required: true
            },
            pass:{
              required:true  
            },
            
        },
        messages: {
           nombre: {
                required: "*Debes introduccir un nombre"
            },
            email: {
                required: "*Debes introduccir un email",
            },
            pass: {
                required: "*Debes introduccir un password",
            },
            
        },
 
          submitHandler: function(form) {
            if (grecaptcha.getResponse()) {
                    form.submit();
                    } else {
                    document.getElementById("errorCapta").innerHTML = "*Verifica reCaptha";
                    }
                }
            });

    });*/
    
 </script>