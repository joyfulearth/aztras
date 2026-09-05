<?php
domain::add('aztras', __DIR__, true, new domain([
		'folder' => 'aztras/',
		'heading' => 'Aztra\s',
		'local' => 'http://localhost/aztras/%subfol%/%site%/',
		'live' => 'https://%site%.aztras.com/',
		'local-base' => 'http://localhost/aztras/%subfol%/',
		'live-base' => 'https://%subfol%.aztras.com/',
	],
	['%folder%www', '%folder%businesses/realtors'],
	[
		'businesses',
		'charity',
	],
));
