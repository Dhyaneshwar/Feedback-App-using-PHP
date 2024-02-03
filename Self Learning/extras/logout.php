<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php/Self Learning/13_sessions.php');
