<?php
class Page
{
    public static function display(string $page)
    {
        switch ($page) {
            case 'students':
                include 'modules/student_display.php';
                break;
            case 'grades':
                include 'modules/grade_display.php';
                break;
            case 'dashboard':
                include 'modules/dashboard_display.php';
                break;
            default:
                echo "not in the list";
        }
    }
}
