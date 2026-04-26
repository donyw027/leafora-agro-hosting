<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['protocol']    = 'smtp';
$config['smtp_host']   = 'mail.leaforaagro.com'; 
$config['smtp_port']   = 465;
$config['smtp_user']   = 'marketing@leaforaagro.com';
$config['smtp_pass']   = '@marketingleafora123';
$config['mailtype']    = 'html';
$config['charset']     = 'utf-8';
$config['wordwrap']    = TRUE;
$config['newline']     = "\r\n";
$config['crlf']        = "\r\n";
$config['smtp_timeout'] = 15;
$config['validate']    = TRUE;
$config['log_threshold'] = 3;