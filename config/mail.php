<?php

return [

	'driver' => 'smtp',
	'host' => 'smtp.gmail.com',
	'port' => 587,
	'from' => ['address' => 'fabricio.silva@boavista.rr.gov.br', 'name' => 'fabricio'],
	'encryption' => 'tls',
	'username' => 'fabricio.silva@boavista.rr.gov.br',
	'password' => 'j6p7dkmtn9',
	'sendmail' => '/usr/sbin/sendmail -bs',
	'pretend' => false,
];
