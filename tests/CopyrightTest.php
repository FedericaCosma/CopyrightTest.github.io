<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Genioam\Copyright\Copyright;

class CopyrightTest extends TestCase
{
    // Test per verificare che il metodo restituisca il formato corretto
    public function testGetCopyrightInfo()
    {
        $copyright = new Copyright();
        
        // Ottieni l'anno corrente
        $currentYear = date('Y');
        
        // Verifica che la stringa restituita sia corretta
        $expected = "Copyright $currentYear © MYCOMPANY s.r.l.";
        $this->assertEquals($expected, $copyright->getCopyrightInfo());
    }
}

