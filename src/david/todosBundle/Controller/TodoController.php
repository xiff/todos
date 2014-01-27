<?php

namespace david\todosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use david\todosBundle\Entity\Todo;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
		$repository = $this->getDoctrine()->getRepository('davidtodosBundle:Todo');
		
		$todos = $repository->findAll();
		
		$todo= new Todo();
        $todo->setName('');
        
        $form=$this->createFormBuilder($todo)->add('name')->getForm();
		
        return array('todos' => $todos,
					 'form'=>$form->createView());
    }
	
    /**
     * @Template()
     */
    public function addAction(Request $request)
    {
        $todo= new Todo();
        $todo->setName('');
        
        $form=$this->createFormBuilder($todo)->add('name')->getForm();
                
        if ($request->getMethod()=='POST'){
            $form->bind($request);
            if ($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($todo);
                $em->flush();
                return $this->redirect($this->generateUrl('todos_todo'), 301);
            }
        } else {
			return $this->redirect($this->generateUrl('todos_todo'), 301);
        }
    }
        
    /**
     * @Route("/todos/edit/{id}", requirements={"id" = "\d+"}, defaults={"id" = 0})
     * @Template()
     */
    public function editAction($id, Request $request)
    {
		if ($id == 0){ // no todo id entered
			return $this->redirect($this->generateUrl('todos_todo'), 301);
		}
		
		$em = $this->getDoctrine()->getManager();
		$todo = $em->getRepository('davidtodosBundle:Todo')->find($id);
        
        if (!$todo) {// no todo in the system
			throw $this->createNotFoundException('No todo found for id '.$id);
        }
        
        $form=$this->createFormBuilder($todo)->add('name')->getForm();
                
        if ($request->getMethod()=='POST'){
            $form->bind($request);
            if ($form->isValid()){
                $em->persist($todo);
                $em->flush();
                return $this->redirect($this->generateUrl('todos_todo'), 301);
            }
        } else {
            return $this->render('davidtodosBundle:Todo:edit.html.twig',array(
                'form'=>$form->createView(),
            ));
        }
        
        return array('name' => $id);
    }
        
	/**
    * @Route("/todos/delete/{id}", requirements={"id" = "\d+"}, defaults={"id" = 0})
    * @Template()
    */
	public function deleteAction($id)
	{
		if ($id == 0){ // no todo id entered
			return $this->redirect($this->generateUrl('todos_todo'), 301);
		}
		
		$em = $this->getDoctrine()->getManager();
		$todo = $em->getRepository('davidtodosBundle:Todo')->find($id);
	 
		if (!$todo) { // no todo in the system
			throw $this->createNotFoundException('No todo found to delete');
		} else {
			$em->remove($todo);
			$em->flush();
			return $this->redirect($this->generateUrl('todos_todo'), 301);
		}
	}	
}
