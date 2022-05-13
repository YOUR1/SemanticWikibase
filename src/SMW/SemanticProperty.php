<?php

declare( strict_types = 1 );

namespace MediaWiki\Extension\SemanticWikibase\SMW;

class SemanticProperty {

	private $id;
	private $type;
	private $label;
	private $alias;

	public function __construct( $id, $dvType, $label, $alias = null ) {
		$this->id = $id;
		$this->type = $dvType;
		$this->label = $label;
		$this->alias = $alias;
	}

	public function getId() {
		return $this->id;
	}

	public function getType() {
		return $this->type;
	}

	public function getLabel() {
		return $this->label;
	}

	/**
	 * @return string[]
	 */
	public function getAliases(): array {
		return $this->alias === null ? [] : [ $this->alias ];
	}

}
