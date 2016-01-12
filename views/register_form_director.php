<h1 style="font-size:24px;color:blue;margin:0 0 15px 0;padding: 0 0 15px 0;border-bottom:1px dotted #EEE;font-family: Courier;">Director Registration</h1>
<form action="registerd.php" method="post" id="registration">
    <fieldset>
        <!-- specific inputs have divs that allow for javascript to alert user -->
        <div class="form-group">
            <input class="form-control" name="name" placeholder="Your Full Name" type="text"/><div style="font-variant: small-caps;" id="name"></div>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirm password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="HUID" type="text" name="huid" maxlength="8" id="login" onKeyUp="updatelength('login', 'login_length')">
            <span id="login_length"></span>
            <div style="font-variant: small-caps;" id="huid"></div>
        </div>
        <div class="form-group">
            <input class="form-control" name="email" placeholder="Harvard email" type="text"/><div style="font-variant: small-caps;" id="email"></div>
        </div>
        <div class="form-group">
            <input class="form-control" maxlength="10" name="cell" placeholder="Cell phone number" type="text"/><div style="font-variant: small-caps; color: #FF0000;" id="cell"></div>
        </div>
        <div class="form-group">
            <input class="form-control" name="code" placeholder="Director Registration Code" type="text"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span>
                Register
            </button>
        </div>
    </fieldset>
</form>
<div>
    alternatively, <a href="login.php">log in</a> or register as a <a href="register.php">comper</a>.
</div>

    <script>
        /*
        * 
        * JavaScript for above form.
        * Checks inputs and alerts user if they do not meet specifications.
        * 
        */
    
        var form = document.getElementById('registration');
        
        form.onsubmit = function() {
            var domain = form.email.value.split('@');
            var length = domain.length;
            
            var name = form.name.value;
            var huid = form.huid.value;
            var cell = form.cell.value;
            
            if (name.search(/[^A-Za-z\s]/) != -1)
            {
                document.getElementById("name").innerHTML = 'Not a valid name.';
                if (domain[length-1] != "college.harvard.edu")
                {
                    document.getElementById("email").innerHTML = 'Please enter a Harvard email address.';
                    if (isNaN(huid))
                    {
                        document.getElementById("huid").innerHTML = 'Not a valid Harvard ID.';
                        if (isNaN(cell))
                        {
                            document.getElementById("cell").innerHTML = 'Not a valid cell number. Please enter 10 digits.';
                        }
                        else
                        {
                            document.getElementById("cell").innerHTML = '';
                        }
                    }
                    else
                    {
                        document.getElementById("huid").innerHTML = '';
                        if (isNaN(cell))
                        {
                            document.getElementById("cell").innerHTML = 'Not a valid cell number. Please enter 10 digits.';
                        }
                        else
                        {
                            document.getElementById("cell").innerHTML = '';
                        }
                    }
                }
                else
                {
                    document.getElementById("email").innerHTML = '';
                    if (isNaN(huid))
                    {
                        document.getElementById("huid").innerHTML = 'Not a valid Harvard ID.';
                        if (isNaN(cell))
                        {
                            document.getElementById("cell").innerHTML = 'Not a valid cell number. Please enter 10 digits.';
                        }
                        else
                        {
                            document.getElementById("cell").innerHTML = '';
                        }
                    }
                    else
                    {
                        document.getElementById("huid").innerHTML = '';
                        if (isNaN(cell))
                        {
                            document.getElementById("cell").innerHTML = 'Not a valid cell number. Please enter 10 digits.';
                        }
                        else
                        {
                            document.getElementById("cell").innerHTML = '';
                        }
                    }
                }

                return false;
            }
            
            if (domain[length-1] != "college.harvard.edu")
            {
                document.getElementById("email").innerHTML = 'Please enter a Harvard email address.';
                if (isNaN(huid))
                {
                    document.getElementById("huid").innerHTML = 'Not a valid Harvard ID.';
                    if (isNaN(cell))
                    {
                        document.getElementById("cell").innerHTML = 'Not a valid cell number. Please enter 10 digits.';
                    }
                    else
                    {
                       document.getElementById("cell").innerHTML = '';
                    }
                }
                else
                {
                    document.getElementById("huid").innerHTML = '';
                    if (isNaN(cell))
                    {
                        document.getElementById("cell").innerHTML = 'Not a valid cell number. Please enter 10 digits.';
                    }
                    else
                    {
                       document.getElementById("cell").innerHTML = '';
                    }
                }
                document.getElementById("name").innerHTML = '';
                
                return false;
            }
            
            if (isNaN(huid))
            {
                document.getElementById("huid").innerHTML = 'Not a valid Harvard ID.';
                if (isNaN(cell))
                {
                    document.getElementById("cell").innerHTML = 'Not a valid cell number. Please enter 10 digits.';
                }
                else
                {
                   document.getElementById("cell").innerHTML = '';
                }
                return false;
            }
            
            if (isNaN(cell))
            {
                document.getElementById("cell").innerHTML = 'Not a valid cell number. Please enter 10 digits.';
            }
        };
        
        function updatelength(login, login_length){

            var curr_length = document.getElementById(login).value.length;

            var field_mlen = document.getElementById(login).maxLength;
            
            if (curr_length != 0)
            {
                document.getElementById(login_length).innerHTML = curr_length+'/'+field_mlen;
            }
            else
            {
                document.getElementById(login_length).innerHTML = '';
            }
    
            return 1;
        }
        
    </script>
