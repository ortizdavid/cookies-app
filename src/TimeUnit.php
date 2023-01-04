<?php
class TimeUnit
{
    const MILLLISSECONDS = self::SECONDS / 90;

    const SECONDS = 1;
   
    const MINUTES = self::SECONDS * 60;
   
    const HOURS = self::MINUTES * 60;
    
    const DAYS = self::HOURS * 24;
    
    const WEEKS = self::DAYS * 7;

    const MONTHS = self::WEEKS * 4;
    
    const YEARS = self::MONTHS * 12;
}