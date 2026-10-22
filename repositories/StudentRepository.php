<?php 
class StudentRepository extends DBRepository implements IStudentRepository {

  public static function all(): array {
        $students = [
            [
                'student_number' => '12-3123',
                'firstname' => 'john',
                'lastname' => 'doe',
                'dob' => '2012-12-12'
            ],
             [
                'student_number' => '12-xxx',
                'firstname' => 'mike',
                'lastname' => 'sample',
                'dob' => '2012-12-12'
            ]
        ];
        

        return  $students;
    }

    public static  function find(string $id): array {
        return  [];
    }
    
    public static  function update(array $data, string $id): array {
        return  [];
    }
    
    public static  function delete(string $id): void {
        
    }



}