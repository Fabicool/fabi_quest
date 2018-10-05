<? PHPphp
define('DS', DIRECTORY_SEPARATOR); 
use \Magento\Framework\App\Bootstrap;
include('../app/bootstrap.php');
$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();
$app_state = $objectManager->get('\Magento\Framework\App\State');
$app_state->setAreaCode('frontend');
$productsData = getProducts();
importSimpleProducts( $productsData , $objectManager );