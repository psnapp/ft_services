<?php

declare(strict_types=1);

$cfg['blowfish_secret'] = 'psnapp';

$i = 0;

$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'mysql';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['user'] = 'admin';
$cfg['Servers'][$i]['password'] = 'admin';
$cfg['Servers'][$i]['compress'] = false;

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';