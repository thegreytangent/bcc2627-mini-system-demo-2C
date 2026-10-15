 <?php 
 
 $student = new Student(" 12-11111","cruz", "mike","Aug. 12,2313");
 ?>
 
 
 <main class="content">
            <h2>Student Information</h2>
            <p>Student Number: <?php echo  $student->student_number; ?></p> </br>
             <p>Complete Name: <?php echo  $student->completeName(); ?></p> </br>
            <p>Date of Birth: <?php echo  $student->getDOB(); ?></p> </br>
        </main>