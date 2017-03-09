<?php 

    if(isset($_POST['submit']))
    {
        

        $Server = "ldap://corp.ncr.com:389";
    	
        $ldap = ldap_connect($Server);
        $username = $_POST['username'];
        $password = $_POST['password'];

        $ldaprdn = $username.'@corp';

        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

        $bind = @ldap_bind($ldap, $ldaprdn, $password);


        if ($bind)
        {
            echo "Welcome";            
            @ldap_close($ldap);
        } 

        else 
        {
            $msg = "Invalid email address / password";
            echo $msg;
        }
    }

    else
        echo "problem";


?>
