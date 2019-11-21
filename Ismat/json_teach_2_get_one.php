
    <?php
//session_start();
//if($_SESSION['check']==1){
// require_once('token_valid.php');
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
///echo '<form action="tec_schedule.php" method="post">';
$myp_id=array();
$myvar=array();
       try {
       $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
         'root', null, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_EMULATE_PREPARES => true,
          ));
$days = array( 1 => 'Понедельник' , 'Вторник' , 'Среда' , 'Четверг' , 'Пятница' , 'Суббота' , 'Воскресенье' );


//$log=$_SESSION['login'];
$v=$_GET['var'];// = array(1 => 'opa', 3=> 'popa')
foreach($v as $key=>$val){
//echo $val;
///echo $key;
///echo ' '.$val.'</br>';
//$myp_id[]=$key;
$myvar[]=$val;
}
/*foreach($myp_id as $p_id){
echo $p_id.'</br>';
}
foreach($myvar as $var){
echo $var.'</br>';
}
*/
/*
$ar= $_GET['array'];
$i=0;
foreach($ar aS $a)
{if($i==1)
echo $a;
$i++;
}
*/
$log=$_GET['login'];//$_SESSION['login'];
$pass=$_GET['password'];
$gro=$_GET['gro'];

$sub=$_GET['sub'];
/*

$token=$_GET['code'];
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
if($num_row==1){
$roww=$stmts->fetch();

if($roww['a_t_s']==1){

//$stmt = $pdo->query("SELECT * FROM n_teachers WHERE login='".$log."' ");
//$stmt = $pdo->query("SELECT * FROM n_tec_gro_sub WHERE p_id=1");//IN SELECT * FROM n_teachers WHERE login='".$log."'  ");
$stmt = $pdo->query("SELECT * FROM n_tec_gro_sub WHERE p_id IN (SELECT id FROM n_teachers WHERE login='".$log."' ) ");




foreach ($stmt as $row) {
//$myschedule='n_'.$row['gro'].'_schedule';//'n_tec_'.$row['id'].'_schedule';
//$myschedule='n_2018_2019_2bpm_DB';
$myschedule='n_2018_2019_'.$row['gro'].'_'.$row['sub'].'';

}
if(isset($_POST['okok'])) header("Location: login.php");

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

//$h='';//'n_';
if(isset($_POST['tabtab'])||true){

$n_2bpm=$myschedule;
$lol=array();
if($n_2bpm!='n_'){ 
//$stmt=$pdo->query("SELECT * FROM ".$n_2bpm." WHERE day_of_week='Понедельник'  ");
$stmt=$pdo->query("SELECT * FROM ".$n_2bpm." ");

$colcount = $stmt->columnCount();
$json_data=array();
$json_data_k=array();
//$json_data_k=array(array);




//for($i=0;$i<1 ;$i++)
//
//{
//$p=0;
//echo "<td>";
/*for($i=0;$i<$colcount;$i++)
{

$coldot=str_replace('n_','',$column[$i]);
if($i!=0)
$coldot=str_replace('_','.',$coldot);
//echo $coldot;
//echo substr($coldot,0,5).' ';
$lol[]=substr($coldot,0,5);
///''substr($coldot,0,5).''=>''.$row[0].'','gro'=>''.$row[1].'','sub'=>''.$row[2].'','occupation'=>''.$row[3].'','frequency'=>"".$row[4]."",'audience'=>''.$row[5].'','day_of_week'=>''.$row[6].'');

}
//foreach($lol as $f){

foreach ($stmt as $row)
{

//foreach($lol as $f){
echo /*$f.*/ /* '_'.$row[$p].',</br>';
$p++;
}
}*/
for($i=0;$i<1;$i++)

