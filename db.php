<?php
    $db = new SQLite3("events.db");
    /*** Create table for machine failure event ***/
    $db->exec("CREATE TABLE IF NOT EXISTS job (start_time varchar(255), end_time varchar(255), duration varchar(255), job_type varchar(255), component varchar(255))");
    $db->exec("CREATE TABLE IF NOT EXISTS machine_failure (start_time varchar(255), end_time varchar(255), duration varchar(255), failed_unit varchar(255), failure_mode varchar(255))");
    $db->exec("CREATE TABLE IF NOT EXISTS setup_change (start_time varchar(255), end_time varchar(255), duration varchar(255), old_setup varchar(255), new_setup varchar(255))");
    $db->exec("CREATE TABLE IF NOT EXISTS production_stoppage (start_time varchar(255), end_time varchar(255), duration varchar(255), cause varchar(255))");
    $db->exec("CREATE TABLE IF NOT EXISTS operator_unavailability (start_time varchar(255), end_time varchar(255), duration varchar(255), cause varchar(255))");

    $db->exec("CREATE TABLE IF NOT EXISTS lunch_tea (start_time varchar(255), end_time varchar(255), duration varchar(255))");
    $db->exec("CREATE TABLE IF NOT EXISTS precautionary_check (start_time varchar(255), end_time varchar(255), duration varchar(255))");
    $db->exec("CREATE TABLE IF NOT EXISTS pm (start_time varchar(255), end_time varchar(255), duration varchar(255))");
?>
