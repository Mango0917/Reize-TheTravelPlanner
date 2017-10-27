<?php
    /*function data_page($conn, $pageid){
	    // Query the data and put the date into an array
	    $query="SELECT * FROM pages WHERE id = $pageid";
	    $result=oci_query($conn, $query);
	    $data=mysqli_fetch_assoc($result);

	    /* If the content in the SQL Database contains any HTML tags, add the '<p>' tag, otherwise leave it as it is.
	    $data['body_nohtml']=strip_tags($data['body']);
	    if($data['body']==$data['body_nohtml']){
		    $data['body_formatted']='<p>'.$data['body'].'<p>';
	    } else{
		    $data['body_formatted']=$data['body'];
	    } 
	    return $data;
    }*/

    function data_user($conn, $id){
        $query="SELECT e_mail FROM customer WHERE e_mail = '$id'";
        $result=oci_parse($conn, $query);
		oci_execute($result);
        $data=oci_fetch_assoc($result);
           

        return $data;
    }
?>