<?php

declare( strict_types = 1 );

namespace MediaWiki\Extension\SemanticWikibase\Wikibase;

use DataValues\DataValue;

class TypedDataValue {

	private $value;
	private $propertyType;

	public function __construct( $propertyType, DataValue $value ) {
		$this->value = $value;
		$this->propertyType = $propertyType;
	}

	public function getValue(): DataValue {
		return $this->value;
	}

	public function getPropertyType() {
		return $this->propertyType;
	}

}
