<?php
class Zorg_Javascript_Jquery {
    const ALIAS = "jQuery";
    const FILE = 'jquery-1.4.2.min.js';
    const SRC_FOLDER = 'src';

    /**
     * Register jQuery into the specified Zorg_View
     * @param Zorg_View $view
     */
    public static function register(Zorg_View $view) {
        if (!file_exists(JS_PATH.DIRECTORY_SEPARATOR.self::FILE)) {
            copy(__DIR__.DIRECTORY_SEPARATOR.self::SRC_FOLDER.
                    DIRECTORY_SEPARATOR.self::FILE,
                    JS_PATH.DIRECTORY_SEPARATOR.self::FILE);
        }
        $script = new Zorg_Html_Script();
        $script->setType('text/javascript');
        $script->setSrc(JS_PATH_RELATIVE.DIRECTORY_SEPARATOR.self::FILE);
        $view->addScript($script);
    }

    /**
     * Add elements to the set of matched elements.
     */
    public static function add($element, $context = NULL) {
        $return = '.add(';
        if ($context === NULL) {
            $return .= $element.')';
        } else {
            $return .= $element.','.$context.')';
        }
        return $return;
    }

    /**
     * Adds the specified class(es) to each of the set of matched elements.
     */
    public static function addClass($class) {
        return '.addClass('.$class.')';
    }

    /**
     * Insert content, specified by the parameter, after each element in the
     * set of matched elements.
     */
    public static function after($content) {
        return '.after('.$content.')';
    }

    /**
     * Add the previous set of elements on the stack to the current set.
     */
    public static function andSelf() {
        return '.andSelf()';
    }

    /**
     * Insert content, specified by the parameter, to the end of each element
     * in the set of matched elements.
     */
    public static function append($content) {
        return '.append('.$content.')';
    }

    /**
     * Insert every element in the set of matched elements to the end of the
     * target.
     */
    public static function appendTo($target) {
        return '.appendTo('.$target.')';
    }

    /**
     * Get or set the value of an attribute for the first element in the set of
     * matched elements.
     */
    public static function attr($name, $value = NULL) {
        $return = '.attr(';
        if ($value === NULL) {
            $return .= $name.')';
        } else {
            $return .= $name.','.$value.')';
        }
        return $return;
    }

    /**
     * Insert content, specified by the parameter, before each element in the
     * set of matched elements.
     */
    public static function before($content) {
        return '.before('.$content.')';
    }

    /**
     * Get the children of each element in the set of matched elements,
     * optionally filtered by a selector.
     */
    public static function children($selector) {
        return '.children('.$selector.')';
    }

    /**
     * Create a copy of the set of matched elements.
     */
    public static function cloneIt($withData = NULL) {
        return '.clone('.$withData.')';
    }

    /**
     * Get the first ancestor element that matches the selector, beginning at
     * the current element and progressing up through the DOM tree.
     */
    public static function closest($selector, $context = NULL) {
        $return = '.closest(';
        if ($context === NULL) {
            $return .= $selector.')';
        } else {
            $return .= $selector.','.$context.')';
        }
        return $return;
    }

    /**
     * Get the children of each element in the set of matched elements,
     * including text nodes.
     */
    public static function contents() {
        return '.contents()';
    }

    /**
     * The DOM node context originally passed to jQuery(); if none was passed
     * then context will likely be the document.
     */
    public static function context(){
        return '.context';
    }

    /**
     * Get the value of a style property for the first element in the set of
     * matched elements.
     */
    public static function css($property, $value = NULL) {
        $return = '.css(';
        if ($value === NULL) {
            $return .= $property.')';
        } else {
            $return .= $property.','.$value.')';
        }
        return $return;
    }

    /**
     * Remove the set of matched elements from the DOM.
     */
    public static function detach($selector = NULL) {
        return '.detach('.$selector.')';
    }

    /**
     * Iterate over a jQuery object, executing a function for each matched
     * element.
     */
    public static function each($function) {
        return '.each('.$function.')';
    }

    /**
     * Remove all child nodes of the set of matched elements from the DOM.
     */
    public static function emptyIt() {
        return '.empty()';
    }

    /**
     * End the most recent filtering operation in the current chain and return
     * the set of matched elements to its previous state.
     */
    public static function end() {
        return '.end()';
    }

    /**
     * Reduce the set of matched elements to the one at the specified index.
     */
    public static function eq($index) {
        return '.eq('.$index.')';
    }

    /**
     * Takes a string and throws an exception containing it.
     */
    public static function error($message){
        return self::ALIAS.'.error('.$message.')';
    }

    /**
     * Reduce the set of matched elements to those that match the selector or
     * pass the function's test.
     */
    public static function filter($selector) {
        return '.filter('.$selector.')';
    }

