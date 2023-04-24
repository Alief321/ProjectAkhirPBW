<?  
    include('./header.php');
    if($data['navbar'] == 'perlu'){
        include('./navbar.php');
    }
    include($data['content']); 
    include('./footer.php'); 
?>