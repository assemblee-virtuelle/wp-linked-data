<?php
namespace org\desone\wordpress\wpLinkedData;

class RdfType {
    const RDF_XML = 'rdfxml';
    const JSON_LD = 'json';
    const TURTLE = 'ttl';

    /**
     * returns the MIME type for the given format
     * @param $format - one of RdfType const values
     * @return string - the mime type for the given RDF format, or text/plain if the format is unknown
     */
    public static function getMimeType ($format) {
        switch ($format) {
            case self::TURTLE:
                return 'text/turtle';
            case self::RDF_XML:
                return 'application/rdf+xml';
            case self::JSON_LD:
                return 'application/ld+json';
        }
        return 'text/plain';
    }

    /**
     * returns the format for the given mimetype
     * @param $mimeType - an RDF mime type, e.g. application/rdf+xml
     * @return string - the RdfType const value for the given mime type, or null, if there is none for this mime type
     */
    public static function getByMimeType ($mimeType) {
        switch ($mimeType) {
            case 'text/turtle':
                return self::TURTLE;
            case 'application/rdf+xml':
                return self::RDF_XML;
            case 'application/ld+json':
                return self::JSON_LD;
        }
        return null;
    }
}

?>
