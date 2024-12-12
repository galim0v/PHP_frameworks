<?php

namespace App\Controller;

use App\DTO\CreateTaskDTO;
use App\Form\CreateTaskType;
use App\Service\TaskService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(TaskService $taskService): Response
    {
        $tasks = $taskService->list();

        return $this->render('task/index.html.twig', [
            'tasks' => $tasks,
        ]);
    }

    #[Route('create', name: 'task_create', methods: ['POST'])]
    public function create(Request $request, TaskService $taskService): Response
    {
        $form = $this->createForm(CreateTaskType::class);
        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {
            $this->addFlash('notice', 'Task was not created');

            return $this->redirectToRoute('main');
        }

        /** @var CreateTaskDTO $data */
        $data = $form->getData();

        $taskService->create($data);

        return $this->redirectToRoute('main');
    }

    #[Route('delete/{id}', name: 'task_delete', methods: ['POST'])]
    public function delete(int $id, TaskService $taskService): Response
    {
        $taskService->delete($id);

        return $this->redirectToRoute('main');
    }

    #[Route('toggle/{id}', name: 'task_toggle', methods: ['POST'])]
    public function toggle(int $id, TaskService $taskService): Response
    {
        $taskService->toggle($id);

        return $this->redirectToRoute('main');
    }
}
