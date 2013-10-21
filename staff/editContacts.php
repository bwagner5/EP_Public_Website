<?php   
    if(isset($_POST['submit'])){
        $file = file_get_contents('files/contacts/contactData.json');
        $data = json_decode(stripslashes($file), true);
        
        if ($_POST['submit'] == "Add"){
            $name = trim($_POST['contactName']);
            $email = trim($_POST['contactEmail']);
            $phone = trim($_POST['contactPhone']);
            
            // Insert new contact
            $info = array("phone" => $phone, "email" => $email);
            $data[$name] = $info;    
        }
        else if ($_POST['submit'] == "Delete") {
            $name = trim($_POST['contactName']);
            unset($data[$name]); 
        }
        // Delete the contact directory and re-add it to prevent permissions conflicts
        rmdir("files/contacts");
        mkdir("files/contacts", $mode = 0775);
        // Save the file
        file_put_contents('files/contacts/contactData.json', json_encode($data));
        unset($data); // Release memory
        header('Location: index.php');
    }
?>
