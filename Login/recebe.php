<?php
session_start();

$nome = FILTER_INPUT('nome', FILTER_SANITIZE_SPECIAL_CHARS);

