<?php

declare(strict_types=1);

namespace MageMastery\Todo\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultFactory;
use MageMastery\Todo\Model\TaskFactory;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;

class Index implements ActionInterface
{
    /**
     * @var TaskResource
     */
    private $taskResource;

    /**
     * @var TaskFactory
     */
    private $taskFactory;

    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * Index constructor.
     * @param TaskResource $taskResource
     * @param TaskFactory $taskFactory
     * @param ResultFactory $resultFactory
     */
    public function __construct(
        TaskResource $taskResource,
        TaskFactory $taskFactory,
        ResultFactory $resultFactory
    ) {
        $this->taskFactory = $taskFactory;
        $this->taskResource = $taskResource;
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        $task = $this->taskFactory->create();
        $task->setData([
            'label' => 'New Task 22',
            'status' => 'open',
            'customer_id' => 1
        ]);
        $this->taskResource->save($task);
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
