<?php
// A client whants to place an order
// In order to do that he selects interesting items
// which compose an order

$client = ClientsFacade->determineCurrentClient();

$itemsCollection = ItemsCollectionFactory->make();

$firstItemOfInterest = ItemsFacade->getItem($itemIdentity);
$secondItemOfInterest = ItemsFacade->getItem($itemIdentity);
$thirdItemOfInterest = ItemsFacade->getItem($itemIdentity);

$itemsCollection->put($firstItemOfInterest);
$itemsCollection->put($secondItemOfInterest);
$itemsCollection->put($thirdItemOfInterest);

$order = OrdersFacade->createOrder();
$order->items = $itemsCollection;

OrdersFacade->placeOrder($client, $order);
