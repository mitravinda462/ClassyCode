<?php
    echo "Start Reading...<br />";

    $file = fopen("sample.txt", "r");

    while(!feof($file)){
        echo "Name: " . fgets($file, 1024) . "<br />";
    }

    fclose($file);
    
    echo "End Reading...<br />";
?>
<br /><br /><br /><br />
<?php
    echo "Writing to a file...<br />";

    $content = "Custom content here.";

    $name = $_REQUEST["name"];
    $time = "";

    if (isset($_REQUEST["time"])){
        $time = $_REQUEST["time"];
    }
    
    $file = fopen("newFile.txt", "w");

    fwrite($file, $content);
    fwrite($file,$name);
    fclose($file);

    echo "Writing end...<br />";
?>
<br /><br /><br />
<form action="#" method="POST">
    <input type="text" name="yourContent" />
    
    <input type="text" name="name"/>
    <input type="number" name="time"/>
    <input type="submit" text="Click here." />
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "POST Writing started...<br />";
        
        $yourContent = $_POST["yourContent"];
        
        $file = fopen("contentFile.txt", "a");

        fwrite($file, $yourContent);

        fclose($file);

        echo "POST Writing end...<br />";
    }
?>


