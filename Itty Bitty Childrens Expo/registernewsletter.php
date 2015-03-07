<?php
    require_once "MailChimp.php";
    $MailChimp = new \Drewm\MailChimp('4e63c19b5cdcc2816645336b2b942137-us10');
    if (isset($_POST['eadd'])) {
        $result = $MailChimp->call('lists/subscribe', array(
        'id'                => '78c1005620',
        'email'             => array('email'=>$_POST['eadd']),
        'merge_vars'        => array('FNAME'=>$_POST['fname'], 'LNAME'=>$_POST['lname']),
        'double_optin'      => false,
        'update_existing'   => true,
        'replace_interests' => false,
        'send_welcome'      => false,
        ));
    }
?>