    /**
     * Get the descendants of each element in the current set of matched
     * elements, filtered by a selector.
     */
    public static function find($selector) {
        return '.find('.$selector.')';
    }

    /**
     * Reduce the set of matched elements to the first in the set.
     */
    public static function first() {
        return '.first()';
    }

    /**
     * Reduce the set of matched elements to those that have a descendant that
     * matches the selector or DOM element.
     */
    public static function has($selector) {
        return '.has('.$selector.')';
    }

    /**
     * Determine whether any of the matched elements are assigned the given
     * class.
     */
    public static function hasClass($class) {
        return '.hasClass('.$class.')';
    }

    /**
     * Get the current computed height for the first element in the set of
     * matched elements.
     */
    public static function height($value = NULL) {
        return '.height('.$value.')';
    }

    /**
     * Get the HTML contents of the first element in the set of matched
     * elements.
     */
    public static function html($htmlString = NULL) {
        $return = '.html(';
        if ($htmlString === NULL) {
            $return .= ')';
        } else {
            $return .= $htmlString.')';
        }
        return $return;
    }

    /**
     * Get the current computed height for the first element in the set of
     * matched elements, including padding but not border.
     */
    public static function innerHeight() {
        return '.innerHeight()';
    }

    /**
     * Get the current computed width for the first element in the set of
     * matched elements, including padding but not border.
     */
    public static function innerWidth() {
        return '.innerWidth()';
    }

    /**
     * Insert every element in the set of matched elements after the target.
     */
    public static function insertAfter($target) {
        return '.insertAfter('.$target.')';
    }

    /**
     * Insert every element in the set of matched elements before the target.
     */
    public static function insertBefore($target) {
        return '.insertBefore('.$target.')';
    }

    /**
     * Check the current matched set of elements against a selector and return
     * true if at least one of these elements matches the selector.
     */
    public static function is($selector) {
        return '.is('.$selector.')';
    }

    /**
     * Reduce the set of matched elements to the final one in the set.
     */
    public static function last() {
        return '.last()';
    }

    /**
     * Pass each element in the current matched set through a function,
     * producing a new jQuery object containing the return values.
     */
    public static function map($callback) {
        return '.map('.$callback.')';
    }

    /**
     * Get the immediately following sibling of each element in the set of
     * matched elements, optionally filtered by a selector.
     */
    public static function next($selector = NULL) {
        return '.next('.$selector.')';
    }

    /**
     * Get all following siblings of each element in the set of matched
     * elements, optionally filtered by a selector.
     */
    public static function nextAll($selector = NULL) {
        return '.nextAll('.$selector.')';
    }

    /**
     * Get all following siblings of each element up to but not including the
     * element matched by the selector.
     */
    public static function nextUntil($selector = NULL) {
        return '.nextUntil('.$selector.')';
    }

    /**
     * Remove elements from the set of matched elements.
     */
    public static function not($selector) {
        return '.not('.$selector.')';
    }

    /**
     * Get the current coordinates of the first element in the set of matched
     * elements, relative to the document.
     */
    public static function offset($coordinates = NULL) {
        return '.offset('.$coordinates.')';
    }

    /**
     * Get the closest ancestor element that is positioned.
     */
    public static function offsetParent() {
        return '.offsetParent()';
    }

    /**
     * Get the current computed height for the first element in the set of
     * matched elements, including padding and border.
     */
    public static function outerHeight($includeMargin = NULL) {
        return '.outerHeight('.$includeMargin.')';
    }

    /**
     * Get the current computed width for the first element in the set of
     * matched elements, including padding and border.
     */
    public static function outerWidth($includeMargin = NULL) {
        return '.outerWidth('.$includeMargin.')';
    }

    /**
     * Get the parent of each element in the current set of matched elements,
     * optionally filtered by a selector.
     */
    public static function parent($selector = NULL) {
        return '.parent('.$selector.')';
    }

    /**
     * Get the ancestors of each element in the current set of matched elements,
     * optionally filtered by a selector.
     */
    public static function parents($selector = NULL) {
        return '.parents('.$selector.')';
    }

    /**
     * Get the ancestors of each element in the current set of matched elements,
     * up to but not including the element matched by the selector.
     */
    public static function parentsUntil($selector = NULL) {
        return '.parentsUntil('.$selector.')';
    }

    /**
     * Get the current coordinates of the first element in the set of matched
     * elements, relative to the offset parent.
     */
    public static function position() {
        return '.position()';
    }

    /**
     * Insert content, specified by the parameter, to the beginning of each
     * element in the set of matched elements.
     */
    public static function prepend($content) {
        return '.prepend('.$content.')';
    }

    /**
     * Insert every element in the set of matched elements to the beginning of
     * the target.
     */
    public static function prependTo($target) {
        return '.prependTo('.$target.')';
    }

