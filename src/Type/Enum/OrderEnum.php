<?php

namespace WPGraphQL\Type;

register_graphql_enum_type( 'OrderEnum', [
	'description'  => __( 'The cardinality of the connection order', 'wp-graphql' ),
	'values'       => [
		'ASC'  => [
			'value' => 'ASC',
		],
		'DESC' => [
			'value' => 'DESC',
		],
	],
	'defaultValue' => 'DESC',
] );
