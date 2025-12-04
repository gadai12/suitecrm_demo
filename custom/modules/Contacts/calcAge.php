<?php
class CalcAge
{
    public function updateAge($bean)
    {
        if (!empty($bean->dob_c)) {
            $dob = new DateTime($bean->dob_c);
            $now = new DateTime();
            $age = $dob->diff($now)->y;
            $bean->age_c = $age;
            if ($age >= 0 && $age <= 3) {
                $bean->age_group_c = 'infant';
            } elseif ($age > 3 && $age <= 18) {
                $bean->age_group_c = 'child';
            } elseif ($age > 18 && $age <= 60) {
                $bean->age_group_c = 'adult';
            } else {
                $bean->age_group_c = 'senior';
            }
        }
    }
}
?>