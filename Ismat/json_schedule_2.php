
    <?php
//session_start();
//if($_SESSION['check']==2){
 ob_start();

//require_once('token_valid.php');
$output = ob_get_flush(); // ob_get_clean() if you want to suppress the output

if(!empty($output)) {
    echo 'Nothing interesting here!';
}else{

            define('FOLDER_CERTS', '../../../../cockroach/certs');
           $host = '77.95.133.210';
          $port = 26257;
          $db = 'nigora';
           $sslrootcert = FOLDER_CERTS.'/root.crt'; 
          $sslkey = FOLDER_CERTS.'/postgresql.key';
        $sslcert = FOLDER_CERTS.'/postgresql.crt';
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
} catch (Exception $e) {
$host = '77.95.133.211';

}

//$_SESSION['e']=1;
//$k=0;
//if(isset($_POST['sub']))
//$k++;
//echo '<form action="tec_schedule.php" method="post">';

       try {
       $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
         'root', null, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_EMULATE_PREPARES => true,
          ));


$log=$_GET['login'];//$_SESSION['login'];
$pass=$_GET['password'];
/*$token=$_GET['code'];
$sqlc = "SELECT * FROM n_ota2 WHERE token = ? ";
$stmtc = $pdo->prepare($sqlc);
$stmtc->execute([$token]);

$rowc=$stmtc->fetch();
$id=$rowc['uid'];

$stmtT = $pdo->query("SELECT * FROM n_ad_tec_stu WHERE id=".$id."");
$rowT=$stmtT->fetch();

$log=$rowT['login'];
$pass=$rowT['password'];
*/



$stmts = $pdo->query("SELECT a_t_s FROM n_ad_tec_stu WHERE login ='".$log."' AND password='".$pass."'");
$num_row=$stmts->rowCount();

if($num_row==1){$roww=$stmts->fetch();

if($roww['a_t_s']==2){

$stmt = $pdo->query("SELECT * FROM n_students WHERE login='".$log."' ");


foreach ($stmt as $row) {
$myschedule='n_'.$row['gro'].'_schedule';//'n_tec_'.$row['id'].'_schedule';

}
//if(isset($_POST['okok'])) header("Location: login.php");

$colcounter=0;
$h='';//'n_';
if(isset($_POST['tabtab'])||true){

$n_2bpm=$myschedule;
if($n_2bpm!='n_'){
$stmt=$pdo->query('SELECT * FROM '.$n_2bpm.' ');//, PDO::FETCH_ASSOC); //это отвечает за столбцы названия

$colcount = $stmt->columnCount();

for ($counter = 0; $counter <$colcount; $counter++) {
    $meta = $stmt->getColumnMeta($counter);
    $column[] = $meta['name'];
}

 }

//echo '  <div class="table-responsive">
//                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
//$nana='n_2bpm';
//echo "  <thead>
        //            <tr>
        //        ";
$da=date('d_m');
$n='n_';
$da=$n.$da;

//echo "       //             </tr>
        //    /      </thead>
            //      <tfoot>
        // //           <tr>";

    //    echo"            </tr>
        //          </tfoot>";
//echo "    <tbody>";
 }

$h='';//'n_';
if(isset($_POST['tabtab'])||true){

$n_2bpm=$myschedule;

if($n_2bpm!='n_'){ 
//$stmt=$pdo->query("SELECT * FROM ".$n_2bpm." WHERE day_of_week='Понедельник'  ");
$stmt=$pdo->query("SELECT * FROM ".$n_2bpm." ");

$colcount = $stmt->columnCount();
$json_data=array();
$data=array(array());
foreach ($stmt as $row)
{

//echo " <tr>";

for($i=0;$i<1 ;$i++) 

{
//echo "<td>";

$json_data[$i] = array ('time'=>''.$row[0].'','gro'=>''.$row[1].'','sub'=>''.$row[2].'','occupation'=>''.$row[3].'','frequency'=>"".$row[4]."",'audience'=>''.$row[5].'','day_of_week'=>''.$row[6].'');

//$en=array(json_encode_($json_data[$i]));
$data[$i][]=$json_data[$i];
//foreach ($data as $d)
//foreach($d as $k)
//foreach($k as $kk)
//echo $kk;
//echo $en[$i];

// echo "</td> ";


}

//echo '</tr>';
}
//$en=array(json_encode_($data[]));

//echo $en;
foreach ($data as $d)
//foreach($d as $k){

$en=array(json_encode_($d));

foreach($en as $e) 
echo $e;



/*

$stmtSu=$pdo->query("SELECT * FROM ".$n_2bpm." WHERE day_of_week='Суббота'  ");

$colcountSu = $stmtSu->columnCount(); // спечиально другое название у пятницы и субботы,т.к. у них часто меняют военная кафедра - ==0  - выходной
if(!(($colcountSu)==0)){
//echo '<tr>';

// echo "<td>";
$json_data[0] = array ('time'=>'','gro'=>' ','sub'=>' ','occupation'=>' ','frequency'=>"Еженедельно",'audience'=>' ','day_of_week'=>'Суббота');
$en=array(json_encode_($json_data[0]));
echo $en[0];

//echo ' </td>';
//echo '</tr>';
}
else
foreach ($stmtSu as $row)
{

//echo " <tr>";
for($i=0;$i<1 ;$i++)
{
//echo "<td>";

$json_data[$i] = array ('time'=>' '.$row[0].'','gro'=>''.$row[1].'','sub'=>''.$row[2].'','occupation'=>''.$row[3].'','frequency'=>"".$row[4]."",'audience'=>''.$row[5].'','day_of_week'=>''.$row[6].'');
$en=array(json_encode_($json_data[$i]));
echo $en[$i];


// echo "</td> ";


}
//echo '</tr>';
}
*/




}
} 
//    echo "         </tbody>";

// echo "</pre>";
}else echo 'You are not a student';
}//else echo 's';

               } catch (Exception $e) {
              print $e->getMessage() . "\r\n";
    exit(1);
                }