{

$data=array(array());

$data_k=array(array());
//$data_k=array(array(array()));


$k='';
$iz=0;
//$ro=array();
//$ro2=array();
$ro2=array(array());
$ro=array(array());


//$date_k=array();//(array());
$dds=0;
$ios=0;
$s=0;
foreach ($stmt as $row)
{

//echo " <tr>";
/*$p=0;
for($i=0;$i<1 ;$i++)

{
//echo "<td>";
for($i=0;$i<$colcount;$i++)
{

$coldot=str_replace('n_','',$column[$i]);
if($i!=0)
$coldot=str_replace('_','.',$coldot);
//echo $coldot;
//echo substr($coldot,0,5).' ';
$lol[]=substr($coldot,0,5);
///''substr($coldot,0,5).''=>''.$row[0].'','gro'=>''.$row[1].'','sub'=>''.$row[2].'','occupation'=>''.$row[3].'','frequency'=>"".$row[4]."",'audience'=>''.$row[5].'','day_of_week'=>''.$row[6].'');

}

foreach($lol as $f){
echo $f.'_'.$row[$p].',</br>';
$p++;
}*/
//$json_data[$i] = array (
///''$lol[$i]''=>''.$row[0].'',''$lol[]''=>''.$row[$i].'',''substr($coldot,0,5).''=>''.$row[0].'');

/*foreach($lol as $l){
$z="''.".$l.".''=>''.".$row[0].".''";
$p++;
}*/
//echo $z;
//$json_data[$i] = array ($z);
for($oi=0;$oi<$colcount;$oi++)
{

$coldot=str_replace('n_','',$column[$oi]);
if($oi!=0)
//$coldot=str_replace('_','.',$coldot);
$coldot=$coldot;
//echo $coldot;
//echo substr($coldot,0,5);
//$lol[]=substr($coldot,0,5);
$lol[]=$coldot;


}

//foreach($lol as $s){
//echo $s.' ';

$ips++;
for($sss=0;$sss<1;$sss++)
{

for($ii=0;$ii<$colcount-1;$ii++)
{ 
//$ro[]=$lol[$ii];
//$ro[$i][$ii]=$lol[$ii];
$ro[$sss][$ii]=$lol[$ii];

$ro2[$sss][$ii]=$row[$ii];
if($ii==0){$myp_id[]=$row[$ii];/// $myp_id[$ii]=$row[$ii];//echo $row[$ii];
//echo $myp_id[$ii];
}
//echo $ro[$sss][$ii];
//echo $ro2[$sss][$ii];
//echo '</br>';
//$ro2[]=$row[$ii];
//$ro2[$i][$ii]=$row[$ii];

//$ss.=$lol[$i];
if($ii!=$colcount-1)
//$ss.="''$lol[$ii]''=>''$row[$ii]'',";
//$ss.=$lol[$ii]."=>$row[$ii],";
//$ss.="'$lol[$ii]':'$row[$ii]',";
//$ss.="$lol[$ii]".':'."$row[$ii],";
$ss.="'$lol[$ii]'".'='."'$row[$ii]',";




//$ss.="".$lol[$ii]."".=>"".$row[$ii].",";
else //$ss.="''$lol[$ii]''=>''$row[$ii]''";
//$ss.="''$lol[$ii]':''$row[$ii]''";
//$ss.="$lol[$ii]".':'."$row[$ii]";
$ss.="'$lol[$ii]'".'='."'$row[$ii]'";


//$ss.="".$lol[$ii]$row[$ii]."";

//if($ii==($colcount-1)){
//$ss=str_replace("".$row[8]."'',", "''",$ss);
//}
//$ss=str_replace(',','',$ss);
}
} //echo '</br>';
//}
//$ss=str_replace("".$row[$colcount-1]."'',","",$ss);
//echo $ss;
//$k='';
//echo $row[0];
///$json_data_k[$i] = array (
///''.$lol[$iz].''=>''.$row[0].'');//,'');
///''.$lol[$iz].''=>''.for($ii=0;$ii<$colcount;$ii++)
//{
//echo $row[$ii];
///}.'');

///$iz++;
//for($ii=0;$ii<$colcount;$ii++){
///"echo '2';" => "echo '1';"
//foreach($lol as $l)
//for($i=0;$i<1;$i++)
///''.$i.'' =>'',$i,'');
///''.$lol[0].''=>''.$row[0].'',''.$lol[1].'' => ''.$row[1].'');
///'time'=>''.$row[0].'','gro'=>''.$row[1].'','sub'=>''.$row[2].'','occupation'=>''.$row[3].'','frequency'=>"".$row[4]."",'audience'=>''.$row[5].'','day_of_week'=>''.$row[6].'');

//}

//);

$k.=$ss;

//$json_data_k[$i] = array ($ss);
//foreach( $json_data_k[$i] as $gff){
//echo $gff;} echo '</br>';
//if($i==$colcount-1)
//$k=str_replace(',','_',$k);
//echo $k;
//$k='';
$ss='';
//$date_k[]=$k;
//echo $k;
//foreach($date_k as $dd)
//echo $dd;
//$k='';
//$json_data_k[$i] = array ($k);
//foreach($ro as $r)
//$dds=0;
//$json_data_k[$i]=array(''.$ro[$dds].'');//=>''.$ro2.'');
//$s++;
//$json_data_k[][$dds]=array(''.$ro[$dds][$dds].''=>''.$ro2[$dds][$dds].'');
//for($sp=0;$sp<5;$sp++)
$json_data_k[$i]=array(''.$ro[0][0].''=>''.$ro2[0][0].'');
//$json_data_k2[$i]=array(''.$ro[0][1].''=>''.$ro2[0][1].'');
//$json_data_k[$i]+=$json_data_k2[$i];
for($spw=0;$spw<$colcount;$spw++){
$ar[$i]=array(''.$ro[0][$spw].''=>''.$ro2[0][$spw].'');
//$json_data_k2[$i]=array(''.$ro[0][1].''=>''.$ro2[0][1].'');
$json_data_k[$i]+=$ar[$i];}

//$json_data_k[$i]=array(''.$ro[4][$ios].''=>''.$ro2[4][$ios].'');
//$s++;
$k='';
$dds++;
//echo $json_data_k[$i][$i];
$json_data[$i] = array (
'time'=>''.$row[0].'','gro'=>''.$row[1].'','sub'=>''.$row[2].'','occupation'=>''.$row[3].'','frequency'=>"".$row[4]."",'audience'=>''.$row[5].'','day_of_week'=>''.$row[6].'');
//
//$en=array(json_encode_($json_data[$i]));
$data[$i][]=$json_data[$i];
$data_k[$i][]=$json_data_k[$i];
//$data_k[$i[]][]=$json_data_k[$i][$i];


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
//echo $k;
//$j_k=array(json_encode_($k));
$stmtId = $pdo->query("SELECT id FROM n_teachers WHERE login='".$log."'");
foreach($stmtId as $rowId)
{
$p_idTe=$rowId[0];
//echo $p_idTe;
}
$ch=array(); //массив для хранения получилось-не-получилось
$h=0; 
$stmtD=$pdo->query("SELECT * FROM n_tec_".$p_idTe."_schedule WHERE gro='".$gro."' AND sub='".$sub."'");

//$stmtD=$pdo->query("SELECT * FROM n_tec_".$p_id."_schedule WHERE gro='2бПМ' "); //это временно для te_l, т.к. у нас русская версия
foreach ($stmtD as $rowD)
{
$ds= $rowD[6];  //день недели
$z= $rowD[0];//,т.к. нам нужен столбец time
$fi=strstr($z,' - ',true);
$tw=strstr($z,'-'); //выводит с -
$tw=str_replace('-','',$tw);
$tw=str_replace(' ','',$tw); //лишний пробел был
//if(true){
$fi_f=str_replace(':','_',$fi);
//$fi_f=str_replace(':','_',date("H:i"));

if(($fi<date('H:i'))&&($tw>date('H:i'))&&(($days[date( 'N' )])==$ds)){
//$sqA="ALTER TABLE ".$n_2bpm." ADD COLUMN IF NOT EXISTS ".$da." INTEGER";
$sqA="ALTER TABLE ".$n_2bpm." ADD COLUMN IF NOT EXISTS ".$da.'_'.$fi_f." INTEGER";

$stmt=$pdo->query($sqA);
//echo $sqA;

$stmt=$pdo->query('SELECT * FROM '.$n_2bpm.' ');//, PDO::FETCH_ASSOC);

$colcount = $stmt->columnCount();
$i=0;
$if=0;

foreach ($stmt as $row)
{
//$myval[$i]=$myvar[$i]*2/2;
/*if($myvar[$i]==0)
$myvar[$i]=1;
elseif($myval[$i]==1)
$myval[$i]=1;
elseif($myval[$i]==2)
$myval[$i]=2;
elseif($myval[$i]==-2)
$myval[$i]=-2;
elseif($myval[$i]==-3)
$myval[$i]=-3;
*/
//echo $l[$i][0];
/*if($l[$i][0]=='')
$in=-2;
elseif($l[$i][0]=='н')
$in=-3;
else
$in=$l[$i][0];
*/
//echo $in; //это наши значения 012н
//echo "SELECT id FROM n_teachers WHERE login='".$log."'";

//echo $_SESSION['login'];
//$stmt=$pdo->query("SELECT id FROM n_teachers WHERE login='".$log."'");
//echo $stmp;
//$sqA="ALTER TABLE ".$n_2bpm." ADD ".$da." INTEGER";
//$sqU="UPDATE ".$n_2bpm." SET ".$da."='".$in."' WHERE p_id='".$row[0]."'";
//$sqU="UPDATE ".$n_2bpm." SET ".$da.'_'.$fi_f."='".$in."' WHERE p_id='".$row[0]."'";
//$sqU="UPDATE ".$n_2bpm." SET ".$da.'_'.$fi_f."='".$in."' WHERE p_id='".$ros[$if]."'";
$sqU="UPDATE ".$n_2bpm." SET ".$da.'_'.$fi_f."='".$myvar[$i]."' WHERE p_id='".$myp_id[$i]."'";
//echo $myvar[$i];
$if++;

//echo $sqU;
$stmt=$pdo->query($sqU);

$i++;


}
$ch[]=1;//true;
}//проверка времени
else{// echo ','.$tw.',';if(($tw>date('H:i'))) echo 't';//if($ds==$days[date( 'N' )]) echo 'm';
//echo '</br>Простите, но вы не можете добавить данные - ваша пара уже закончилась <!-- уже-->: ';
$ch[]=2;//false;
//echo $z;

//echo ','.$fi.',';
   }
} //foreach D
foreach ($ch as $c)
{
if($c==1)//if($c==true)
$h=1;
else $h=2;
}
if($h!=1){
echo '</br>Простите, но вы не можете добавить данные - ваша пара закончилась уже ';
//echo "SELECT * FROM n_tec_".$p_id."_schedule WHERE gro='2бПМ' ";
echo 'у группы: '.$gro;
//echo ''.$ds.',';
//echo $h;
//echo date( $days[date( 'N' )]);
//echo $z.''.$ds.'s';
//echo $z.',';
}


////foreach ($data as $d)
//foreach($d as $k){
//foreach($d as $dd)
//foreach($dd as $ddd)
//echo $ddd;
////$en=array(json_encode_($d));
////foreach($en as $e)
//echo $e;
//echo '<br>';

////foreach ($data_k as $d_k)
//foreach($d as $k){
//echo $d_k;
////$en_k=array(json_encode_($d_k));

////foreach($en_k as $e_k)
////echo $e_k;


//foreach($date_k as $dd)
//echo $dd;


//foreach ($date_k as $d_k){
//foreach($d_k as $k){
//echo $d_k;
//}
//$en=array(json_encode_($d));

//foreach($d_k as $e_k)
//echo $e_k;
//}


//foreach($j_k as $e_k)
//echo $e_k;
//

//$json_k=array(json_encode_($k));
//foreach ($json_k as $j_k)
//echo $j_k;

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
}else echo 'Вы не учитель';

}
               } catch (Exception $e) {
              print $e->getMessage() . "\r\n";
    exit(1);
                }


//echo '</form>';


//}
//else echo 'You are not a teacher';
}//require

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
