<?
require_once('phaxio_config.php');
require_once(dirname(__FILE__) . '/../lib/PhaxioHelper.class.php');

$phaxio = new PhaxioHelper($apiKeys[$apiMode], $apiSecrets[$apiMode], $apiHost);

for ($i = 1; $i <= 5; $i++){
    $result = $phaxio->sendFax($toNumber, array(), array('string_data' => "This is part $i of a 5 part fax batch.", 'string_data_type' => 'text', 'batch' => true));
    var_dump($result);
}

echo "Your batch has been created for $toNumber.  You can now see it in the Phaxio web UI.  To fire it, see fireBatch.php";

?>
