<?php

declare(strict_types=1);

namespace App\Service;

use App\DTO\CreateTaskDTO;
use App\Entity\Task;
use App\Repository\TaskRepository;

class TaskService
{
    public function __construct(private readonly TaskRepository $taskRepository)
    {
    }

    public function create(CreateTaskDTO $createTaskDTO): void
    {
        $task = (new Task())->setContent($createTaskDTO->getContent());

        $this->taskRepository->save($task, true);
    }

    public function list(): array
    {
        return $this->taskRepository->findBy([], ['id' => 'desc']);
    }

    public function delete(int $id): void
    {
        $task = $this->taskRepository->find($id);

        if ($task) {
            $this->taskRepository->remove($task, true);
        }
    }

    public function toggle(int $id): void
    {
        $task = $this->taskRepository->find($id);

        if (!$task) {
            return;
        }

        $task->setIsFinished(!$task->isFinished());

        $this->taskRepository->save($task, true);
    }
}
