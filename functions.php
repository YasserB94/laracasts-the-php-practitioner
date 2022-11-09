<?php
function formatPersons(array $persons): array
{
    $formatted = [];
    foreach ($persons as $person => $traits) {
        foreach ($traits as $trait => $value) {
            gettype($value) && $formatted[ucfirst(strtolower($person))][$trait] = ucfirst(strtolower($value));
        }
    }
    return $formatted;
}


