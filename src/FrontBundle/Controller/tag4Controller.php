<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\tag4;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tag4 controller.
 *
 * @Route("tag4")
 */
class tag4Controller extends Controller
{
    /**
     * Lists all tag4 entities.
     *
     * @Route("/", name="tag4_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tag4s = $em->getRepository('FrontBundle:tag4')->findAll();

        return $this->render('tag4/index.html.twig', array(
            'tag4s' => $tag4s,
        ));
    }

    /**
     * Creates a new tag4 entity.
     *
     * @Route("/new", name="tag4_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tag4 = new Tag4();
        $form = $this->createForm('FrontBundle\Form\tag4Type', $tag4);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag4);
            $em->flush($tag4);

            return $this->redirectToRoute('tag4_show', array('id' => $tag4->getId()));
        }

        return $this->render('tag4/new.html.twig', array(
            'tag4' => $tag4,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tag4 entity.
     *
     * @Route("/{id}", name="tag4_show")
     * @Method("GET")
     */
    public function showAction(tag4 $tag4)
    {
        $deleteForm = $this->createDeleteForm($tag4);

        return $this->render('tag4/show.html.twig', array(
            'tag4' => $tag4,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tag4 entity.
     *
     * @Route("/{id}/edit", name="tag4_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, tag4 $tag4)
    {
        $deleteForm = $this->createDeleteForm($tag4);
        $editForm = $this->createForm('FrontBundle\Form\tag4Type', $tag4);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tag4_edit', array('id' => $tag4->getId()));
        }

        return $this->render('tag4/edit.html.twig', array(
            'tag4' => $tag4,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tag4 entity.
     *
     * @Route("/{id}", name="tag4_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, tag4 $tag4)
    {
        $form = $this->createDeleteForm($tag4);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tag4);
            $em->flush($tag4);
        }

        return $this->redirectToRoute('tag4_index');
    }

    /**
     * Creates a form to delete a tag4 entity.
     *
     * @param tag4 $tag4 The tag4 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(tag4 $tag4)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tag4_delete', array('id' => $tag4->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
