<?php

declare(strict_types=1);

namespace MageMastery\Todo\Api\Data;

use Magento\Framework\Api\Search\SearchResultInterface;

/**
 * @api
 */
interface TaskSearchResultInterface extends SearchResultInterface
{
    /**
     * @return TaskInterface[]
     */
    public function getItems();

    /**
     * @param TaskInterface[] $items
     * @return TaskSearchResultInterface
     */
    public function setItems(array $items = null);
}
