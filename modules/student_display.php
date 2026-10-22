<main class="content">
    <h2>Student Information</h2>
    <div class="container-fluid">
        <button class="btn btn-success mb-4">Add Student</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student Number</th>
                    <th scope="col">Complete Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (StudentRepository::all() as $student) : ?>
                <tr>
                    <th scope="row"><?php echo $student['student_number']; ?></th>
                   <th scope="row"><?php echo $student['firstname']; ?></th>
                    <th scope="row"><?php echo $student['dob']; ?></th>
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>




</main>