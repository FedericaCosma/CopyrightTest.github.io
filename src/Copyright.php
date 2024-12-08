<?php declare(strict_types=1);

namespace Genioam\Copyright;


class Copyright
{
    // Metodo per ottenere il testo del copyright con l'anno corrente
    public static function getCopyrightInfo(): string
    {
        $currentYear = date('Y');  // Ottieni l'anno corrente
        return "Copyright $currentYear © MYCOMPANY s.r.l.";
    }
}

