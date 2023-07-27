<?php

interface DbConnectionI {
    public function connect(): PDO;
}