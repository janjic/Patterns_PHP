<?php

/**
 * The Target interface: a small Collection, since php lacks a native one.
 * The bigger the interface, the greater the hassle while writing Adapters.
 */
interface Collection extends IteratorAggregate
{
    public function add($element);

    public function contains($element);

    public function remove($element);
}