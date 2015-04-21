<?php 
echo "ajay";
$osTax=100;
$oFsTax = $osTax*.2;
echo $oFsTax;die;

$a=explode('-','Product name-Product name');
echo $a[1];
die;

$n=0;
for($i=1;$i<4;$i++){
$n +=$i;
}

$creditlimit=-323;
if($creditlimit<0){
 $creditlimitN=explode('-',$creditlimit);
 echo $creditlimitN[0].$creditlimitN[1];
 }
?>
<input id="creditlimit" value="creditlimit" type="radio" name="payment[method]" title="" onclick="checkcreditlimit()" class="radio" />
<script language="javascript1.1">
function checkcreditlimit(){
	alert("You don't have enough balance");
	return false;
	}
</script>