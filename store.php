<?php
// session_start();
// error_reporting(0);
// include('config.php');
$connect = mysqli_connect("localhost", "root", "", "collegedb");

 if(isset($_POST['submit'])) {

    $clgname = $_POST['clgname'];
    $clgcode = $_POST['clgcode'];
    $district = $_POST['district'];
    $monthyear = $_POST['monthyear'];
    $ir = $_POST['ir'];
    $arg = $_POST['arg'];

    $icsmtitle = $_POST['icsmtitle'];
    $icsmdate = $_POST['icsmdate'];
    $icsmpurpose = $_POST['icsmpurpose'];
    $icsmpart = $_POST['icsmpart'];
    $icsmaod = $_POST['icsmaod'];

    $twotitle = $_POST['twotitle'];
    $twodate = $_POST['twodate'];
    $twopurpose = $_POST['twopurpose'];
    $twopart = $_POST['twopart'];
    $twoaod = $_POST['twoaod'];

    $ccatitle = $_POST['ccatitle'];
    $ccadate = $_POST['ccadate'];
    $ccapurpose = $_POST['ccapurpose'];
    $ccapart = $_POST['ccapart'];
    $ccaaod = $_POST['ccaaod'];

    $ncctitle = $_POST['ncctitle'];
    $nccdate = $_POST['nccdate'];
    $nccpurpose = $_POST['nccpurpose'];
    $nccpart = $_POST['nccpart'];
    $nccaod = $_POST['nccaod'];

    $nsstitle = $_POST['nsstitle'];
    $nssdate = $_POST['nssdate'];
    $nsspurpose = $_POST['nsspurpose'];
    $nsspart = $_POST['nsspart'];
    $nssaod = $_POST['nssaod'];
    
    $servicetitle = $_POST['servicetitle'];
    $servicedate = $_POST['servicedate'];
    $servicepurpose = $_POST['servicepurpose'];
    $servicepart = $_POST['servicepart'];
    $serviceaod = $_POST['serviceaod'];

    $srptitle = $_POST['srptitle'];
    $srpdate = $_POST['srpdate'];
    $srpsponser = $_POST['srpsponser'];
    $srpgr = $_POST['srpgr'];
    $srpaod = $_POST['srpaod'];

    $rpctitle = $_POST['rpctitle'];
    $rpcdate = $_POST['rpcdate'];
    $rpcsponser = $_POST['rpcsponser'];
    $rpcgr = $_POST['rpcgr'];
    $rpcaod = $_POST['rpcaod'];

    $njauthor = $_POST['njauthor'];
    $njtitle = $_POST['njtitle'];
    $njname = $_POST['njname'];
    $njlap = $_POST['njlap'];

    $ncauthor = $_POST['ncauthor'];
    $nctitle = $_POST['nctitle'];
    $ncdetails = $_POST['ncdetails'];
    $nclap = $_POST['nclap'];

    $nbauthor = $_POST['nbauthor'];
    $nbtitle = $_POST['nbtitle'];
    $nbname = $_POST['nbname'];
    $nbdetails = $_POST['nbdetails'];
    $nblap = $_POST['nblap'];

    $npauthor = $_POST['npauthor'];
    $nptitle = $_POST['nptitle'];
    $npapplication = $_POST['npapplication'];
    $nplap = $_POST['nplap'];

    $ssp = $_POST['ssp'];

    $ecoatitle = $_POST['ecoatitle'];
    $ecoadate = $_POST['ecoadate'];
    $ecoapart = $_POST['ecoapart'];
    $ecoaaod = $_POST['ecoaaod'];

    $artitle = $_POST['artitle'];
    $arsni = $_POST['arsni'];
    $arorg = $_POST['arorg'];
    $ardate = $_POST['ardate'];
    $araod = $_POST['araod'];

    $pictitle = $_POST['pictitle'];
    $picsni = $_POST['picsni'];
    $picaod = $_POST['picaod'];

    $aors = $_POST['aors'];



    

$query ="INSERT INTO forms values(NULL,'$clgname','$clgcode','$district','$monthyear','$ir','$arg',
                                 '$icsmtitle','$icsmdate','$icsmpurpose','$icsmpart','$icsmaod',
                                 '$twotitle','$twodate','$twopurpose','$twopart','$twoaod','$ccatitle',
                                 '$ccadate','$ccapurpose','$ccapart','$ccaaod','$ncctitle','$nccdate',
                                 '$nccpurpose','$nccpart','$nccaod','$nsstitle','$nssdate','$nsspurpose',
                                 '$nsspart','$nssaod','$servicetitle','$servicedate','$servicepurpose',
                                 '$servicepart','$serviceaod','$srptitle','$srpdate','$srpsponser','$srpgr',
                                 '$srpaod','$rpctitle','$rpcdate','$rpcsponser','$rpcgr','$rpcaod','$njauthor',
                                 '$njtitle','$njname','$njlap','$ncauthor','$nctitle','$ncdetails','$nclap',
                                 '$nbauthor','$nbtitle','$nbname','$nbdetails','$nblap','$npauthor','$nptitle',
                                 '$npapplication','$nplap','$ssp','$ecoatitle','$ecoadate','$ecoapart','$ecoaaod',
                                 '$artitle','$arsni','$arorg','$ardate','$araod','$pictitle','$picsni','$picaod','$aors');";
$result = mysqli_query($connect, $query);

if(!$result){
    echo " could not inserted";
} else{
    echo "inserted";
}
 }
?>