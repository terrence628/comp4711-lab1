<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            include('student.php');
            $first = new Student();

            //add first student
            $students = array();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            //add second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //add third student (myself)
            $third = new Student();
            $third->surname = "Lam";
            $third->first_name = "Terrence";
            $third->add_email('home','terrence_lam@hotmail.com');
            $third->add_email('school','tlam88@my.bcit.ca');
            $third->add_grade(95);
            $third->add_grade(80);
            $students['t628'] = $third;

            //sort students
            ksort($students); 
            
            //output the students 
            foreach($students as $student){
                echo $student->toString();
                
            }
            
            
        ?> 
    </body>
</html>