    /**
     * Get the immediately preceding sibling of each element in the set of
     * matched elements, optionally filtered by a selector.
     */
    public static function prev($selector = NULL) {
        return '.prev('.$selector.')';
    }

    /**
     * Get all preceding siblings of each element in the set of matched
     * elements, optionally filtered by a selector.
     */
    public static function prevAll($selector = NULL) {
        return '.prevAll('.$selector.')';
    }

    /**
     * Get all preceding siblings of each element up to but not including the
     * element matched by the selector.
     */
    public static function prevUntil($selector = NULL) {
        return '.prevUntil('.$selector.')';
    }

    /**
     * Add a collection of DOM elements onto the jQuery stack.
     */
    public static function pushStack($elements, $name = NULL, $arguments = NULL){
        $return = self::ALIAS.'.pushStack(';
        if ($name === NULL){
            $return .= $elements.')';
        } else {
            $return .= $elements.','.$name.','.$arguments.')';
        }
        return $return;
    }

    /**
     * Remove the set of matched elements from the DOM.
     */
    public static function remove($selector = NULL) {
        return '.remove('.$selector.')';
    }

    /**
     * Remove an attribute from each element in the set of matched elements.
     */
    public static function removeAttr($attribute) {
        return '.removeAttr('.$attribute.')';
    }

    /**
     * Remove a single class, multiple classes, or all classes from each element
     * in the set of matched elements.
     */
    public static function removeClass($class) {
        return '.removeClass('.$class.')';
    }

    /**
     * Replace each target element with the set of matched elements.
     */
    public static function replaceAll(){
        return '.replaceAll()';
    }

    /**
     * Replace each element in the set of matched elements with the provided
     * new content.
     */
    public static function replaceWith($content){
        return '.replaceWith('.$content.')';
    }

    /**
     * Get the current horizontal position of the scroll bar for the first
     * element in the set of matched elements.
     */
    public static function scrollLeft($value = NULL){
        return '.scrollLeft('.$value.')';
    }

    /**
     * Get the current vertical position of the scroll bar for the first element
     * in the set of matched elements.
     */
    public static function scrollTop($value = NULL){
        return '.scrollTop('.$value.')';
    }

    /**
     * Select element(s) with the specified selector.
     */
    public static function select($selector) {
        return self::ALIAS.'('.$selector.')';
    }

    /**
     * A selector representing selector originally passed to jQuery().
     */
    public static function selector(){
        return '.selector';
    }

    /**
     * Get the siblings of each element in the set of matched elements,
     * optionally filtered by a selector.
     */
    public static function siblings($selector = NULL) {
        return '.siblings('.$selector.')';
    }

    /**
     * Reduce the set of matched elements to a subset specified by a range of
     * indices.
     */
    public static function slice($start, $end = NULL) {
        $return = '.slice(';
        if ($end === NULL) {
            $return .= $start.')';
        } else {
            $return .= $start.','.$end.')';
        }
        return $return;
    }

    /**
     * End a jQuery line.
     */
    public static function stopLine() {
        return ';';
    }

    /**
     * Get the combined text contents of each element in the set of matched
     * elements, including their descendants.
     */
    public static function text($text = NULL){
        return '.text('.$text.')';
    }

    /**
     * Add or remove one or more classes from each element in the set of matched
     * elements, depending on either the class's presence or the value of the
     * switch argument.
     */
    public static function toggleClass($class, $switch = NULL) {
        $return = '.toggleClass(';
        if ($switch === NULL) {
            $return .= $class.')';
        } else {
            $return .= $class.','.$switch.')';
        }
        return $return;
    }

    /**
     * Remove the parents of the set of matched elements from the DOM, leaving
     * the matched elements in their place.
     */
    public static function unwrap(){
        return '.unwrap()';
    }

    /**
     * Get or set the current value of the first element in the set of matched
     * elements.
     */
    public static function val($value = NULL) {
        $return = '.val(';
        if ($value === NULL) {
            $return .= ')';
        } else {
            $return .= $value.')';
        }
        return $return;
    }

    /**
     * Get the current computed width for the first element in the set of
     * matched elements.
     */
    public static function width($value = NULL){
        return '.width('.$value.')';
    }

    /**
     * Wrap an HTML structure around each element in the set of matched
     * elements.
     */
    public static function wrap($wrappingElement){
        return '.wrap('.$wrappingElement.')';
    }

    /**
     * Wrap an HTML structure around all elements in the set of matched
     * elements.
     */
    public static function wrapAll($wrappingElement){
        return '.wrapAll('.$wrappingElement.')';
    }

    /**
     * Wrap an HTML structure around the content of each element in the set of
     * matched elements.
     */
    public static function wrapInner($wrappingElement){
        return '.wrapInner('.$wrappingElement.')';
    }

}
?>
