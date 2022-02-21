<?php
date_default_timezone_set('Africa/Kinshasa');
//echo facabook_time_ago("2021-01-14 21:40:00");

function cal_time_ago($timestamp)
{

    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_defference = $current_time - $time_ago;
    $seconds = $time_defference;
    $minutes = round($seconds / 60);
    $hours = round($seconds / 3600);
    $days = round($seconds / 86400);
    $weeks = round($seconds / 604800);
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);

    if ($seconds <= 60) {
        return "A l'instant";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "Il y'a une minute";
        } else {
            return "Il y'a $minutes minutes";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "Il y'a une heure";
        } else {
            if ($hours < 10)
                return "Il y'a 0$hours heures";
            else
                return "Il y'a $hours heures";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "Hier";
        } else {
            if ($days < 10)
                return "Il y'a 0$days jours";
            else
                return "Il y'a $days jours";
        }
    } else if ($weeks <= 4.3) {
        if ($weeks == 1) {
            return "Il y'a une semaine";
        } else {
            if ($weeks < 10)
                return "Il y'a 0$weeks semaines";
            else
                return "Il y'a $weeks semaines";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "Il y'a un mois";
        } else {
            if ($months < 10)
                return "Il y'a 0$months mois";
            else
                return "Il y'a $months mois";
        }
    } else {
        if ($years == 1) {
            return "Il y'a un an";
        } else {
            if ($years < 10)
                return "Il y'a 0$years années";
            else
                return "Il y'a $years années";
        }
    }
}