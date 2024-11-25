<?php 

$fileName = "userdata.txt";

// Open the file in read mode
$file = fopen($fileName, "w+");

if (!$file) {
    echo "Unable to open file...";
} else {
	
$keys=array("name","city","designation",'salary');
$values=array('dev kacha','rajkot','dba',10000);
$main=array_combine($keys,$values);
//print_r($main);

	$data="";
	foreach($main as $key=>$value){
        $data .= $key . " : " . $value . "\n"; // Append each line to $data
	}

//$data="dev";
$write=fwrite($file,$data);
	if($write){
		echo "<script>alert('sucessful Write.');</script>";
	
	 // Move the file pointer back to the beginning of the file
		rewind($file);
		 // Read the file content
        $content = fread($file, filesize($fileName)); // Read written bytes
        echo nl2br($content); // Display content with new lines
	
	fclose($file);
	}else{
		echo "<script>alert('File Writeing Error.');</script>";
	}
}

?>
