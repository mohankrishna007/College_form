<?php
//fetch.php
if(isset($_GET["id"]))
{
  $id = $_GET["id"];
 $connect = mysqli_connect("localhost", "root", "", "collegedb");
 $query = "select * from forms where id>=$id order by id asc limit 1";
 $result = mysqli_query($connect, $query);

 $resultcount = mysqli_query($connect, "select count(1) FROM forms");
 $rowcount= mysqli_fetch_array($resultcount);
 $total = $rowcount[0];

 $row = mysqli_fetch_array($result);

  $data["clgname"] = $row["clgname"];
  $data["clgcode"] = $row["clgcode"];
  $data["district"] = $row["district"];
  $data["monthyear"] = $row["monthyear"];
  $data["ir"] = $row["ir"];
  $data["arg"] = $row["arg"];

  $data["icsmtitle"] = $row["icsmtitle"];
  $data["icsmdate"] = $row["icsmdate"];
  $data["icsmpurpose"] = $row["icsmpurpose"];
  $data["icsmpart"] = $row["icsmpart"];
  $data["icsmaod"] = $row["icsmaod"];

  $data["twotitle"] = $row["twotitle"];
  $data["twodate"] = $row["twodate"];
  $data["twopurpose"] = $row["twopurpose"];
  $data["twopart"] = $row["twopart"];
  $data["twoaod"] = $row["twoaod"];

  $data["ccatitle"] = $row["ccatitle"];
  $data["ccadate"] = $row["ccadate"];
  $data["ccapurpose"] = $row["ccapurpose"];
  $data["ccapart"] = $row["ccapart"];
  $data["ccaaod"] = $row["ccaaod"];

  $data["ncctitle"] = $row["ncctitle"];
  $data["nccdate"] = $row["nccdate"];
  $data["nccpurpose"] = $row["nccpurpose"];
  $data["nccpart"] = $row["nccpart"];
  $data["nccaod"] = $row["nccaod"];

  $data["nsstitle"] = $row["nsstitle"];
  $data["nssdate"] = $row["nssdate"];
  $data["nsspurpose"] = $row["nsspurpose"];
  $data["nsspart"] = $row["nsspart"];
  $data["nssaod"] = $row["nssaod"];

  $data["servicetitle"] = $row["servicetitle"];
  $data["servicedate"] = $row["servicedate"];
  $data["servicepurpose"] = $row["servicepurpose"];
  $data["servicepart"] = $row["servicepart"];
  $data["serviceaod"] = $row["serviceaod"];

  $data["srptitle"] = $row["srptitle"];
  $data["srpdate"] = $row["srpdate"];
  $data["srpsponser"] = $row["srpsponser"];
  $data["srpgr"] = $row["srpgr"];
  $data["srpaod"] = $row["srpaod"];

  $data["rpctitle"] = $row["rpctitle"];
  $data["rpcdate"] = $row["rpcdate"];
  $data["rpcsponser"] = $row["rpcsponser"];
  $data["rpcgr"] = $row["rpcgr"];
  $data["rpcaod"] = $row["rpcaod"];

  $data["njauthor"] = $row["njauthor"];
  $data["njtitle"] = $row["njtitle"];
  $data["njname"] = $row["njname"];
  $data["njlap"] = $row["njlap"];

  $data["ncauthor"] = $row["ncauthor"];
  $data["nctitle"] = $row["nctitle"];
  $data["ncdetails"] = $row["ncdetails"];
  $data["nclap"] = $row["nclap"];

  $data["nbauthor"] = $row["nbauthor"];
  $data["nbtitle"] = $row["nbtitle"];
  $data["nbname"] = $row["nbname"];
  $data["nbdetails"] = $row["nbdetails"];
  $data["nblap"] = $row["nblap"];

  $data["npauthor"] = $row["npauthor"];
  $data["nptitle"] = $row["nptitle"];
  $data["npapplication"] = $row["npapplication"];
  $data["nplap"] = $row["nplap"];

  $data["ssp"] = $row["ssp"];

  $data["ecoatitle"] = $row["ecoatitle"];
  $data["ecoadate"] = $row["ecoadate"];
  $data["ecoapart"] = $row["ecoapart"];
  $data["ecoaaod"] = $row["ecoaaod"];

  $data["artitle"] = $row["artitle"];
  $data["arsni"] = $row["arsni"];
  $data["arorg"] = $row["arorg"];
  $data["ardate"] = $row["ardate"];
  $data["araod"] = $row["araod"];

  $data["pictitle"] = $row["pictitle"];
  $data["picsni"] = $row["picsni"];
  $data["picaod"] = $row["picaod"];

  $data["aors"] = $row["aors"];
  }

  $data["count"] = $total;
  
 echo json_encode($data);

?>