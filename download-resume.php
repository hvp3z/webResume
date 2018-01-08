<?php
header("Content-disposition: attachment; filename=resume_mduret.pdf");
header("Content-type: application/pdf");
readfile("resume_mduret.pdf");?>