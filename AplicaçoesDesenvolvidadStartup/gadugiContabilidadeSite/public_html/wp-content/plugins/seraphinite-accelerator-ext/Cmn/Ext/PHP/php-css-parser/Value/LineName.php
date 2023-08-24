<?php

namespace seraph_accel\Sabberworm\CSS\Value;

use seraph_accel\Sabberworm\CSS\Parsing\ParserState;
use seraph_accel\Sabberworm\CSS\Parsing\UnexpectedTokenException;
use seraph_accel\Sabberworm\CSS\Settings;

class LineName extends ValueList {
	public function __construct($aComponents = array(), $iPos = 0) {
		parent::__construct($aComponents, ' ', $iPos);
	}

	public static function parse(ParserState $oParserState) {
		$oParserState->consume(1, false);
		$oParserState->consumeWhiteSpace();
		$aNames = array();
		do {
			if($oParserState->getSettings()->bLenientParsing & Settings::ParseErrMed) {
				try {
					$aNames[] = strtolower($oParserState->parseIdentifier());
				} catch(UnexpectedTokenException $e) {
					if ($e->getSeverity() < Settings::ParseErrMed)
						$e->setSeverity(Settings::ParseErrMed);
					$oParserState->traceException($e);
				}
			} else {
				$aNames[] = strtolower($oParserState->parseIdentifier());
			}
			$oParserState->consumeWhiteSpace();
		} while (!$oParserState->comes(']'));
		$oParserState->consume(1, false);
		return new LineName($aNames, $oParserState->currentPos());
	}



	public function __toString() {
		return $this->renderWhole(new \seraph_accel\Sabberworm\CSS\OutputFormat());
	}

	public function render(string &$sResult, \seraph_accel\Sabberworm\CSS\OutputFormat $oOutputFormat) {
		$sResult .= '[';
		parent::render($sResult, \seraph_accel\Sabberworm\CSS\OutputFormat::createCompact());
		$sResult .= ']';
	}

}
