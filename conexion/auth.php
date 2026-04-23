<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
function require_role($role) {
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== $role) {
        header('Location: login.php');
        exit;
    }
}
