<?php
/**
 * Created by Joe of ExchangeCore.com
 */
if(isset($_POST['username']) && isset($_POST['password'])){

    $adServer = "ldap://domaincontroller.mydomain.com";
	
    $ldap = ldap_connect($adServer);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ldaprdn = 'mydomain' . "\\" . $username;

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);


    if ($bind) {
        echo "Welcome";
        @ldap_close($ldap);
    } else {
        $msg = "Invalid email address / password";
        echo $msg;
    }

}else{
?>
    <form action="#" method="POST">
            <label for="username"><b>Username:</b> <input type="text" id="username" placeholder="Quicklook ID" maxlength="8"/><br /><br>
            <label for="password"><b>Password:</b> <input type="password" id="password" placeholder="CORP LAN Account" /><br /><br>
            <input type="submit" value="Login" />
        </form>
<?php } ?> 