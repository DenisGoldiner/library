<script type="text/javascript">

    function checkForm(form)
    {
        var result = true;
        var errorFlag = false;
        var errors = "";

        var name = form.name.value;
        var firstName = form.firstName.value;
        var email = form.email.value;
        var password = form.password.value;

        var nameMask = /^[A-Z][a-z]*$/;
        var firstNameMask = /^[A-Z][a-z]*$/;
        var emailMask = /^(?:[a-zA-Z][a-zA-Z0-9_]{1,})@(?:[a-z]{2,})\.(?:[a-z]{2,})$/;
        var passwordMask = /^[a-zA-Z0-9]*$/;

        if(name.length < 2 || !nameMask.test(name)) {
            errorFlag = true;
            errors += "Error: Incorrect name!\n";
            form.name.focus();
        }

        if(firstName.length < 2 || !firstNameMask.test(firstName)) {
            errorFlag = true;
            errors += "Error: Incorrect first name!\n";
            form.firstName.focus();
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
<form action="<?=WEB_PATH?>controllers/reg.php" method="post" onsubmit="return checkForm(this);">
    <p><i>Please, fill the form to continue, required is marked by </i><em>*</em></p>

    <?php if(!empty($data)) foreach($data['errors'] as $error):?>
    <p><i><?php echo $error;?></i></p>
    <?php endforeach;?>

    <fieldset>
        <legend>Contact information</legend>
        <label for="name">Name <em>*</em></label>
            <input id="name" name="name" value="<?php echo $data['name']?>"><br>
        <label for="firstName">First name <em>*</em></label>
            <input id="firstName" name="firstName" value="<?php echo $data['firstName']?>"><br>
        <label for="email">Email <em>*</em></label>
            <input id="email" name="email" value="<?php echo $data['email']?>"><br>
		<label for="password">Password <em>*</em></label>
            <input id="password" name="password" value="<?php echo $data['password']?>"><br>
    </fieldset>
    <p><input type="submit" id="submit" name="submit" value="Submit information"></p>
</form>

<!--
    <?php var_dump($data)?>
    <?php echo $data['name']?>
-->