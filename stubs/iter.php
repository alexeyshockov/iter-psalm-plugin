<?php

namespace iter;

use Traversable;
use Countable;

/**
 * @template T of int|float
 *
 * @param T $start
 * @param T $end
 * @param T $step
 *
 * @return \Iterator<T>
 */
function range($start, $end, $step = null) {}

/**
 * @template TBefore
 * @template TAfter
 *
 * @param callable(TBefore):TAfter $function
 * @param iterable<TBefore> $iterable
 *
 * @return \Iterator<TAfter>
 */
function map(callable $function, $iterable) {}

/**
 * @template TBefore
 * @template TAfter
 * @template TValue
 *
 * @param callable(TBefore):TAfter $function
 * @param iterable<TBefore, TValue> $iterable
 *
 * @return \Iterator<TAfter, TValue>
 */
function mapKeys(callable $function, $iterable) {}

/**
 * @template TVBefore
 * @template TKAfter
 * @template TVAfter
 *
 * @param callable(TVBefore):iterable<TKAfter, TVAfter> $function
 * @param iterable<TBefore> $iterable
 *
 * @return \Iterator<TKAfter, TVAfter>
 */
function flatMap(callable $function, $iterable) {}

/**
 * @template TV
 * @template TKBefore
 * @template TVAfter
 *
 * @param callable(TValue):TKAfter $function
 * @param iterable<TKBefore, TValue> $iterable
 *
 * @return \Iterator<TKAfter, TValue>
 */
function reindex(callable $function, $iterable) {}

/**
 * @template T
 *
 * @param callable(T):void $function
 * @param iterable<T> $iterable
 *
 * @return void
 */
function apply(callable $function, $iterable) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param callable(TValue):bool
 * @param iterable<TKey, TValue>
 *
 * @param \Iterator<TKey, TValue>
 */
function filter(callable $predicate, $iterable) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey, TValue>
 *
 * @param \Iterator<array{0:TKey, 1:TValue}>
 */
function enumerate($iterable) {}

/**
 * @template TKey
 * @template TValue
 * @template TAcc
 *
 * @param callable(TAcc, TValue, TKey):TAcc $function
 * @param iterable<TKey, TValue> $iterable
 * @param TAcc $startValue
 *
 * @return TAcc
 */
function reduce(callable $function, $iterable, $startValue = null) {}

/**
 * @template TKey
 * @template TValue
 * @template TAcc
 *
 * @param callable(TAcc, TValue, TKey):TAcc $function
 * @param iterable<TKey, TValue> $iterable
 * @param TAcc $startValue
 *
 * @return \Iterator<TAcc>
 */
function reductions(callable $function, $iterable, $startValue = null) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey> $keys
 * @param iterable<TValue> $values
 *
 * @return iterable<TKey, TValue>
 */
function zipKeyValue($keys, $values) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey, TValue> $iterable
 * @param numeric $start
 * @param numeric $length
 *
 * @return iterable<TKey, TValue>
 */
function slice($iterable, $start, $length = INF) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param numeric $num
 * @param iterable<TKey, TValue> $iterable
 *
 * @return iterable<TKey, TValue>
 */
function take($num, $iterable) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param numeric $num
 * @param iterable<TKey, TValue> $iterable
 *
 * @return iterable<TKey, TValue>
 */
function drop($num, $iterable) {
    return slice($iterable, $num);
}

/**
 * @template T
 *
 * @param T $value
 * @param numeric $num
 *
 * @return \Iterator<T>
 */
// TODO assert value is not negative
function repeat($value, $num = INF) {}

/**
 * @template T
 *
 * @param iterable<T, mixed> $iterable
 *
 * @return \Iterator<T>
 */
function keys($iterable) {}

/**
 * @template T
 *
 * @param iterable<mixed, T> $iterable
 *
 * @return \Iterator<int, T>
 */
function values($iterable) {}

/**
 * @template T
 *
 * @param callable(T):bool $predicate
 * @param iterable<T> $iterable
 *
 * @return bool
 */
function any(callable $predicate, $iterable) {}

/**
 * @template T
 *
 * @param callable(T):bool $predicate
 * @param iterable<T> $iterable
 *
 * @return bool
 */
function all(callable $predicate, $iterable) {}

/**
 * @template T
 *
 * @param callable(T):bool $predicate
 * @param iterable<T> $iterable
 *
 * @return null|T
 */
function search(callable $predicate, $iterable) {}

/**
 * @template T
 *
 * @param callable(T):bool $predicate
 * @param iterable<T> $iterable
 *
 * @return iterable<T>
 */
function takeWhile(callable $predicate, $iterable) {}

/**
 * @template T
 *
 * @param callable(T):bool $predicate
 * @param iterable<T> $iterable
 *
 * @return iterable<T>
 */
function dropWhile(callable $predicate, $iterable) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey, TValue> $iterable
 *
 * @return iterable<TValue, TKey>
 */
function flip($iterable) {}

/**
 * @template TKey of array-key
 * @template TValue
 *
 * @param iterable<TKey, TValue> $iterable
 * @param numeric $size
 * @param bool $preserveKeys
 *
 * @return \Iterator<array<TKey, TValue>>
 */
function chunk($iterable, $size, $preserveKeys = true) {}

/**
 * @param string $separator
 * @param iterable $iterable
 *
 * @return string
 */
// TODO iterable of string or objects with __toString...
function join($separator, $iterable) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey, TValue> $iterable
 *
 * @return \Iterator<TKey, TValue>
 */
function toIter($iterable) {}

/**
 * @template T
 *
 * @param iterable $iterable<T>
 *
 * @return array<int, T>
 */
function toArray($iterable) {}

/**
 * @template TKey of array-key
 * @template TValue
 *
 * @param iterable<TKey, TValue> $iterable
 *
 * @return array<TKey, TValue>
 */
function toArrayWithKeys($iterable) {}
