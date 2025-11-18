@echo off
REM Create layouts and pages directories
mkdir resources\views\layouts
mkdir resources\views\pages

REM Create blade files in layouts folder
type nul > resources\views\layouts\app.blade.php
type nul > resources\views\layouts\footer.blade.php
type nul > resources\views\layouts\header.blade.php

REM Create blade files in pages folder
type nul > resources\views\pages\index.blade.php
type nul > resources\views\pages\about.blade.php
type nul > resources\views\pages\servcies.blade.php
type nul > resources\views\pages\contact.blade.php
type nul > resources\views\pages\privacy-policy.blade.php
type nul > resources\views\pages\terms.blade.php
type nul > resources\views\pages\projects.blade.php

echo Folder structure and blade files created successfully!
