<?
//echo "<pre>";
if( !isset($_POST['q1']) ){
    return false;
}

header('Content-Type: text/html; charset=utf-8');
require_once 'includes/global.inc.php';
$db = new DB();
/*if($_SERVER['REMOTE_ADDR'] == '87.237.238.83'){
    //echo "<pre>";print_r($_POST['ot']);
    echo implode(',', $_POST['ot'][26]).'<br>';
    echo implode(',', $_POST['ot'][27]).'<br>';
    echo implode(',', $_POST['ot'][28]).'<br>';
    echo implode(',', $_POST['ot'][29]).'<br>';
    echo implode(',', $_POST['ot'][30]).'<br>';
    die;
}*/
$data = [
    'q2' => json_encode([
        1 => ($_POST['q1_1']),
        2 => ($_POST['q1_2']),
        3 => ($_POST['q1_3']),
        4 => ($_POST['q1_4']),
        5 => ($_POST['q1_5'])
    ],JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE),
    'q1' => json_encode($_POST['q1']),

    'q3' => addslashes(json_encode($_POST['q3'],JSON_HEX_QUOT)),
    'dcreated' => date('Y-m-d H:i:s'),
];



$id = $db->insert($data, 'taklif2019');
if($id>0){
    if(isset($_FILES['q2']['tmp_name']) && $_FILES['q2']['size'] > 0){
        mkdir(__DIR__.'/files/'.$id);
        $uploaddir = __DIR__.'/files/'.$id.'/';
        $uploadfile = $uploaddir . basename($_FILES['q2']['name']);

        if (!move_uploaded_file($_FILES['q2']['tmp_name'], $uploadfile)) {
            //echo "Файл не сохранён\n";
        }
    }
   //var_dump($_FILES['q2']); die;
}
//print_r($uploadfile); die;
//print_r($data); die;



//mail("man780@mail.ru", "My Subject", "Line 1\nLine 2\nLine 3");


?>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function () {
        swal('Рахмат!', 'Сизнинг таклифингиз қабул қилинди', 'success');
    });

</script>
<style>
    a {
        vertical-align: middle;
    }

    .block {
        width: 100%;
        height: 100%;
        text-align: center;
        vertical-align: middle;
        display: table;
    }
    .inner-block{
        display: table-cell;
        width: 100%;
        height: 100%;
        text-align: center;
        vertical-align: middle;
    }
</style>
<html style="height: 100%">
<body style="height: 100%">
<div class="block" style="background-image: url('/back.png')">
    <div class="inner-block">
        <img src="/images/5.jpg" class="logo" width="70%" style="border-radius: 10px;">
        <h1>
            Bildirgan fikringiz uchun tashakkur
        </h1>
    </div>
</div>
</body>
</html>
