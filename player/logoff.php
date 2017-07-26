<?php

session_start();

unset($_SESSION['info-player']);

header('Location: ../');