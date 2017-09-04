<?php
/**
 * In-Memory collection of items
 */
class ItemCollection 
{
    /**
     * Item[]
     */
    protected $items = [];
    
    public function put($item)
    {
        $this->items[] = $item;
    }
}
