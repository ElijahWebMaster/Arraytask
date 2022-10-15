<?php

// Get user inputs and then store them in variables

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $country = $_POST['country'];
    
    $data = [$name, $email, $dob, $sex, $country];

    $file = fopen('./userdata.csv', 'a');

    //Short form to write into the file and then close it
    // fputcsv($file, $data);
    
    // fclose($file);

    //To catch necessary errors use this
    if($file){
        echo "File Opened...";

        if(fputcsv($file, $data)){
            echo "Data Written...";
            fclose($file);
            echo "File Closed...";
        }else{
            echo "Data could not be written...";
        }
    }else{
        echo "File could not be opened...";
    }

        echo "File Appended...";

    echo "<br>";

    print_r($data);
}else{
    echo "<h3>No Data Available! Please go to the <a href='./registration.php'>Registration Page</a>.</h3>";
};

?>