<?php

function date_convert($dt, $tz1, $df1, $tz2, $df2) {
  // create DateTime object
  $d = DateTime::createFromFormat($df1, $dt, new DateTimeZone($tz1));
  // convert timezone
  $d->setTimeZone(new DateTimeZone($tz2));
  // convert dateformat
  return $d->format($df2);
}
echo date_convert('29/09/2017 18:58:00', 'America/Los_Angeles', 'd/m/Y H:i:s', 'GMT', 'Y-m-d H:i:s');