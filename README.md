# php-face-recognition
PHP Face-recognition is a program created for php-based face recognition in collaboration with python.

# Pre-Requirement & Setting up :
1. Install Opencv
2. Install Cmake & Dlib
3. Install library face_recognition with pip.
4. Git clone this repository

Setting :
1. Train & Test your data with face_recognition, you can see the docs of face_recognition.
2. Configure capture.php function exec() :

Pattren
exec(your-python your-python-script parameter, $output);

For Example,
exec("C:\\env\\python38\\Scripts\\python.exe E:\\xampp\\htdocs\\face_recognition\\face_recognition\\recognize.py --detector E:\\xampp\\htdocs\\face_recognition\\face_recognition\\face_detection_model --embedding-model E:\\xampp\\htdocs\\face_recognition\\face_recognition\\openface_nn4.small2.v1.t7 --recognizer E:\\xampp\\htdocs\\face_recognition\\face_recognition\\output\\recognizer.pickle --le E:\\xampp\\htdocs\\face_recognition\\face_recognition\\output\\le.pickle --image E:\\xampp\\htdocs\\face_recognition\\face_recognition\\images\\$filename", $output);

Explain :
in this case, i used python38 virtual envirtovment wich placed in Drive C. And then the position of my folder project in E:/xampp/htdocs/face_recognition/face_recognition/.

# Usage :
1. After setting up, Run script with xampp/lampp/wampp. i used xampp php 7.1+
2. Enjoyed This Script
