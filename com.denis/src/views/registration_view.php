<script type="text/javascript">

    function checkForm(form)
    {
        var result = true;
        var errorFlag = false;
        var errors = "";

        var name = form.name.value;
        var surname = form.surname.value;
        var email = form.email.value;
        var password = form.password.value;
        var card = form.card.value;

        var nameMask = /^[A-Z][a-z]*$/;
        var surnameMask = /^[A-Z][a-z]*$/;
        var emailMask = /^(?:[a-zA-Z][a-zA-Z0-9_]{1,})@(?:[a-z]{2,})\.(?:[a-z]{2,})$/;
        var passwordMask = /^[a-zA-Z0-9]*$/;

        if(name.length < 2 || !nameMask.test(name)) {
            errorFlag = true;
            errors += "Error: Incorrect name!\n";
            form.name.focus();
        }

        if(surname.length < 2 || !surnameMask.test(surname)) {
            errorFlag = true;
            errors += "Error: Incorrect first name!\n";
            form.surname.focus();
        }

        if(email.length < 2 || !emailMask.test(email)) {
            errorFlag = true;
            errors += "Error: Incorrect email!\n";
            form.email.focus();
        }

        if(password.length < 5 || !passwordMask.test(password)) {
            errorFlag = true;
            errors += "Error: Incorrect password!\n";
            form.password.focus();
        }
/*
        if(card != "true"){
            errorFlag = true;
            errors += "Error: choose card type!\n" + card;
        }
*/
        if(errorFlag){
            alert(errors);
            result = false
        }

        return result;
    }

</script>


<h1>Registration</h1>
<p>
    Welcome to uor library, if you still don't have our library card,
    you can create it right now.
</p>
<!--<form action="<?=WEB_PATH?>controllers/reg.php" method="post" onsubmit="return checkForm(this);">-->
<form action="http://den.test.int/registration/actionRegister" method="post" onsubmit="return checkForm(this);">
    <p><i>Please, fill the form to continue, required is marked by </i><em>*</em></p>

    <?php if(!empty($data)) foreach($data['errors'] as $error):?>
    <p><i><?php echo $error;?></i></p>
    <?php endforeach;?>

    <fieldset>
        <legend>Contact information</legend>
        <label for="name">Name <em>*</em></label>
            <input id="name" name="name" value="<?php echo $data['name']?>"><br>
        <label for="surname">First name <em>*</em></label>
            <input id="surname" name="surname" value="<?php echo $data['surname']?>"><br>
        <label for="email">Email <em>*</em></label>
            <input id="email" name="email" value="<?php echo $data['email']?>"><br>
		<label for="password">Password <em>*</em></label>
            <input id="password" name="password" value="<?php echo $data['password']?>"><br>
    </fieldset>
    <fieldset>
        <legend>Card type</legend>
        <label for="green">
            <input id="green" type="checkbox" name="card" value="green"> Green</label>
        <label for="gold">
            <input id="gold" type="checkbox" name="card" value="gold"> Gold</label>
        <label for="platinum">
            <input id="platinum" type="checkbox" name="card" value="platinum"> Platinum</label>
    </fieldset>

    <script type="text/javascript">
        var handler = function ( event ){
            event = event || window.event;
            var target = event.target || event.srcElement;
            if ( target.nodeType == 1 && target.nodeName.toLowerCase() == "input" && target.type == "checkbox" && target.checked ) {
                var inputs = document.getElementsByTagName("input");
                for ( var i = 0; inputs[i]; i++ ) {
                    if ( inputs[i].type == "checkbox" && inputs[i] != target ) {
                        inputs[i].checked = false;
                    }
                }
            }
        }
        if (document.addEventListener){
            document.addEventListener('click', handler, false);
        } else if (document.attachEvent){
            document.attachEvent('onclick', handler);
        }
    </script>


    <p><input type="submit" id="submit" name="submit" value="Submit information"></p>
</form>

<!--
    <?php var_dump($data)?>
    <?php echo $data['name']?>
-->