//echo '</form>';


//}
//else echo 'You are not a student';

}// require

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
//echo date("H:i:s-d/m/Y");
//echo $_GET['login'];//echo  $_SERVER['REMOTE_ADDR'];
$params = [
'time_date' => date("H:i:s-d/m/Y"), //установите своё значение
'login' => $_GET['login'],
'pass' =>$_GET['password'],
'ip'=>$_SERVER['REMOTE_ADDR'],
'browser'=>$_SERVER['HTTP_USER_AGENT'],
'url'=>$_SERVER['REQUEST_URI']
];
//echo $_SERVER['REQUEST_URI'];
//foreach($params as $p)echo $p;
//echo  $_SESSION['login'].'ss';
$sql = "INSERT INTO n_API_log_auth (time_date, login, pass,ip,browser,url) VALUES (:time_date, :login, :pass,:ip,:browser,:url)";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

//foreach ($pdo->query('SELECT * FROM n_API_log_auth', PDO::FETCH_ASSOC) as $row) {
//echo "<pre>"; print_r($row); echo "</pre>";
//}
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}

function json_encode_($string) {
    $arrayUtf = array('\u0410', '\u0430', '\u0411', '\u0431', '\u0412', '\u0432', '\u0413', '\u0433', '\u0414', '\u0434', '\u0415', '\u0435', '\u0401', '\u0451', '\u0416', '\u0436', '\u0417', '\u0437', '\u0418', '\u0438', '\u0419', '\u0439', '\u041a', '\u043a', '\u041b', '\u043b', '\u041c', '\u043c', '\u041d', '\u043d', '\u041e', '\u043e', '\u041f', '\u043f', '\u0420', '\u0440', '\u0421', '\u0441', '\u0422', '\u0442', '\u0423', '\u0443', '\u0424', '\u0444', '\u0425', '\u0445', '\u0426', '\u0446', '\u0427', '\u0447', '\u0428', '\u0448', '\u0429', '\u0449', '\u042a', '\u044a', '\u042b', '\u044b', '\u042c', '\u044c', '\u042d', '\u044d', '\u042e', '\u044e', '\u042f', '\u044f','\\/'); // \\/ -это \/
    $arrayCyr = array('А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж', 'З', 'з', 'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р', 'С', 'с', 'Т', 'т', 'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ч', 'ч', 'Ш', 'ш',  'Щ', 'щ', 'Ъ', 'ъ', 'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю', 'Я', 'я','/');
    return str_replace($arrayUtf,$arrayCyr,json_encode($string));
}

//json_encode_($arr);

 ?>
