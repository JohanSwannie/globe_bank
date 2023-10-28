<?php

  function find_all_subjects() {
    global $db;

    $sql = "SELECT * FROM subjects ORDER BY position ASC";
    // OR
    // $sql = "SELECT * FROM subjects";
    // $sql .= " ORDER BY position ASC";
    // Testing sql by typing "echo $sql";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_all_pages() {
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id ASC, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

?>
