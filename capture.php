<?php

// new filename
$filename = 'pic_'.date('YmdHis') . '.jpeg';

$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'face_recognition/images/'.$filename) ){
	echo exec("C:\\env\\python38\\Scripts\\python.exe E:\\xampp\\htdocs\\face_recognition\\face_recognition\\recognize.py --detector E:\\xampp\\htdocs\\face_recognition\\face_recognition\\face_detection_model --embedding-model E:\\xampp\\htdocs\\face_recognition\\face_recognition\\openface_nn4.small2.v1.t7 --recognizer E:\\xampp\\htdocs\\face_recognition\\face_recognition\\output\\recognizer.pickle --le E:\\xampp\\htdocs\\face_recognition\\face_recognition\\output\\le.pickle --image E:\\xampp\\htdocs\\face_recognition\\face_recognition\\images\\$filename", $output);
 
}

