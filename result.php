<?
header('Content-Type: text/html; charset=utf-8');
require_once 'includes/global.inc.php';
$db = new DB();
$taklifList = $db->select('taklif2019');
//var_dump($taklifList); die;
$taklifArr = array();
foreach ($taklifList as $taklif) {
    $taklifArr[$taklif['id']] = $taklif['title'];
}

$list = $db->select('taklif2019');
?>
<??>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/bootstrap.css">

</head>

<!DOCTYPE html>
<html>
<body>
<!-- Main content -->
<section>

    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-2 content box box-info">
                    <a href="">
                        <img src="/images/xs_uz.png" style="width: 100px">
                    </a>
                </div>
                <div class="col-md-2 content box box-info">
                    <a href="#1-yonalish">
                        <img src="/images/dirc1.png" style="width: 100px">
                        <h4>1-йўналиш</h4>
                    </a>
                </div>
                <div class="col-md-2 content box box-info">
                    <a href="#2-yonalish">
                        <img src="/images/dirc2.png" style="width: 100px">
                        <h4>2-йўналиш</h4>
                    </a>
                </div>
                <div class="col-md-2 content box box-info">
                    <a href="#3-yonalish">
                        <img src="/images/dirc3.png" style="width: 100px">
                        <h4>3-йўналиш</h4>
                    </a>
                </div>
                <div class="col-md-2 content box box-info">
                    <a href="#4-yonalish">
                        <img src="/images/dirc4.png" style="width: 100px">
                        <h4>4-йўналиш</h4>
                        <a href="">
                </div>
                <div class="col-md-2 content box box-info">
                    <a href="#5-yonalish">
                        <img src="/images/dirc5.png"style="width: 100px">
                        <h4>5-йўналиш</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="content">
            <h2>
                Жами: <?= count($taklifList); ?>
            </h2>
            <div class="table-responsive">
                <div id="1-yonalish">
                    <div><h2 align="center">1 - йўналиш</h2></div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>

                            <th align="center">Таклифлар</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?$i =0;?>
                        <? foreach ($taklifList as $taklif): ?>
                            <?
                            $q2Arr = json_decode(strip_tags($taklif['q2']), true);
                            if( $q2Arr[1] == '') continue;
                            ?>
                            <tr>
                                <td>
                                    <?=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[1]))?>
                                </td>

                            </tr>
                            <?$i++?>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                    <?=$i;?>
                </div>
                <div id="2-yonalish">
                    <div><h2 align="center">2 - йўналиш</h2></div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>

                            <th>Таклифлар</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?$i =0;?>
                        <? foreach ($taklifList as $taklif): ?>
                            <?
                            $q2Arr = json_decode(strip_tags($taklif['q2']), true);
                            if( $q2Arr[2] == '') continue;
                            ?>
                            <tr>

                                <td>
                                    <?=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[2]))?>
                                </td>

                            </tr>
                            <?$i++?>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                    <?=$i;?>
                </div>
                <div id="3-yonalish">
                    <div><h2 align="center">3 - йўналиш</h2></div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>

                            <th>Таклифлар</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?$i =0;?>
                        <? foreach ($taklifList as $taklif): ?>
                            <?
                            $q2Arr = json_decode(strip_tags($taklif['q2']), true);
                            if( $q2Arr[3] == '') continue;
                            ?>
                            <tr>

                                <td>
                                    <?=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[3]))?>
                                </td>

                            </tr>
                            <?$i++?>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                    <?=$i;?>
                </div>
                <div id="4-yonalish">
                    <div><h2 align="center">4 - йўналиш</h2></div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>

                            <th>Таклифлар</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?$i =0;?>
                        <? foreach ($taklifList as $taklif): ?>
                            <?
                            $q2Arr = json_decode(strip_tags($taklif['q2']), true);
                            if( $q2Arr[4] == '') continue;
                            ?>
                            <tr>

                                <td>
                                    <?=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[4]))?>
                                </td>

                            </tr>
                            <?$i++?>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                    <?=$i;?>
                </div>
                <div id="5-yonalish">
                    <div><h2 align="center">5 - йўналиш</h2></div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>

                            <th>Таклифлар</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?$i =0;?>
                        <? foreach ($taklifList as $taklif): ?>
                            <?
                            $q2Arr = json_decode(strip_tags($taklif['q2']), true);
                            if( $q2Arr[5] == '') continue;
                            ?>
                            <tr>

                                <td>
                                    <?=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[5]))?>
                                </td>

                            </tr>
                            <?$i++?>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                    <?=$i;?>
                </div>

                <!--<table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>

                    <th>2</th>
                    <th>3</th>
                </tr>
                </thead>
                <tbody>
                <?/* foreach ($taklifList as $taklif): */?>
                    <?/*
                    $q2Arr = json_decode(strip_tags($taklif['q2']), true);
                    if( $q2Arr[1] == '' &&
                        $q2Arr[2] == '' &&
                        $q2Arr[3] == '' &&
                        $q2Arr[4] == '' &&
                        $q2Arr[5] == '')
                        continue;
                    */?>
                    <tr>
                        <td><?/*= $taklif['id'] */?></td>
                        <td>
                            <p>1. <?/*=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[1]))*/?></p>
                            <p>2. <?/*=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[2]))*/?></p>
                            <p>3. <?/*=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[3]))*/?></p>
                            <p>4. <?/*=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[4]))*/?></p>
                            <p>5. <?/*=str_replace('u0022', '"', str_replace('u0027', "`", $q2Arr[5]))*/?></p>
                        </td>
                        <td><?/*= $taklif['q3'] */?></td>
                    </tr>
                <?/* endforeach; */?>
                </tbody>

            </table>-->
            </div>
        </div>


</section>
</div>
<style>
    .box-shadow{
        box-shadow: 2px 2px;
    }
</style>

</body>
</html>
