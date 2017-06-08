<?php

function CheckChucVu($ChuyenHuongDen)
{
    session_start();
    if(!isset($_SESSION['chuc_vu']) || $_SESSION['chuc_vu']<1)
        header("location: $ChuyenHuongDen");
}