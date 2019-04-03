<?php

/**
 * convert array to xml
 *
 * @author aaron <ahua2930@gmail.com>
 *
 * @param array $data source data
 * @param XMLDocumdent $parent parent node
 * @param XMLDocument $root
 * 
 * @return string
 */
function arr2xml($data, $parent = null, $root = null)
{
    $root   = $root ? $root : new DOMDocument('1.0', 'UTF-8');
    $parent = $parent ? $parent : $root;
    $node   = $parent->parentNode;
    foreach ($data as $k => $v) {
        if (is_scalar($v)) {
            $element = $root->createElement($k, $v);
            $parent->appendChild($element);
        } else {
            if (!is_numeric($k)) {
                $el = $root->createElement($k);
                $parent->appendChild($el);
                arr2xml($v, $el, $root);
            } else {
                $el = $root->createElement($parent->nodeName);
                if (!$parent->nodeValue) {
                    $node->removeChild($parent);
                }
                $parent = $node->appendChild($el);
                arr2xml($v, $el, $root);
            }
        }
    }
    return $root->saveXML();
}
