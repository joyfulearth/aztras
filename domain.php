<?php
domain::add('aztras', __DIR__, true, new domain([
		'folder' => 'aztras/',
		'heading' => 'AZ',
		'local' => 'http://localhost/aztras/%subfol%/%site%/',
		'live' => 'https://%site%.aztras.org/',
		'local-base' => 'http://localhost/aztras/%subfol%/',
		'live-base' => 'https://%subfol%.aztras.org/',
	],
	['%folder%www', '%folder%businesses/realtors'],
	[
		'businesses',
		'charity',
	],
));
