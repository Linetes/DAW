<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-87812ae6b65f60436ce4a50ddc64dda0');
$domain = "sandboxf61a331eddaa46a88f3b1840d55136ef.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => '<mailgun@sandboxf61a331eddaa46a88f3b1840d55136ef.mailgun.org>',
    'to'      => '<cbv-tauro@hotmail.com>',
    'subject' => 'Nueva Info',
    'text'    => 'Alguien se metió a tu lab22!'
));
?>
