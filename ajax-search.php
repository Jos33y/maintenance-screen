
<?php 
/*
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'demo');

*/




/*
if (isset($_GET['term'])){

    $return_arr = array();
    try {
        $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare('SELECT 	PublicBodyNameFormal FROM addresses WHERE publicaddress LIKE :term');
        $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
                
        while($row = $stmt->fetch()) {
        $return_arr[] =  $row['PublicBodyNameFormal'];
        }

            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }


            /* Toss back results as json encoded array. */
           /* echo json_encode($return_arr);
}
*/

?>